<?php
include('db_pdo.php');

// Allow requests from any origin
header('Access-Control-Allow-Origin: *');

// Allow the content-type header
header('Access-Control-Allow-Headers: *');

try {
    $userName = $_GET['JsonUserName'];
    $pdo = establishConnection($userName);

$stmt = $pdo->prepare(" SELECT COUNT(UserName) AS TeamMembersCount FROM `team_table` WHERE `Status` = 'Active' AND `UserName` <> :PDOUserName AND (`CoachName` = :PDOUserName OR `CoCoachName` = :PDOUserName)");

    $stmt->bindParam(':PDOUserName', $userName);
    $stmt->execute();
    $result = $stmt->fetch();
    echo json_encode($result["TeamMembersCount"]);
    // // Merge $result with mergedData
    // $finalResult = array_merge($Coach1Data, $result);

    // if ($finalResult) {
    //     // Send the data as JSON
    //     header('Content-Type: application/json');
    //     echo json_encode($finalResult);
    // } else {
    //     // No results
    //     echo json_encode(null);
    // }
} catch (Exception $e) {
    echo json_encode('Error' . $e->getMessage());
} finally {
    $pdo = null;
}
?>