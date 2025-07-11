<?php
include("db.php");
try{
        

    $json = file_get_contents('php://input'); 
	// decoding the received JSON and store into $obj variable.
	$obj = json_decode($json,true);
    $ClientContact = $obj['JsonClientContact'];
     $CSE = $obj['JsonCSE'];
     $Source = $obj['JsonSource'];
     $clientName = $obj['JsonClientName'];
 //  $ClientContact = '7092211201';
   //$CSE = 'Siva';
   //$Source = 'Own';
date_default_timezone_set("Asia/Calcutta");    
     
 $add = $mysqli->query("INSERT into enquiry_table (EntryDateTime, EntryUser, ClientContact, CSE, Attended, Validity, Source, ClientName) VALUES (Now(),'leenah','".$ClientContact."','".$CSE."','0','1','".$Source."','".$clientName."')");

     if($add){
            echo json_encode('Inserted');
    }
    else{
            echo json_encode('Unable to save');

    }      
//echo json_encode($ClientContact);
 }
catch(Exception $E)
{
	echo json_encode('Message: ' .$E->getMessage());
}
?>