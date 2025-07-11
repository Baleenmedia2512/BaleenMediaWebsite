<?php
include('db_pdo.php');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

try {
    $userName = $_GET['JsonUserName'];
    $activity = $_GET['JsonActivity'];
    $currentDate = $_GET['JsonNow'];
    $physicalActivity = array('Weight', 'Walking', 'Workout');
    $time = null;
    $sweenahTimeZone = 'America/Chicago';
    $christyTimeZone = 'America/New_York';
    $pdo = establishConnection($userName);

    if (!in_array($activity, $physicalActivity)) {
        $stmt = $pdo->prepare("SELECT Time(PostedDateTime) AS PostedTime FROM activity_table WHERE EntryDate = :currentDatePDO AND EntryUser LIKE :userPDO AND Validity = 1 AND ActivityName = :activityPDO");
    } else {
        $stmt = $pdo->prepare("SELECT Time(PostedDateTime) AS PostedTime FROM data_table WHERE EntryDate = :currentDatePDO AND EntryUser LIKE :userPDO AND Validity = 1 AND ActivityName = :activityPDO");
    }

    $stmt->bindParam(':userPDO', $userName);
    $stmt->bindParam(':activityPDO', $activity);
    $stmt->bindParam(':currentDatePDO', $currentDate);
    $stmt->execute();

    // Check if the query was successful
    if ($stmt) {
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        // Check if $result is not false before accessing 'PostedTime'
        if ($result !== false && isset($result['PostedTime'])) {
            $time = $result['PostedTime'];
            $formattedTime = date("h:i A", strtotime($time));
            echo json_encode($formattedTime);
        } else {
            echo json_encode("12:00 AM");
        }
    } else {
        echo json_encode("Query execution failed");
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}
?>
