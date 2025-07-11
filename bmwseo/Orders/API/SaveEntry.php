<?php
include("db_test.php");
try{
        

    $json = file_get_contents('php://input'); 
	// decoding the received JSON and store into $obj variable.
	$obj = json_decode($json,true);
    $orderNumber = $obj['JsonorderNumber'];
    $Amount = $obj['JsonAmount'];
    $Remarks = $obj['JsonRemarks'];
    $TransactionType = $obj['JsonTransactionType'];
    $TransactionMode = $obj['JsonTransactionMode'];
    $TransactionDate = $obj['JsonTransactionDate'];     
     
// echo json_encode($JsonTransactionType);
//   $conn = new mysqli("www.baleenmedia.com","baleeed5_web_adm","admin123$","baleeed5_kiruba_demo","3306");
 $add = $mysqli->query("INSERT into financial_transaction_table (EntryDate,OrderNumber,Amount,Remarks,TransactionType,PaymentMode, ValidStatus,TransactionDate) VALUES (NOW(),'".$orderNumber."','".$Amount."','".$Remarks."','".$TransactionType."','".$TransactionMode."', 'Valid','".$TransactionDate."')");

     if($add){
            echo json_encode('Inserted');
    }
    else{
            echo json_encode('Unable to save');

    }        
}
catch(Exception $E)
{
	echo json_encode('Message: ' .$E->getMessage());
}
?>