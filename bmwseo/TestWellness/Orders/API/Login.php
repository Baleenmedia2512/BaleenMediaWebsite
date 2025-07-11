<?php 
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
try {

	$json = file_get_contents('php://input'); 
	// decoding the received JSON and store into $obj variable.
	$obj = json_decode($json,true);	

    $UserName = $obj['JsonUserName'];
    $password = $obj['JsonPassword'];
//echo json_encode($obj['JsonUserName']);
   if( $obj['JsonUserName']!="" && $obj['JsonPassword']!="")    {
      
      $mysqli = new mysqli("localhost","baleeed5_web_adm","Baleen@789#","baleeed5_live","3306");
      $result = $mysqli->query("SELECT * FROM `employee_table` WHERE `userName` = '".$UserName."' and `password` = '".$password."'");

      if($result->num_rows == 0){
        echo  json_encode('Wrong Details');
      }
      else{
        echo json_encode('Login Succesfully'); 	
       }
   
    }
   
   else{
	    echo json_encode('Please enter Valid Details!!');
    }

   
   }
  
  //catch exception
  catch(Exception $e) {
	echo json_encode('Message: ' .$e->getMessage());
  }


?>