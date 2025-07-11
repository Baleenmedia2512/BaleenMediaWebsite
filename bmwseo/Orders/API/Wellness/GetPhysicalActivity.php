<?php
include("db_pdo.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
try{
$PhysicalActivity = $_GET['JsonPhysicalActivity'];
$UserName = $_GET['JsonUserName'];
$currentDate = $_GET['JsonNow'];
$pdo = establishConnection($UserName);
 if( trim($_GET['JsonPhysicalActivity']) !="" && trim($_GET['JsonUserName']) != "" ){
$stmt = $pdo->prepare("SELECT * FROM `data_table` WHERE `EntryUser` = :usernamePDO AND `ActivityName` = :physicalactivityPDO AND `EntryDate` = :currentDatePDO AND `Validity` = 1");
      $stmt->execute(array(':usernamePDO' => $UserName, ':physicalactivityPDO' => $PhysicalActivity, ':currentDatePDO' => $currentDate));
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