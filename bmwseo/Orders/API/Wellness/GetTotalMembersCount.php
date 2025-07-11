<?php 
include("db_pdo.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json"); // Ensure content type is set to JSON

try {
    $UserName = $_GET['JsonUserName'];
    //$offset = ($page - 1) * $limit;
    
    $pdo = establishConnection($UserName);
    
    $stmt = $pdo->prepare(" SELECT COUNT(`UserName`) FROM `team_table` WHERE `Status` = 'Active'");
    // $stmt->bindParam(':status', $status, PDO::PARAM_STR);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_COLUMN, 0); // Fetch directly as column
    
    echo json_encode($results);
} catch (PDOException $e) {
    echo json_encode(["error" => "Error: " . $e->getMessage()]);
}