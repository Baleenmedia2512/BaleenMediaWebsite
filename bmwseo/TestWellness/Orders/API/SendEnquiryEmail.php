 <?php
include ('db.php');
try{

//fetching cse name from App
$json = file_get_contents('php://input');

// decoding the received JSON and store into $obj variable.
$obj = json_decode($json,true);
$cse = $obj['JsonCSE'];
$contact = $obj['JsonClientContact'];
$source = $obj['JsonSource'];
$clientName = $obj['JsonClientName'];

//Recipient
if($cse == 'Monisha'){
    $to = 'monisha@baleenmedia.com';
} elseif ($cse == 'Usha'){
    $to = 'baleenmedia@baleenmedia.com';
} elseif($cse == 'Susmitha'){
    $to = 'susmitha@baleenmedia.com';
} elseif($cse == 'Siva'){
    $to = 'siva@baleenmedia.com';
}
try {
$result = $mysqli->query("SELECT MAX(ID) FROM enquiry_table");
$row = $result->fetch_assoc();
$highest_id = $row["MAX(ID)"]; 
$enquiry_id = $highest_id+ 1;

} catch(Exception $e){
    echo 'Message: '.$e->getMessage();
}
//sender
$from = 'leenah.grace@baleenmedia.com';
$fromName = "Leenah Grace";

//Email Subject
$subject = 'Enquiry#'.$enquiry_id.' Received! <'.$contact.'>';

//Email body content
$headers = "From: $fromName"." <".$from.">"."\r\n"."CC: leenah.grace@baleenmedia.com";

//Multipart Boundary
$message = "You got an enquiry."."\n"."Details are below: "."\n"."Client Name: ".$clientName."\n"."Client Phone: ".$contact."\n"."Source: ".$source;
$returnpath = "-f" .$from;

//send email
$mail = @mail($to, $subject, $message, $headers, $returnpath);

//Email status
echo $mail?"<h1>Email sent successfully!</h1>":"<h1>Email sending failed.</h1>";
}

//catch exception
catch(Exception $e) {
echo 'Message: '.$e->getMessage();
}
?> 