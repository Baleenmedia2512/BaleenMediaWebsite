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
$username = "baleeed5_web_adm";
$password = "Baleen@789#";
$dbname = "baleeed5_live";
$QuoteID = $_GET['QuoteID'];
//$Status = $_GET['Status'];
$EntryUser = $_GET['CSEname'];
$ClientName = $_GET['ClientName'];
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE quote_cart_mapping_table SET Status = 'Followup' WHERE QuoteID =".$QuoteID." AND Status = 'AwaitingInternalApproval'";

  // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  $updatedRecords = $stmt->rowCount();

  if ($updatedRecords > 0) {
    echo "Quote#".$QuoteID." approved Successfully!";

    $to = $EntryUser."@baleenmedia.com,Kiruba@baleenmedia.com";
    $subject = "Quote".$QuoteID ." - Approved";    
    $headers = "From: leenah.grace@baleenmedia.com";
    $message = "Hi ".$EntryUser.", QOBM".$QuoteID." Your  (Client:".$ClientName.") is approved by Leenah now. Please proceed to release the Ad.";
    mail($to,$subject,$message.chr(10).Chr(10)."by".Chr(10)."App Support",$headers);


  } else {
    echo "It looks like either it is approved or dropped";
  }

} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage()."<br> Unable to approve!! Please Contact IT Team with this Screenshot";
}

$conn = null;

?>