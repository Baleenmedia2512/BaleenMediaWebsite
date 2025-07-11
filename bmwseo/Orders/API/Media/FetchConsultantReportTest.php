<?php
require 'ConnectionManager.php';
$dbName = isset($_GET['JsonDBName']) ? $_GET['JsonDBName'] : 'Baleen Media';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

try {
    ConnectionManager::connect($dbName);
    $pdo = ConnectionManager::getConnection();
} catch(PDOException $e) {
    echo json_encode(['error' => "Connection failed: " . $e->getMessage()]);
    exit();
}

$start_date = isset($_GET['JsonStartDate']) ? $_GET['JsonStartDate'] : '';
$end_date = isset($_GET['JsonEndDate']) ? $_GET['JsonEndDate'] : '';

if ($start_date && $end_date) {
    // Query orders with the calculated price
    $sql = "SELECT ROW_NUMBER() OVER (ORDER BY o.ConsultantName, o.Card, o.AdType) AS id, 
                o.ConsultantName AS name, 
                o.Card AS rateCard, 
                o.AdType AS rateType, 
                COUNT(*) AS count,
                0 AS price,
                GROUP_CONCAT(o.OrderNumber ORDER BY o.OrderNumber SEPARATOR ', ') AS OrderNumbers
            FROM order_table o
            JOIN financial_transaction_table ftt ON o.OrderNumber = ftt.OrderNumber
            WHERE o.OrderDate BETWEEN :startDate AND :endDate
            AND o.ConsultantName != ''
            AND o.OrderNumber > 0
            AND o.OrderNumber < 100000
            AND o.CancelFlag = 0
            AND o.IncentiveProcessedOn = '0000-00-00'
            AND ftt.ValidStatus = 'Valid'
            GROUP BY o.ConsultantName, o.Card, o.AdType
            ORDER BY o.ConsultantName, rateCard, rateType;
            ";
    $stmt = $pdo->prepare($sql);
    $stmt->bindParam(':startDate', $start_date, PDO::PARAM_STR);
    $stmt->bindParam(':endDate', $end_date, PDO::PARAM_STR);
    $stmt->execute();
    $orderDetails = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($orderDetails) {
        // Fetch prices from commission_table
        $priceSql = "SELECT ConsultantName, RateCard AS rateCard, RateType AS rateType, UnitPrice AS price
                     FROM commission_table";
        $priceStmt = $pdo->prepare($priceSql);
        $priceStmt->execute();
        $priceDetails = $priceStmt->fetchAll(PDO::FETCH_ASSOC);

        // Create an associative array for easy lookup
        $priceLookup = [];
        foreach ($priceDetails as $price) {
            $priceLookup[$price['ConsultantName']][$price['rateCard']][$price['rateType']] = $price['price'];
        }

        // Update order details with fetched prices
        foreach ($orderDetails as &$order) {
            if (isset($priceLookup[$order['name']][$order['rateCard']][$order['rateType']])) {
                $order['price'] = $priceLookup[$order['name']][$order['rateCard']][$order['rateType']];
            }
        }
    } else {
        echo json_encode(['error' => 'No orders found.']);
        exit();
    }

    header('Content-Type: application/json');
    echo json_encode($orderDetails);  // Return the list of order details with updated prices

    // Close the database connection
    $pdo = null;
} else {
    echo json_encode(['error' => 'No valid date range provided.']);
    exit();
}
?>
