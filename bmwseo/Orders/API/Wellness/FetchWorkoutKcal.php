<?php
include('db_pdo.php');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

try{
    $userName = $_GET['JsonUserName'];
    $fromDate = $_GET['JsonDate'];
    $endDate = $_GET['JsonNow']; // Retrieving JsonNow parameter

    // Connection to the database with correct user ID
    $pdo = establishConnection($userName);
    
    // Sql Statement for fetching Sum
    $stmt = $pdo->prepare("SELECT SUM(`Measurement`) AS `Workout` FROM data_table WHERE `ActivityName` = 'Workout' AND `EntryUser` = :userPDO AND `EntryDate` >= :fromDatePDO AND `EntryDate` <= :endDatePDO AND `Validity` = 1");

    // Binding the values
    $stmt->bindParam(':userPDO', $userName);
    $stmt->bindParam(':fromDatePDO', $fromDate);
    $stmt->bindParam(':endDatePDO', $endDate); // Binding endDate parameter
    
    $stmt->execute(); // Executing the prepared Statement
     
    // Sql Statement for fetching Average
    $avgstmt = $pdo->prepare("SELECT AVG(`Measurement`) AS `Workout` FROM data_table WHERE `ActivityName` = 'Workout' AND `EntryUser` = :userPDO AND `EntryDate` >= :fromDatePDO AND `EntryDate` <= :endDatePDO AND `Validity` = 1");

    // Binding the values
    $avgstmt->bindParam(':userPDO', $userName);
    $avgstmt->bindParam(':fromDatePDO', $fromDate);
    $avgstmt->bindParam(':endDatePDO', $endDate); // Binding endDate parameter
    
    $avgstmt->execute(); // Executing the prepared Statement
     
    $TotalMeasurement = $stmt->fetchColumn(); // Fetching Value from the DB
    $AverageMeasurement = $avgstmt->fetchColumn(); // Fetching Value from the DB
     
    $ResultArray = array("Total" => round($TotalMeasurement,0). " Kcal", "Average" => round($AverageMeasurement,0). " /day");
    echo json_encode($ResultArray);
} catch (PDOException $e) {
    echo "Error: ". $e->getMessage(); // Displaying the Error
} finally {
    $pdo = null; // Close the Connection
}
?>
