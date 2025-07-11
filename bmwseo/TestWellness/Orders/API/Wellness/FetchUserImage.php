<?php
include("db_pdo.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$userName = $_GET['JsonUserName']; // You may retrieve this from the client

$pdo = establishConnection($userName);

// Query the database to get the image data for the user
$stmt = $pdo->prepare("SELECT EnquirerImage FROM enquiry_table WHERE EnquirerName = :userName");
$stmt->bindParam(':userName', $userName);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);

if ($result) {
    // Set appropriate headers for an image
    header('Content-Type: image/jpeg'); // Adjust content type based on your image type

    // Output the image data
    echo json_encode($result['EnquirerImage']);
} else {
    // Handle the case where the user or image is not found
    echo json_encode('Image not found');
}
?>
