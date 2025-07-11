<?php 
include("db_pdo.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
header("Content-Type: application/json"); // Ensure content type is set to JSON

try {
    $CoachName = $_GET['JsonCoachName'];
    $page = isset($_GET['page']) ? (int)$_GET['page'] :0;
    $limit = isset($_GET['limit']) ? (int)$_GET['limit'] :10;
    //$offset = ($page - 1) * $limit;
    
    $pdo = establishConnection($CoachName);
    
    $stmt = $pdo->prepare
    (" SELECT `UserName` FROM `team_table` WHERE `Status`='Active' AND `UserName` <> :CoachName AND  (`CoachName` = :CoachName OR `CoCoachName` = :CoachName)
    GROUP BY `UserName` 
    ORDER BY `UserName` 
    LIMIT :end OFFSET :start
        ");
    // $stmt->bindParam(':status', $status, PDO::PARAM_STR);
    $stmt->bindParam(':CoachName', $CoachName, PDO::PARAM_STR);
    $stmt->bindParam(':start', $page, PDO::PARAM_INT);
    $stmt->bindParam(':end', $limit, PDO::PARAM_INT);
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_COLUMN, 0); // Fetch directly as column
    
    echo json_encode($results);
} catch (PDOException $e) {
    echo json_encode(["error" => "Error: " . $e->getMessage()]);
}