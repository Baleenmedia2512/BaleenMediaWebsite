<?php
include("db_pdo.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
try {
    $UserName = $_GET['JsonUserName'];
    $pdo = establishConnection($UserName);

    // Query to get the latest entry date from data_table
    $stmt_data = $pdo->prepare("SELECT MAX(EntryDate) AS latest_entry_date FROM data_table WHERE EntryUser = :UserName");
    $stmt_data->bindParam(':UserName', $UserName);
    $stmt_data->execute();
    $latest_entry_data = $stmt_data->fetch(PDO::FETCH_ASSOC);
    $latest_entry_date_data = $latest_entry_data['latest_entry_date'];

    // Query to get the latest entry date from activity_table
    $stmt_activity = $pdo->prepare("SELECT MAX(EntryDate) AS latest_entry_date FROM activity_table WHERE EntryUser = :UserName");
    $stmt_activity->bindParam(':UserName', $UserName);
    $stmt_activity->execute();
    $latest_entry_activity = $stmt_activity->fetch(PDO::FETCH_ASSOC);
    $latest_entry_date_activity = $latest_entry_activity['latest_entry_date'];

    // Compare the latest entry dates
    $latest_entry_date = max($latest_entry_date_data, $latest_entry_date_activity);
    $today = date("Y-m-d"); // Current date
    $diff = strtotime($today) - strtotime($latest_entry_date);
    $diff_days = floor($diff / (60 * 60 * 24));

    // Query to get the total count of entries from both tables
    $stmt_count = $pdo->prepare("SELECT 
        (SELECT COUNT(*) FROM activity_table WHERE EntryUser = :UserName) +
        (SELECT COUNT(*) FROM data_table WHERE EntryUser = :UserName) AS total_count");
    $stmt_count->bindParam(':UserName', $UserName);
    $stmt_count->execute();
    $total_count_result = $stmt_count->fetch(PDO::FETCH_ASSOC);
    $total_count = $total_count_result['total_count'];

    if ($total_count > 0 && $diff_days > 10) {
        // Update status to INACTIVE in team_table
        $stmt_update = $pdo->prepare("UPDATE team_table SET Status = 'Inactive' WHERE UserName = :UserName AND CoachApproved = 0");
        $stmt_update->bindParam(':UserName', $UserName);
        $stmt_update->execute();
        echo json_encode("Status updated to Inactive for user: $UserName");
    } else {
        echo json_encode("User $UserName is active.");
    }

} catch(Exception $e) {
    echo json_encode('Message: ' .$e->getMessage());
}
?>
