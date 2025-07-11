<?php 
include("db_pdo.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

try {
    $CoachName = $_GET['JsonCoachName'];
    $pdo = establishConnection($CoachName);
    $stmt = $pdo->prepare("SELECT `CoCoachName` FROM `team_table` WHERE (`CoachName` = :coachname) AND `Status` = 'Active' GROUP BY `CoCoachName` ORDER BY `CoCoachName`");
    $stmt->bindParam(':coachname', $CoachName, PDO::PARAM_STR);
    $stmt->execute();
    $result = $stmt->fetch();
    if (is_array($result) && isset($result['CoCoachName'])) {
        echo json_encode($result['CoCoachName']);
    } else {
        echo json_encode(null);
    }
} catch(Exception $e){
    echo json_encode('Error');
}