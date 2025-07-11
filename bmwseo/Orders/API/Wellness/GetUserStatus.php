<?php
include("db_pdo.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
try{
    $UserName = $_GET['JsonUserName'];
    $pdo = establishConnection($UserName);
    $stmt = $pdo->prepare("SELECT `Status`,`CoachApproved` FROM `team_table` WHERE `UserName` = :UserName");
    $stmt->bindParam(':UserName', $UserName);
    $stmt->execute();
    $results = $stmt->fetch();

    $response = array(
        "Status" => $results["Status"],
        "CoachApproved" => $results["CoachApproved"]
    );

    // Encode the array as JSON and echo it
    echo json_encode($response);
    
  //catch exception
  }catch(Exception $e) {
    echo json_encode('Message: ' .$e->getMessage());
  }
?>