<?php
include("db_pdo.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
try{
$PhysicalActivity = $_GET['JsonPhysicalActivity'];
$UserName = $_GET['JsonUserName'];
$pdo = establishConnection($UserName);
 if( trim($_GET['JsonPhysicalActivity']) !="" && trim($_GET['JsonUserName']) != "" ){
$stmt = $pdo->prepare("SELECT Sum(Measurement) As TotalMeasurement FROM `data_table` WHERE `EntryUser` = :usernamePDO AND `ActivityName` = :physicalactivityPDO AND `EntryDate` = CURRENT_DATE AND `Validity` = 1");
      $stmt->execute(array(':usernamePDO' => $UserName, ':physicalactivityPDO' => $PhysicalActivity));
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      if(!$result){
        echo json_encode('Some Network Error');
      }
      else{
        echo json_encode($result['TotalMeasurement']); 	
       }
    }   
   }  
  //catch exception
  catch(Exception $e) {
    echo json_encode('Message: ' .$e->getMessage());
  }
?>