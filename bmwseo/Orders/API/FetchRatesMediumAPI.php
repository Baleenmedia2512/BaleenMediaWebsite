<?php
try{
    
    $json = file_get_contents('php://input'); 
	// decoding the received JSON and store into $obj variable.
	$obj = json_decode($json,true);
    //$orderNumber = $obj['JsonOrderNumber'];

  $conn = new mysqli("www.baleenmedia.com","baleeed5_web_adm","admin123$","baleeed5_kiruba_demo","3306");
  //showing error when there is error in contacting database
  if ($conn ->connect_error){
      echo json_encode("Problem in Connection");       
  }
  else{
    //query to fetch Balance amount from database
    // $sql = "SELECT (order_table.Receivable - COALESCE(sum(financial_transaction_table.Amount))) as 'TotalAmount', order from order_table,financial_transaction_table where order_table.OrderNumber = 1009863 and financial_transaction_table.OrderNumber = 1009863 and financial_transaction_table.`ValidStatus` = 'Valid' and financial_transaction_table.`TransactionType` = 'Income'";
    $sql = "SELECT * FROM rate_table WHERE ApprovedStatus = 'Approved'";
   // $TotRows = "SELECT COUNT(*) FROM rate_table WHERE ApprovedStatus = 'approved'";
    $result = $conn->query($sql);
   // $results= $conn->query($TotRows);
    if ($result->num_rows > 0) {
      // output data of each row
      while($row = $result->fetch_assoc())
        {
      $RateID = $row["RateID"];
      $AdMedium = $row["rateName"];
      $age = array( "AdMedium" => $AdMedium) ;
      echo json_encode($age);
     // }
    }
    }
    else
    {
      echo "0 results";
    }
  }
}
catch(Exception $E)
{
    echo json_encode($E);
}
?>