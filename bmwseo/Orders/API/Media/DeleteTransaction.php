<?php
require 'ConnectionManager.php';

$dbName = isset($_GET['JsonDBName']) ? $_GET['JsonDBName'] : 'Baleen Media';

header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

try {
    ConnectionManager::connect($dbName);
    $pdo = ConnectionManager::getConnection();

    $rateWiseOrderNumber = $_GET['JsonRateWiseOrderNumber'];
    $orderNumber = $_GET['JsonOrderNumber'];

    if ($rateWiseOrderNumber && $orderNumber) {
        
        $financeStmt = $pdo->prepare("UPDATE financial_transaction_table SET RateWiseOrderNumber = -:RateWiseOrderNumber, ValidStatus = 'Invalid' WHERE OrderNumber = :OrderNumber");
        $financeStmt->bindParam(':RateWiseOrderNumber', $rateWiseOrderNumber);
        $financeStmt->bindParam(':OrderNumber', $orderNumber);
        $financeStmt->execute();

        $financeRowCount = $financeStmt->rowCount();

            if ($financeRowCount > 0) {
                echo json_encode(['success' => true, 'message' => 'Transaction deleted successfully.']);
            } else {
                echo json_encode(['success' => false, 'message' => 'No Transaction deleted.']);
            }
        
    } else {
        echo json_encode(['success' => false, 'message' => 'Order Number not provided.']);
    }
} catch (PDOException $e) {
    echo json_encode(['success' => false, 'message' => 'Error: ' . $e->getMessage()]);
}
?>
