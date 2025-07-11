<?php 
include("db.php");

try {
	$json = file_get_contents('php://input'); 
	// decoding the received JSON and store into $obj variable.
	$obj = json_decode($json,true);	
    $UserName = $obj['UserName'];


    $add = $mysqli->query("UPDATE `conveyence_table` SET `ValidStatus`= 1 WHERE `EntryUser` = '".$UserName."' and `ID`= (SELECT max(ID) FROM `conveyence_table`)");

    if($add){
        echo  json_encode('cancelled');// alert msg in react native
    }
    else{
     echo json_encode('Something Went Wrong!!!,Unable to cancel'); // our query fail 		
    }


}
  
//catch exception
catch(Exception $e) {
  echo json_encode('Message: ' .$e->getMessage());
}
?>