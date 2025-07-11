<?php
include('db_pdo.php');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

try{
    $userName = $_GET['JsonUserName'];
    $fromDate = $_GET['JsonDate'];

    //connection to the database with correct user ID
    $pdo = establishConnection($userName);
    
    //Sql Statement
    $stmt = $pdo -> prepare("SELECT ROUND(SUM(`Measurement`)) as 'Measurement' FROM data_table WHERE `ActivityName` = 'Workout' AND `EntryUser` = :userPDO AND `EntryDate` >= :fromDatePDO AND `Validity` = 1");
    
    //Binding the values
    $stmt -> bindParam(':userPDO', $userName);
    $stmt -> bindParam(':fromDatePDO', $fromDate);
    
    $stmt -> execute(); //Executing the prepared Statement
    $TotalMeasurement = $stmt->fetchColumn(); //Fetching Value from the DB

     // If time is null, set it to '-'
    if ($TotalMeasurement === null) {
        $TotalMeasurement = '-';
    }

    echo json_encode($TotalMeasurement);
//     echo json_encode($TotalMeasurement.' Kcal');
//     echo "UserNAME".$userName."dATE".$fromDate;
} catch (PDOException $e) {
     echo "Error: ". $e -> getMessage(); //Displaying the Error
} finally {
     $pdo = null; //Close the Connection
}
?>
    