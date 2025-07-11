<?php 
include("db_pdo.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

try {
    $pdo = establishConnection($UserName);
    $stmt = $pdo->prepare("SELECT `NutritionName` FROM `nutrition_table`");
    $stmt->execute();
    $results = $stmt->fetchAll(PDO::FETCH_ASSOC);

    $NutritionName = array();
    foreach ($results as $row) {
        array_push($NutritionName, $row['NutritionName']);
    }
    
    echo json_encode($NutritionName);
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}