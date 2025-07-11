<?php
function establishConnection($user) {
    // Establish connection to the database
    $host = 'localhost';
    $port = '3306';
    $dbname = 'baleeed5_wellness';
    $pwd = 'Wellness@123#';
    $dbUserName = 'baleeed5_wellness';
    $pdo = null; // Declare $pdo variable
    if ($user != null) {
        $stand_pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $dbUserName, $pwd);
        $stand_pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // Getting UserID
        $stmt = $stand_pdo->prepare("SELECT UserID FROM team_table WHERE UserName LIKE :userPDO");
        $stmt->bindParam(':userPDO', $user);
        $stmt->execute();
        $userid = $stmt->fetchColumn();
        if ($userid === false || $userid === null){
            $dbUserName = "baleeed5_wellness";
        } else{
            $useridLastDig = substr($userid, -1);
            $dbUserName = "baleeed5_user$useridLastDig";
        }
    }
    
    $num = 0;

    try {
        $pdo = new PDO("mysql:host=$host;port=$port;dbname=$dbname", $dbUserName, $pwd);
        // set the PDO error mode to exception
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        // echo "Connected successfully";
    } catch(PDOException $e) {
        echo "Connection failed: " . $e->getMessage();
    }
    
    return $pdo; // Return the $pdo variable
}
?>
