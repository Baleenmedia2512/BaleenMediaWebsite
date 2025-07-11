<?php 
include 'db.php';
try {
	$json = file_get_contents('php://input'); 
	// decoding the received JSON and store into $obj variable.
	$obj = json_decode($json,true);
    $orderNumber = $obj['orderNumber'];
    $transportMode = $obj['transportMode'];
    $DistanceInKM = $obj['DistanceInKM'];
    $UserName = $obj['UserName'];
    $ConveyanceAmount = $obj['ConveyanceAmount'];
    $PetrolPrice = 96.94;

   
   if( $obj['orderNumber']!="" && $obj['transportMode']!="" && ($obj['DistanceInKM']!="" || $obj['ConveyanceAmount'] != "" ))
    {

      if (empty($ConveyanceAmount)){
        $ConveyanceAmount = ($DistanceInKM / 40) * $PetrolPrice;
        $ConveyanceAmount = round($ConveyanceAmount,2);
      }

   
      $add = $mysqli->query("INSERT INTO `conveyence_table`(`EntryUser`, `EntryDate`, `OrderNumber`, `TransportMode`,`ConveyenceAmount`,`DistanceInKM`) VALUES ('".$UserName."',now(),'".$orderNumber."','".$transportMode."','".$ConveyanceAmount."','".$DistanceInKM."')");
      if($add){
        $CurrentUserMailID = "";
        $OwnerMailID ="";
        $CSEMailID ="";


        $result = $mysqli->query("SELECT `mail id` FROM `employee_table` where `userName`= '".$UserName."'");
         if ($result->num_rows > 0) {
           // output data of each row
           while($row = $result->fetch_assoc()) {
             $CurrentUserMailID = $row["mail id"];
          }
        }
        $result2 = $mysqli->query("SELECT `Owner`,`CSE` FROM `order_table` where `Ordernumber`= '".$orderNumber."'");
          if ($result2->num_rows > 0) {
           // output data of each row
           while($row = $result2->fetch_assoc()) {
             $owner = $row["Owner"];
             $CSE = $row["CSE"];
          }
        }
        $result3 = $mysqli->query("SELECT `mail id` FROM `employee_table` where `userName`= '".$owner."'");
         if ($result3->num_rows > 0) {
           // output data of each row
           while($row = $result3->fetch_assoc()) {
             $OwnerMailID = $row["mail id"];
          }
        }
        $result4 = $mysqli->query("SELECT `mail id` FROM `employee_table` where `userName`= '".$CSE."'");
         if ($result4->num_rows > 0) {
           // output data of each row
           while($row = $result4->fetch_assoc()) {
             $CSEMailID = $row["mail id"];
          }
        }
        
        $to = "baleenmedia@baleenmedia.com";
        $subject = "Order#".$orderNumber." Conveyance Reimbursement Request";    
        $headers = "From: Appsupport@baleenmedia.com"."\r\n"."CC:".$CurrentUserMailID.",contact@baleenmedia.com,leenah.grace@baleenmedia.com".$OwnerMailID.",".$CSEMailID;
        if ($transportMode == "Company"){
          $txt = "Hi Usha,".chr(10)."Request you to reimburse the conveyance charge Rs. ".$ConveyanceAmount." (Petrol price taken @ Rs.".$PetrolPrice." per Ltr) to Balaji for  Order#".$orderNumber.".";
        }else{
          $txt = "Hi Usha,".chr(10)."Request you to reimburse the conveyance charge Rs. ".$ConveyanceAmount." (Petrol price taken @ Rs.".$PetrolPrice." per Ltr) to ".$UserName." for  Order#".$orderNumber.".";
        }
        mail($to,$subject,$txt.chr(10).Chr(10)."by".Chr(10)."App Support",$headers);
        echo  json_encode('Saved');// alert msg in react native


      }
      else{
       echo json_encode('Something Went Wrong!!!,Unable to save'); // our query fail 		
      }
    }
   
   else{
	    echo json_encode('All the fields Must Be Filled');
    }

   
    }
  
  //catch exception
  catch(Exception $e) {
	echo json_encode('Message: ' .$e->getMessage());
  }


?>

