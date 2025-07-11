<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("db_pdo.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header('Content-type: application/json'); // Set content type here

$userName = $_POST['JsonUserName']; // Correct the variable name
$pdo = establishConnection($userName);
$imageData = file_get_contents($_FILES['image']['tmp_name']);
$stmt = $pdo->prepare("UPDATE enquiry_table SET EnquirerImage = :imageData WHERE EnquirerName = :userNamePDO");
$stmt->bindParam(":userNamePDO", $userName);
$stmt->bindParam(":imageData", $imageData, PDO::PARAM_LOB); // Bind the image data
$stmt->execute();

// Check for SQL errors
$errorInfo = $stmt->errorInfo();
if ($errorInfo[0] !== '00000') {
    $response = array(
        "success" => false,
        "message" => "SQL Error: " . $errorInfo[2]
    );
    echo json_encode($response);
} else {
    $response = array(
        "success" => true,
        "message" => "Enquiry Updated Successfully."
    );
    echo json_encode($response);
}
?>