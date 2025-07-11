<html>
    <head>
          <style>
    body {
  zoom: 300%;
}
    </style>
        </head>
        
        <body>
       </body>
    </html>
<?php

$servername = "www.baleenmedia.com";
$username = "baleeed5_dev1";
$password = "Baleen@789#";
$dbname = "baleeed5_kiruba_demo";
$OrderNumber = $_GET['Ordernumber'];
$CSENAME = $_GET['CSEname'];
$ClientName = $_GET['ClientName'];
//$ClientFlag = $_Get['ClientApprovalFlag'];
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE  order_table SET  WOApprovalFlag = 1 WHERE OrderNumber = ".$OrderNumber;
 
  // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  $updatedRecords = $stmt->rowCount();

  if ($updatedRecords > 0) {
    echo "BM".$OrderNumber." approved Successfully!";

    $to = $CSENAME."@baleenmedia.com,Kiruba@baleenmedia.com";
    $subject = "BM".$OrderNumber ." - Approved";    
    $headers = "From: Appsupport@baleenmedia.com";
    $message = "Hi ".$CSENAME.", BM".$OrderNumber." Your  (Client:".$ClientName.") is approved by Leenah now. Please proceed to release the Ad.";
    mail($to,$subject,$message.chr(10).Chr(10)."by".Chr(10)."App Support",$headers);
    

  } else {
    echo "it's looks like already approved";
  }
  $sqli = "SELECT ClientApprovalFlag FROM order_table WHERE OrderNumber = ".$OrderNumber;
  $result = $conn->query($sqli);
  if (mysqli_num_rows($result) > 0) {
  // output data of each row
  
        $sml = "UPDATE order_table SET CancelFlag = 0 WHERE OrderNumber = ".$OrderNumber;
        $smtt = $conn -> prepare($sml);
        $smtt -> execute();
    
  
} else {
  echo "0 results";
}

} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage()."<br> Unable to approve!! Please Contact IT Team with this Screenshot";
}

$conn = null;

?>
