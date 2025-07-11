<?php
// Establish connection to the database
$host = 'localhost';
$port = '3306';
$dbname = '';
$users = '';
$pwd = '';
$num = 0;

$DB = isset($_GET['dbname'])? $_GET['dbname'] : '';

if($DB == 'gracescans'){
    $dbname = 'baleeed5_gracescans';
    $users = 'baleeed5_gracescans';
    $pwd = 'Grace@123#';
}else{
    $dbname = 'baleeed5_live';
    $users = 'baleeed5_web_adm';
    $pwd = 'Baleen@789#';
}
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
try {
    $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $users, $pwd);
    // set the PDO error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
}

$client_name = $_GET['ClientName'];
$client_contact = $_GET['ClientContact'];
$client_name = "%".$client_name."%";

// Prepare the SQL statement to fetch the client details based on the selected client name
if($DB == 'gracescans'){
    $sql = "SELECT ClientEmail, Source, Age, DOB, Address, Title, ConsultantId FROM client_table WHERE ClientName like :client_name AND ClientContact = :clientContact ORDER BY ID DESC LIMIT 1";  
}else{
    $sql = "SELECT * FROM enquiry_table WHERE ClientName like :client_name AND ClientContact = :clientContact ORDER BY ID DESC LIMIT 1";
}
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':client_name', $client_name );
$stmt ->bindParam(':clientContact', $client_contact);
$stmt->execute();

// Fetch the selected client details and store them in an array
$clientdetails = $stmt->fetch(PDO::FETCH_ASSOC);

// Extract the client email and source from the array
$clientEmail = $clientdetails['ClientEmail'];
$clientSource = $clientdetails['Source'];
$clientAge = $clientdetails['ClientAge'];
$clientDOB = $clientdetails['ClientDOB'];
$clientAddress = $clientdetails['ClientAddress'];
$clientGender = $clientdetails['ClientTitle'];
$clientGST = $clientdetails['ClientGST'];
$clientPAN = $clientdetails['ClientPAN'];
$consultantId = 0;
$consultantName = $clientdetails['ConsultantName'];
$consultantNumber = $clientdetails['ConsultantNumber'];

if($DB=='gracescans'){
    $clientAge = $clientdetails['Age'];
    $clientDOB = $clientdetails['DOB'];
    $clientAddress = $clientdetails['Address'];
    $clientGender = $clientdetails['Title'];
    $consultantId = $clientdetails['ConsultantId'];
    $stmt = $pdo->prepare("SELECT ConsultantName, ConsultantNumber FROM consultant_table WHERE CId = :PDOCId");
    $stmt->bindParam(':PDOCId', $consultantId );
    $stmt->execute();
    $consultantDetails = $stmt->fetch(PDO::FETCH_ASSOC);
    $consultantName = $consultantDetails['ConsultantName'];
    $consultantNumber = $consultantDetails['ConsultantNumber'];
}

$response = null;
// Return the client email and source as JSON
if($DB=='gracescans'){
    $response = array('email' => $clientEmail, 'source' => $clientSource, 'Age' => $clientAge, 'DOB' => $clientDOB, 'address' => $clientAddress, 'gender' => $clientGender, 'consname' => $consultantName, 'consnumber' => $consultantNumber);
}else{
    $response = array('email' => $clientEmail, 'source' => $clientSource, 'Age' => $clientAge, 'DOB' => $clientDOB, 'address' => $clientAddress, 'gender' => $clientGender, 'consname' => $consultantName, 'consnumber' => $consultantNumber, 'GST' => $clientGST, 'PAN' => $clientPAN);
}


header('Content-Type: application/json');
echo json_encode([$response]);

// Close the database connection
$pdo = null;
?>
