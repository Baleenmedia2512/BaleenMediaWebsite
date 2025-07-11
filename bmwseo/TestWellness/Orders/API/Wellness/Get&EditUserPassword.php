<?php
include('db_pdo.php');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
try {
    $UserName = $_GET['JsonUserName'];
    $newPassword = isset($_GET['JsonNewPassword']) ? $_GET['JsonNewPassword'] : '';
    $pdo = establishConnection($UserName);
    if($newPassword != ''){
        $stmt = $pdo->prepare("UPDATE `team_table` SET `Password` = :newPasswordPDO WHERE `UserName` = :username");
        $stmt->bindParam(":newPasswordPDO", $newPassword);
        $stmt->bindParam(':username', $UserName);
        $stmt -> execute();
        echo json_encode("Updated Successfully!");
    }
    else{
        $stmt = $pdo->prepare("SELECT `Password` FROM team_table WHERE `UserName` = :username");
        $stmt->bindParam(':username', $UserName);
        $stmt->execute();
        $result = $stmt->fetch();
        echo json_encode($result['Password']);
    }
} catch(Exception $e){
    echo json_encode('Error');
}