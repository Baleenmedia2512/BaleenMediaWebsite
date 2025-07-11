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
$dbname = "baleeed5_live";
$Source = $_GET['Source'];
$BusinessCategory = $_GET['BusinessCategory'];
$OrderNumber = $_GET['OrderNumber'];
$CSENAME = $_GET['CSEname'];
$ClientName = $_GET['ClientName'];
try {

  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE  order_table SET  Source = '".$Source."',ClientCategory = '".$BusinessCategory."',cancelflag = 0 WHERE  `OrderNumber` =".$OrderNumber;

  // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  $updatedRecords = $stmt->rowCount();

  if ($updatedRecords > 0) {

    echo "Successfully Saved";

    $to = $CSENAME."@baleenmedia.com";
    $subject = "BM".$OrderNumber ." - Approved";    
    $headers = "From: Appsupport@baleenmedia.com";
    $message = "Hi".$CSENAME.", BM".$OrderNumber." Your  (Client:".$ClientName.") is approved by Leenah now. Please proceed to release the Ad.";
    mail($to,$subject,$message.chr(10).Chr(10)."by".Chr(10)."App Support",$headers);


  } 
  elseif ($updatedRecords = 0){
    echo "You are trying to save a Record without changing any value. Please check.";
  }
  else {
    echo "Database error. Try again. if you see this error again, Please Contact IT Team with Screenshot.";
  }

  // echo a message to say the UPDATE succeeded
  //echo $stmt->rowCount() . " records UPDATED successfully";
} catch(PDOException $e) {

  echo $sql . "<br>" . $e->getMessage()."<br> Unable to Update !! Please Contact IT Team with Screenshot";
}


$conn = null;

?>
