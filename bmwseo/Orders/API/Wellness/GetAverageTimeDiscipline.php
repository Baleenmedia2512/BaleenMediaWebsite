<?php
include('db_pdo.php');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

try {
    // Retrieve parameters from the GET request
    $userName = $_GET['JsonUserName'];
    $activityName = $_GET['JsonActivityName'];
    $currentDate = $_GET['JsonNow'];
    $fromDate = $_GET['JsonDate'];
    $pdo = establishConnection($userName);

    // Initialize the query string
    $query = "";

    // Check the activity name and set the query string accordingly
    if ($activityName === 'Workout' || $activityName === 'Weight') {
        // If activity is "workout" or "weight", query the data_table
        $query = "SELECT DATE_FORMAT(SEC_TO_TIME(AVG(TIME_TO_SEC(PostedDateTime))), '%H:%i') AS AvgPostedTime FROM data_table WHERE EntryUser = :userName AND ActivityName = :activityName AND Validity = 1 AND EntryDate >= :fromDatePDO AND EntryDate <= :currentDatePDO";
    } else {
        // For other activities, query the activity_table
        $query = "SELECT DATE_FORMAT(SEC_TO_TIME(AVG(TIME_TO_SEC(Time(PostedDateTime)))), '%H:%i') AS AvgPostedTime FROM activity_table WHERE EntryUser = :userName AND ActivityName = :activityName AND Validity = 1 AND EntryDate >= :fromDatePDO AND EntryDate <= :currentDatePDO";
    }

    // Prepare and execute the query
    $stmt = $pdo->prepare($query);
    $stmt->bindParam(':userName', $userName);
    $stmt->bindParam(':activityName', $activityName);
    $stmt->bindParam(':currentDatePDO', $currentDate);
    $stmt->bindParam(':fromDatePDO', $fromDate);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Extract only the time from the "AvgPostedTime" field
    $time = $result['AvgPostedTime'];

    // If time is null, set it to '-'
    if ($time === null) {
        $time = '-';
    }

    // Output the time as JSON
    echo json_encode($time);
    
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
} finally {
    $pdo = null; // Close the PDO connection
}
?>
