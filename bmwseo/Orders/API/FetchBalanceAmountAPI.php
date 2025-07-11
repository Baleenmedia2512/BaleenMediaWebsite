<?php
try{
    
    $json = file_get_contents('php://input'); 
	// decoding the received JSON and store into $obj variable.
	$obj = json_decode($json,true);
    $orderNumber = $obj['JsonOrderNumber'];

  $conn = new mysqli("www.baleenmedia.com","baleeed5_web_adm","admin123$","baleeed5_live","3306");
  //showing error when there is error in contacting database
  if ($conn ->connect_error){
      echo json_encode("Problem in Connection");       
  }
  else{
    //query to fetch Balance amount from database
    // $sql = "SELECT (order_table.Receivable - COALESCE(sum(financial_transaction_table.Amount))) as 'TotalAmount', order from order_table,financial_transaction_table where order_table.OrderNumber = 1009863 and financial_transaction_table.OrderNumber = 1009863 and financial_transaction_table.`ValidStatus` = 'Valid' and financial_transaction_table.`TransactionType` = 'Income'";
    $sql = "SELECT (Receivable - (SELECT COALESCE(sum(financial_transaction_table.Amount),0) from financial_transaction_table where OrderNumber = ".$orderNumber." and ValidStatus = 'Valid'  and TransactionType = 'Income' )) as 'TotalAmount',ClientName from order_table where  OrderNumber = ".$orderNumber." and CancelFlag = 0";
    $result = $conn->query($sql);
  
    if ($result->num_rows > 0) {
      // output data of each row
      $row = $result->fetch_assoc();
      $Amount = $row["TotalAmount"];
      $Remarks = "Received from ".$row["ClientName"];
      
    }
  }

  $age = array("Amount"=> $Amount, "Remarks"=>$Remarks);

   echo json_encode($age);
}
catch(Exception $E)
{
    echo json_encode($E);
}
?>