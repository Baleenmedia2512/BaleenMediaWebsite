<?php
include("db_pdo.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
try{
    $UserName = $_GET['JsonUserName'];
    $pdo = establishConnection($UserName);
    $stmt = $pdo->prepare("SELECT `Status` FROM `team_table` WHERE `UserName` = :UserName");
    $stmt->bindParam(':UserName', $UserName);
    $stmt->execute();
    $results = $stmt->fetch();

    echo json_encode($results["Status"]);
    
  //catch exception
  }catch(Exception $e) {
    echo json_encode('Message: ' .$e->getMessage());
  }
?>