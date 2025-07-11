<?php
include('db_pdo.php');

function getCoachNCoCoachWeightData($coachName){
$data = null;
try {
    $pdo = establishConnection($coachName);
    
    $stmt = $pdo->prepare("SELECT
    dt.`EntryUser`,
     et.`InitialWeight` AS `InitialWeight`,
    (
        SELECT dt1.Measurement
        FROM data_table dt1
        WHERE dt1.`EntryDate` = (
            SELECT MAX(dt2.`EntryDate`)
            FROM data_table dt2
            WHERE dt2.`EntryUser` = et.`EntryUser`
              AND dt2.`ActivityName` = 'Weight'
        )
        AND dt1.`ActivityName` = 'Weight'
        AND dt1.`EntryUser` = et.`EntryUser`
        LIMIT 1
    ) AS `lastAvailableWeight`,
    (
        SELECT dt1.Measurement
        FROM data_table dt1
        WHERE dt1.`EntryDate` = CURDATE()
          AND dt1.`ActivityName` = 'Weight'
          AND dt1.`EntryUser` = et.`EntryUser`
        LIMIT 1
    ) AS `TodayWeight`, 
    et.`TargetWeight`,
    (
        SELECT dt1.Measurement
        FROM data_table dt1
        WHERE dt1.`EntryDate` = (
            SELECT MAX(dt2.`EntryDate`)
            FROM data_table dt2
            WHERE dt2.`EntryUser` = et.`EntryUser` 
              AND dt2.`ActivityName` = 'Weight'
        )
        AND dt1.`EntryUser` = et.`EntryUser` AND dt1.`ActivityName` = 'Weight' LIMIT 1
    ) - et.`TargetWeight` AS `Need to Achieve`, 
    (et.`InitialWeight`- 
    (
        SELECT dt1.Measurement
        FROM data_table dt1
        WHERE dt1.`EntryDate` = (
            SELECT MAX(dt2.`EntryDate`)
            FROM data_table dt2
            WHERE dt2.`EntryUser` = et.`EntryUser`
              AND dt2.`ActivityName` = 'Weight'
        )
        AND dt1.`EntryUser` = et.`EntryUser` AND dt1.`ActivityName` = 'Weight' LIMIT 1
    )) AS `weightReduced`, et.InitialHeight as InitialHeight, tt.CoachName as CoachName   
FROM
    data_table dt
    INNER JOIN `enquiry_table` et ON dt.EntryUser = et.EnquirerName
    INNER JOIN `team_table` tt ON dt.EntryUser = tt.UserName
WHERE
    dt.ActivityName = 'Weight'
    AND dt.EntryUser = :PDOUserName
    AND tt.Status = 'Active' 
GROUP BY dt.EntryUser 
ORDER BY dt.EntryUser;
    ");

    $stmt->bindParam(':PDOUserName', $coachName);
    $stmt->execute();
    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);

    if ($result) {
        // Send the data as JSON
        header('Content-Type: application/json');
        $data = $result;
    } else {
        // No results
        $data = null;
    }
} catch (Exception $e) {
    echo json_encode('Error' . $e->getMessage());
} finally {
    $pdo = null;
}

return $data;
}
?>