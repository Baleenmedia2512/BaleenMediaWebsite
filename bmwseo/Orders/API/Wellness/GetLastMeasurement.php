<?php
include('db_pdo.php');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
try {
    $UserName = $_GET['JsonUserName'];
    $Activity = $_GET['JsonActivity'];
    $pdo = establishConnection($UserName);
    $stmt = $pdo->prepare("SELECT SUM(`Measurement`) from `data_table` WHERE `EntryDate` = (SELECT MAX(`EntryDate`) FROM `data_table` WHERE `EntryUser` = :username AND `ActivityName` = :activity AND `Validity` = 1) AND `Validity` = 1 and `ActivityName` = :activity and `EntryUser` = :username");
    $stmt->bindParam(':username', $UserName);
    $stmt->bindParam(':activity', $Activity);
    $stmt->execute();
    $result = $stmt->fetch();
    echo json_encode($result['SUM(`Measurement`)']);
} catch(Exception $e){
    echo json_encode('Error');
}

