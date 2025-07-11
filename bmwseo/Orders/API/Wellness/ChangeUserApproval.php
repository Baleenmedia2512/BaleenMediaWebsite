<?php
include("db_pdo.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

try {
    $username = $_GET['JsonUserName']; 
    $pdo = establishConnection($username);

    if (trim($_GET['JsonUserName']) != "") {
        // Prepare the SQL statement
        $stmt = $pdo->prepare("UPDATE `team_table` SET `CoachApproved` = '0' WHERE `UserName` = :usernamePDO");

        // Bind the parameters
        $stmt->bindParam(':usernamePDO', $username);

        // Execute the statement
        $stmt->execute();

        echo json_encode("Team member approval status updated successfully.");
    } else {
        echo json_encode("Record not updated due to missing username.");
    }
} catch(Exception $e) {
    echo json_encode('Message: ' . $e->getMessage());
}
?>
