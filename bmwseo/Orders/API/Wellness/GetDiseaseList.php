<?php 
include("db_pdo.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

try {
    $pdo = establishConnection($UserName);
    $stmt = $pdo->prepare("SELECT `DiseaseName` FROM `disease_table`");
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $DiseaseName = array();
    foreach ($results as $row) {
        array_push($DiseaseName, $row['DiseaseName']);
    }
    
    echo json_encode($DiseaseName);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}