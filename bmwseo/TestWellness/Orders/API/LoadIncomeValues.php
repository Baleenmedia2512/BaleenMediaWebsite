<?php
try{
	$json = file_get_contents('php://input'); 
	// decoding the received JSON and store into $obj variable.
	$obj = json_decode($json,true);	

$conn = new Mysqli("www.baleenmedia.com","baleeed5_web_adm","admin123$","baleeed5_kiruba_demo");



$sql = "SELECT Payable from order_table where OrderNumber = 9976";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
    echo json_encode($payable);
}
} else {
    echo json_encode("No Results");
}
$conn->close();	
    
 
}
catch(Exception $E)
{
	echo json_encode('Message: ' .$E->getMessage());
}
?>
