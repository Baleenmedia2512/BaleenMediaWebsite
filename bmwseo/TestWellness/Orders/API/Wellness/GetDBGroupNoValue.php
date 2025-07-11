<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
    // Establish connection to the database
    $host = 'localhost';
    $port = '3306';
    $dbname = 'baleeed5_wellness';
    $pwd = 'Wellness@123#';
    $users = 'baleeed5_wellness';
    $user = $_GET['JsonUserName'];
    $pdo = null; // Declare $pdo variable
    $user = "%" . $user. "%";
    $stand_pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $users, $pwd);
    $stand_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    // Getting UserID
    $stmt = $stand_pdo->prepare("SELECT UserID FROM team_table WHERE UserName LIKE :userPDO");
    $stmt->bindParam(':userPDO', $user);
    $stmt->execute();
    $userid = $stmt->fetchColumn();
    $useridLastDig = substr($userid, -1);
    echo json_encode($useridLastDig);
?>
