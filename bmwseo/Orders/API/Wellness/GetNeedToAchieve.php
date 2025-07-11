<?php
include('GetCoachWeightData.php');

// Allow requests from any origin
header('Access-Control-Allow-Origin: *');

// Allow the content-type header
header('Access-Control-Allow-Headers: Content-Type');

try {
    $userName = $_GET['JsonUserName'];
    $pdo = establishConnection($userName);

    $stmt = $pdo->prepare("
                    SELECT (SELECT dt1.Measurement
                    FROM data_table dt1
                    WHERE dt1.EntryDate = (
                        SELECT MAX(dt2.EntryDate)
                        FROM data_table dt2
                        WHERE dt2.EntryUser = :PDOUserName
                          AND dt2.ActivityName = 'Weight'
                    )
                    AND dt1.EntryUser = :PDOUserName 
                    AND dt1.ActivityName = 'Weight' 
                    LIMIT 1) 
                    - et.TargetWeight AS `NeedToAchieve` FROM enquiry_table et WHERE et.EntryUser = :PDOUserName
    ");
    $stmt->bindParam(':PDOUserName', $userName);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($result) {
        
        $NeedToAchieve = $result[0]['NeedToAchieve'];
        
        // Send the data as JSON
        //header('Content-Type: application/json');
        echo json_encode($NeedToAchieve);
    } else {
        // No results
        echo json_encode(0);
    }
} catch (Exception $e) {
    echo json_encode('Error: ' . $e->getMessage());
} finally {
    $pdo = null;
}
?>
