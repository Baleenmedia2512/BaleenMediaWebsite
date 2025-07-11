<?php
include("db_pdo.php");

// Set headers for CORS
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

// Retrieve data from request parameters
$entryUser = $_GET['enterUser'];
$username = $_GET['username'];
$password = $_GET['password'];
$targetWeight = $_GET['targetWeight'];
$coCoachName = $_GET['coCoach'];
$coachName = $_GET['coach'];

// Default values
$entryDateTime = date("Y-m-d H:i:s");
$status = "Active";
$coachApproved = 1;

try {
    // Establish database connection
    $pdo = establishConnection($entryUser);

    // Prepare SQL statement
    $stmt = $pdo->prepare("INSERT INTO `team_table`(`EntryDateTime`, `EntryUser`, `UserName`, `Password`, `TargetWeight(in_kg)`, `CoachName`, `CoCoachName`, `Status`, `CoachApproved`) VALUES (:entryDateTime, :entryUser, :username, :password, :targetWeight, :coachName, :coCoachName, :status, :coachApproved)");

    // Bind parameters
    $stmt->bindParam(':entryDateTime', $entryDateTime);
    $stmt->bindParam(':entryUser', $entryUser);
    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':targetWeight', $targetWeight);
    $stmt->bindParam(':coachName', $coachName);
    $stmt->bindParam(':coCoachName', $coCoachName);
    $stmt->bindParam(':status', $status);
    $stmt->bindParam(':coachApproved', $coachApproved);

    // Execute the statement
    $stmt->execute();

    // Send success response
    echo json_encode(array("message" => "User inserted successfully."));
} catch (PDOException $e) {
    // Send error response
    echo json_encode(array("message" => "Failed to insert user. Error: " . $e->getMessage()));
}

// Close connection
$pdo = null;
?>
