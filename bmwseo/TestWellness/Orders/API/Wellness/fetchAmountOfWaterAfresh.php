<?php

include('db_pdo.php');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

// Get the current date
$currentDate = $_GET['JsonDays'];
$userName = $_GET['JsonUserName'];
$activity = $_GET['JsonActivity'];
$ActivityLike = "%" . $activity . "%";

try {
    // Query the database to retrieve the maximum water amount entered by the user today
    $pdo = establishConnection($userName);
    $stmt = $pdo->prepare("SELECT MAX(CAST(SUBSTRING_INDEX(ActivityName, ' ', -2) AS UNSIGNED)) AS max_water_amount FROM activity_table WHERE EntryUser = :userName AND EntryDate = :currentDate AND ActivityName LIKE :activityPDO AND Validity = 1");
    $stmt->bindParam(':userName', $userName);
    $stmt->bindParam(':currentDate', $currentDate);
    $stmt->bindParam(':activityPDO', $ActivityLike);
    $stmt->execute();
    
    // Fetch the result
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if the key 'max_water_amount' exists before accessing it
    if (isset($result['max_water_amount'])) {
        $maxAmount = $result['max_water_amount'];

        // Extract the numeric part from the activity name
        preg_match('/\d+/', $maxAmount, $matches);
        $numericPart = intval($matches[0]);

        echo $numericPart;
    } else {
        // Handle the case when the key doesn't exist (no records found)
        echo 0;
    }
} catch (Exception $e) {
    echo json_encode('Message: ' . $e->getMessage());
}

?>
