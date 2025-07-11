<?php
include("db_pdo.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

// Check if the required parameters are set
if (isset($_GET['JsonEntryUser'], $_GET['JsonActivityName'], $_GET['JsonEndDate'])) {
    try {
        // Get the specific EntryUser and other parameters from the GET request
        $EntryUser = $_GET['JsonEntryUser'];
        $ActivityName = $_GET['JsonActivityName'];
        $EndTimes = $_GET['JsonEndDate']; // Expecting an array of dates

        // Convert EndTimes to an array if it's a single string
        if (!is_array($EndTimes)) {
            $EndTimes = [$EndTimes];
        }

        $pdo = establishConnection($EntryUser);
        $results = [];

        // Prepare and execute the query for each date in the array
        foreach ($EndTimes as $EndTime) {
            if ($ActivityName === 'Weight' || $ActivityName === 'Workout') {
                $qry = $pdo->prepare("SELECT :enddate as EntryDate, COALESCE(Measurement, 0) as Measurement FROM data_table WHERE EntryUser = :entryuser AND ActivityName = :activityname AND EntryDate = :enddate");
            } else {
               $qry = $pdo->prepare("SELECT COALESCE(DATE_FORMAT(PostedDateTime, '%H:%i:%s'), '00:00:00') as Measurement FROM activity_table WHERE EntryUser = :entryuser AND ActivityName = :activityname AND EntryDate = :enddate");
            }
            
            $qry->bindParam(':entryuser', $EntryUser, PDO::PARAM_STR);
            $qry->bindParam(':activityname', $ActivityName, PDO::PARAM_STR);
            $qry->bindParam(':enddate', $EndTime);
            $qry->execute();
            $result = $qry->fetchAll(PDO::FETCH_ASSOC);

            // If no result, add a default entry with Measurement 0
            if (empty($result)) {
                $result = [['EntryDate' => $EndTime, 'Measurement' => 0]];
            }

            // Combine results for each date into the main results array
            $results = array_merge($results, $result);
        }

        echo json_encode($results);
    } catch (Exception $e) {
        echo json_encode(['status' => false, 'message' => 'Message: ' . $e->getMessage()]);
    }
} else {
    // Parameters not set, return error message
    echo json_encode(['status' => false, 'message' => 'Required parameters are missing']);
}
?>
