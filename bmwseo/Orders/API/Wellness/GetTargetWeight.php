<?php
include('GetCoachWeightData.php');

// Allow requests from any origin
header('Access-Control-Allow-Origin: *');

// Allow the content-type header
header('Access-Control-Allow-Headers: Content-Type');

try {
    $userName = $_GET['JsonUserName'];
    $pdo = establishConnection($userName);

    $stmt = $pdo->prepare("SELECT
        `TargetWeight`
    FROM
        enquiry_table 
    WHERE
        EnquirerName = :PDOUserName
    ");

    $stmt->bindParam(':PDOUserName', $userName);
    $stmt->execute();
    $result = $stmt->fetch();

    // Merge $result with mergedData


    if ($result) {
        // Send the data as JSON
        header('Content-Type: application/json');
        echo json_encode($result[0]);
    } else {
        // No results
        echo json_encode(0);
    }
} catch (Exception $e) {
    echo json_encode('Error' . $e->getMessage());
} finally {
    $pdo = null;
}
?>