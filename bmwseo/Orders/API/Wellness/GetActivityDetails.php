<?php
include("db_pdo.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
try{
$Activity = $_GET['JsonActivity'];
$UserName = $_GET['JsonUserName'];
$currentDate = $_GET['JsonNow'];
$pdo = establishConnection($UserName);
 if( trim($_GET['JsonActivity']) !="" && trim($_GET['JsonUserName']) != "" ){
$stmt = $pdo->prepare("SELECT * FROM `activity_table` WHERE `EntryUser` = :usernamePDO AND `ActivityName` = :activityPDO AND `EntryDate` = :currentDatePDO AND `Validity` = 1");
      $stmt->execute(array(':usernamePDO' => $UserName, ':activityPDO' => $Activity, ':currentDatePDO' => $currentDate));
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      if(!$result){
        echo json_encode('Not Posted');
      }
      else{
        echo json_encode('Posted'); 	
       }
    }   
   }  
  //catch exception
  catch(Exception $e) {
    echo json_encode('Message: ' .$e->getMessage());
  }
?>