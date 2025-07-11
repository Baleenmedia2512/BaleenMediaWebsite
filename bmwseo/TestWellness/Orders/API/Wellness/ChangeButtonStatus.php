<?php
include("db_pdo.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
try{
$Activity = $_GET['JsonActivity'];
$UserName = $_GET['JsonUserName'];
$CurrentDate = $_GET['JsonDate'];
$pdo = establishConnection($UserName);
 if( trim($_GET['JsonActivity']) !="" && trim($_GET['JsonUserName']) != "" ){
$stmt = $pdo->prepare("UPDATE  activity_table SET `Validity` = 0 WHERE `EntryDate` = :currentDatePDO AND `EntryUser` = :usernamePDO AND `ActivityName`=  :activityPDO");

// Bind the parameters
$stmt->bindParam(':usernamePDO', $UserName);
$stmt->bindParam(':activityPDO', $Activity);
$stmt->bindParam(':currentDatePDO', $CurrentDate);

// Execute the statement
$stmt->execute();
echo json_encode("Record inserted successfully.");
}
else{
    echo json_encode("Record not Inserted due to Network Error.");
}
}
catch(Exception $e){
    echo json_encode($e);
}
?>