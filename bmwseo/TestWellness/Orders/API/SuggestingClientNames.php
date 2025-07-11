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

// Get the search term from the React app
$search_term = $_GET['suggestion'];

if(trim($_GET['suggestion']) !== ''){
// Prepare the SQL statement to fetch client names based on the search term
$sql = "SELECT DISTINCT ClientName, ClientContact FROM enquiry_table WHERE ClientName LIKE :suggestion LIMIT 5";
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':suggestion', '%' . $search_term . '%');
$stmt->execute();

// Fetch the client names and store them in an array
$clients = $stmt->fetchAll(PDO::FETCH_ASSOC);
$client_details = array();
// Output the client names and contacts
foreach ($clients as $client) {
    $clientdetails = $client['ClientName'] . '(' . $client['ClientContact'] . ')';
    array_push($client_details, $clientdetails);
}

echo json_encode($client_details);
}else{
    echo json_encode('');
}

// Close the database connection
$pdo = null;
?>
