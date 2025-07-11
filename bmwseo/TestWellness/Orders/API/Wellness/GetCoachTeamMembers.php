<?php 
include("db_pdo.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

try {
    $CoachName = $_GET['JsonCoachName'];
    $pdo = establishConnection($CoachName);
    
    if(!isset($_GET['JsonCountBoolean'])){
        $stmt = $pdo->prepare("SELECT `UserName` FROM `team_table` WHERE (`CoachName` = :coachname OR `CoCoachName` = :coachname) AND `Status` = 'Active' GROUP BY `UserName` ORDER BY `UserName`");
        $stmt->bindParam(':coachname', $CoachName, PDO::PARAM_STR);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        $TeamMembers = array();
        foreach ($results as $row) {
            array_push($TeamMembers, $row['UserName']);
        }
        
        echo json_encode($TeamMembers);
    } else {
        $stmt = $pdo->prepare("SELECT `UserName` FROM `team_table` WHERE (`CoachName` = :coachname OR `CoCoachName` = :coachname) GROUP BY `UserName` ORDER BY `UserName`");
        $stmt->bindParam(':coachname', $CoachName, PDO::PARAM_STR);
        $stmt->execute();
        $results = $stmt->fetchAll(PDO::FETCH_ASSOC);
    
        $TeamMembers = array();
        foreach ($results as $row) {
            array_push($TeamMembers, $row['UserName']);
        }
        
        echo json_encode($TeamMembers);
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}