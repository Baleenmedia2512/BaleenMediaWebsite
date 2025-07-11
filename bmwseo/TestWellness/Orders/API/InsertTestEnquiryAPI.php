<?php
include("db.php");
try{
    header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");     

    $json = file_get_contents('php://input'); 
	// decoding the received JSON and store into $obj variable.
	$obj = json_decode($json,true);
    $ClientContact = $obj['JsonClientContact'];
    $UserName = $obj['JsonUserName'];
     $CSE = $obj['JsonCSE'];
     $Source = $obj['JsonSource']; 
     $clientName = $obj['JsonClientName'];
     $clientEmail = $obj['JsonClientEmail'];
 //  $ClientContact = '7092211201';
   //$CSE = 'Siva';
   //$Source = 'Own';
date_default_timezone_set("Asia/Calcutta");    
     if(trim($obj['JsonClientContact']) !== '' && trim($obj['JsonCSE']) && trim($obj['JsonClientName'])){
 $add = $mysqli->query("INSERT into enquiry_table (EntryDateTime, EntryUser, ClientContact, CSE, Attended, Validity, Source, ClientName, ClientEmail) VALUES (Now(),'".$UserName."','".$ClientContact."','".$CSE."','0','1','".$Source."','".$clientName."','".$clientEmail."')");

     if($add){
            echo json_encode('Inserted');
    }
    else{
            echo json_encode('Unable to save');

    }      
//echo json_encode($ClientContact);
 }
}
catch(Exception $E)
{
	echo json_encode('Message: ' .$E->getMessage());
}
?>