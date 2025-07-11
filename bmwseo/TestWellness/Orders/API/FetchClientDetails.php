<?php
// Establish connection to the database
$host = 'localhost';
$port = '3306';
$dbname = 'baleeed5_live';
$users = 'baleeed5_web_adm';
$pwd = 'Baleen@789#';
$num = 0;
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
$sql = "SELECT ClientEmail, Source FROM enquiry_table WHERE ClientName like :client_name AND ClientContact = :clientContact ORDER BY ID DESC LIMIT 1";
$stmt = $pdo->prepare($sql);
$stmt->bindParam(':client_name', $client_name );
$stmt ->bindParam(':clientContact', $client_contact);
$stmt->execute();

// Fetch the selected client details and store them in an array
$clientdetails = $stmt->fetch(PDO::FETCH_ASSOC);

// Extract the client email and source from the array
$clientEmail = $clientdetails['ClientEmail'];
$clientSource = $clientdetails['Source'];

// Return the client email and source as JSON
$response = array('email' => $clientEmail, 'source' => $clientSource);
header('Content-Type: application/json');
echo json_encode([$response]);

// Close the database connection
$pdo = null;
?>
