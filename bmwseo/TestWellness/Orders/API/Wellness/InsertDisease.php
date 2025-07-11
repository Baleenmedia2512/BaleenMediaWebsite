<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("db_pdo.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

try {
    $Disease = $_GET['JsonDisease'];
    $UserName = $_GET['JsonUserName'];
    $pdo = establishConnection($UserName);
    $stmt = $pdo->prepare("INSERT INTO `disease_table` (`EntryUser`, `EntryDate`, `DiseaseName`) VALUES (:PDOUserName, CURRENT_DATE,:PDODiseaseName)");
    $stmt->bindParam(':PDOUserName', $UserName);
    $stmt->bindParam(':PDODiseaseName', $Disease);
    $stmt->execute();
    echo json_encode('Values Successfully Inserted');
} catch (Exception $e){
    $pdo->rollBack();
    echo json_encode($e);
}