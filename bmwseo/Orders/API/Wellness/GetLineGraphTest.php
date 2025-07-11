<?php
include("db_pdo.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

// Check if the required parameters are set
if (isset($_GET['JsonEntryUser'], $_GET['JsonActivityName'], $_GET['JsonStartDate'], $_GET['JsonEndDate'])) {
    try {
        // Get the specific EntryUser and other parameters from the GET request
        $EntryUser = $_GET['JsonEntryUser'];
        $ActivityName = $_GET['JsonActivityName'];
        $StartDate = $_GET['JsonStartDate'];
        $EndDate = $_GET['JsonEndDate'];

        // Establish database connection
        $pdo = establishConnection($EntryUser);

        // Prepare the query based on activity type
        if ($ActivityName === 'Weight' || $ActivityName === 'Workout') {
            $qry = $pdo->prepare("SELECT EntryDate, COALESCE(Measurement, 0) as Measurement FROM data_table WHERE EntryUser = :entryuser AND ActivityName = :activityname AND EntryDate BETWEEN :startdate AND :enddate AND Validity = 1");
        } else {
            $qry = $pdo->prepare("SELECT EntryDate, COALESCE(DATE_FORMAT(PostedDateTime, '%H:%i:%s'), '00:00:00') as Measurement FROM activity_table WHERE EntryUser = :entryuser AND ActivityName = :activityname AND EntryDate BETWEEN :startdate AND :enddate AND Validity = 1 ORDER BY `EntryDate`");
        }

        // Bind parameters
        $qry->bindParam(':entryuser', $EntryUser, PDO::PARAM_STR);
        $qry->bindParam(':activityname', $ActivityName, PDO::PARAM_STR);
        $qry->bindParam(':startdate', $StartDate);
        $qry->bindParam(':enddate', $EndDate);

        // Execute query
        $qry->execute();
        $results = $qry->fetchAll(PDO::FETCH_ASSOC);

        // Check if results are empty and return appropriate response
        if (empty($results)) {
            echo json_encode(['status' => false, 'message' => 'No data available for the specified date range']);
        } else {
            echo json_encode($results);
        }
    } catch (Exception $e) {
        echo json_encode(['status' => false, 'message' => 'Message: ' . $e->getMessage()]);
    }
} else {
    // Parameters not set, return error message
    echo json_encode(['status' => false, 'message' => 'Required parameters are missing']);
}
?>
