<?php
include('db_pdo.php');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
try {
    $UserName = $_GET['JsonUserName'];
    $pdo = establishConnection($UserName);
        $stmt = $pdo->prepare("SELECT *, NULL AS EnquirerImage FROM `enquiry_table` WHERE `EnquirerName` = :userNamePDO");
        $stmt->bindParam(':userNamePDO', $UserName);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC); // Fetch as associative array
        if (!$result) {
            echo json_encode('No');
        } else {
            echo json_encode($result); // Return the associative array
        }
} catch (Exception $e) {
    echo json_encode($e);
}
?>