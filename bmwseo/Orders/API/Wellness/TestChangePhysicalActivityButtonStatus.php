<?php
include("db_pdo.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
try{
$PhysicalActivity = $_GET['JsonPhysicalActivity'];
$UserName = $_GET['JsonUserName'];
$CurrentDate = $_GET['JsonDate'];
$pdo = establishConnection($UserName);
 if( trim($_GET['JsonPhysicalActivity']) !="" && trim($_GET['JsonUserName']) != "" ){
$stmt = $pdo->prepare("UPDATE  data_table SET `Validity` = 0 WHERE `EntryDate` = :currentDatePDO AND `EntryUser` = :usernamePDO AND `ActivityName`=  :physicalactivityPDO");

// Bind the parameters
$stmt->bindParam(':usernamePDO', $UserName);
$stmt->bindParam(':physicalactivityPDO', $PhysicalActivity);
$stmt->bindParam(':currentDatePDO', $CurrentDate);

// Execute the statement
$stmt->execute();
echo json_encode("Updated Successfully.");
}
else{
    echo json_encode("Record not Inserted due to Network Error.");
}
}
catch(Exception $e){
    echo json_encode($e);
}
?>