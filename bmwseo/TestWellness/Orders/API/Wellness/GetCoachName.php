<?php
include("db_pdo.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

try {
    $CoCoachName = $_GET['JsonCoCoachName'];
    $pdo = establishConnection($CoCoachName);
    $stmt = $pdo->prepare("SELECT `CoachName` FROM `team_table` WHERE `CoCoachName` = :cocoachname AND `Status` = 'Active' GROUP BY `CoachName`");
    $stmt->bindParam(':cocoachname', $CoCoachName, PDO::PARAM_STR);
    $stmt->execute();

    // Fetch the result as an associative array
    $result = $stmt->fetch(PDO::FETCH_ASSOC);

    // Check if the result is not false before trying to access its elements
    if ($result !== false && isset($result['CoachName'])) {
        echo json_encode($result['CoachName']);
    } else {
        echo json_encode(null);
    }
} catch (Exception $e) {
    echo json_encode('Error');
}
?>
