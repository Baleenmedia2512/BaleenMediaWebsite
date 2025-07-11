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

$servername = "localhost";
$username = "baleeed5_dev1";
$password = "Baleen@789#";
$dbname = "baleeed5_live";
$OrderNumber = $_GET['Ordernumber'];
$CSENAME = $_GET['CSEname'];
$ClientName = $_GET['ClientName'];
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE  order_table SET  cancelflag = 0 WHERE OrderNumber =".$OrderNumber;

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

} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage()."<br> Unable to approve!! Please Contact IT Team with this Screenshot";
}

$conn = null;

?>
