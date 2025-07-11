<?php 
include 'db.php';
try {
	$json = file_get_contents('php://input');
 
	// decoding the received JSON and store into $obj variable.
	$obj = json_decode($json,true);
	
	// name store into $name.
   $name = $obj['name'];
	
   // same with $email.
   $email = $obj['email'];
	
   // same with $password.
   $password = $obj['password'];
   
   if($obj['email']!="")
   {
   
   $result= $mysqli->query("SELECT * FROM employee_table where `userName`='".$name."'");
   
   
	   if($result->num_rows>0){
		   echo json_encode('username already exist');  // alert msg in react native		 		
	   }
	   else
	   {
		
		  $add = $mysqli->query("INSERT INTO `employee_table`(`userName`, `mail id`,`password`) VALUES ('".$name."','".$email."','".$password."')");
		   if($add){
			   echo  json_encode('User Registered Successfully');// alert msg in react native
		   }
		   else{
			  echo json_encode('Something Went Wrong In Executing Query'); // our query fail 		
		   }
			   
	   }
   }
   
   else{
	 echo json_encode('Please enter Mail Id');
   }

   
  }
  
  //catch exception
  catch(Exception $e) {
	echo json_encode('Message: ' .$e->getMessage());
  }


?>

