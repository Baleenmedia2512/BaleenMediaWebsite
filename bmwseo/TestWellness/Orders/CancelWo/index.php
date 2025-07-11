<!DOCTYPE html>
<html>
<head>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>

$(document).ready(function(){      
  var ajaxurl = 'https://orders.baleenmedia.com/OTP/index.php';
 
  $.post(ajaxurl,function (response) {
         if (response == "Verified"){

           alert(response);
          }    
});
});
</script>
</head>

</html>

<?php

$servername = "www.baleenmedia.com";
$username = "baleeed5_dev1";
$password = "admin123$";
$dbname = "baleeed5_live";
$OrderNumber = $_GET['OrderNumber'];
try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);
  // set the PDO error mode to exception
  $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  $sql = "UPDATE  order_table SET  cancelflag = 1 WHERE OrderNumber =".$OrderNumber;

  // Prepare statement
  $stmt = $conn->prepare($sql);

  // execute the query
  $stmt->execute();

  $updatedRecords = $stmt->rowCount();

  if ($updatedRecords > 0) {
    echo "BM".$OrderNumber." Cancelled Successfully!";
  } else {
    echo "it's looks like already cancelled";
  }

  // echo a message to say the UPDATE succeeded
  // echo $stmt->rowCount() . " records UPDATED successfully";
} catch(PDOException $e) {
  echo $sql . "<br>" . $e->getMessage()."<br> Unable to Cancel!! Please Contact IT Team with this Screenshot";
}

$conn = null;

?>


