<?php
include("db_pdo.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

try {
    $Activity = $_GET['JsonActivity'];
    $UserName = $_GET['JsonUserName'];
    $CurrentTime = $_GET['JsonNow'];
    $CurrentDate = substr($CurrentTime, 0, 10);
    $pdo = establishConnection($UserName);
    if (trim($_GET['JsonActivity']) != "" && trim($_GET['JsonUserName']) != "") {
        if(trim($_GET['JsonActivity']) === 'Education'){
            $pdo->beginTransaction();
    
            // Lock the activity_table to prevent concurrent writes
            $pdo->exec('LOCK TABLES `activity_table` WRITE');
            
            $checkActivity = $pdo->prepare("SELECT * FROM `activity_table` WHERE `EntryUser` = :usernamePDO AND `ActivityName` = :activityPDO AND `EntryDate` = CURRENT_DATE");
            $checkActivity->bindParam(':usernamePDO', $UserName);
            $checkActivity->bindParam(':activityPDO', $Activity);
            $checkActivity->execute();
            $rowCount = $checkActivity->rowCount();
    
            if($rowCount == 0){
              $stmt = $pdo->prepare("INSERT INTO activity_table (`EntryDate`, `EntryUser`, `ActivityName`, `PostedDateTime`, `Validity`) VALUES (CURRENT_DATE, :usernamePDO, :activityPDO, CURRENT_TIMESTAMP, 1)");
              $stmt->bindParam(':usernamePDO', $UserName);
              $stmt->bindParam(':activityPDO', $Activity);
              $stmt->execute();
            } else {
              $stmt = $pdo->prepare("UPDATE activity_table SET `PostedDateTime`= CURRENT_TIMESTAMP, `Validity` = 1 WHERE EntryUser = :usernamePDO AND EntryDate = CURRENT_DATE AND Validity = 0 AND ActivityName = :activityPDO");
              $stmt->bindParam(':usernamePDO', $UserName);
              $stmt->bindParam(':activityPDO', $Activity);
              $stmt->execute();
            }
    
            $pdo->commit();
    
            // Unlock the activity_table
            $pdo->exec('UNLOCK TABLES');
        }else{
            $pdo->beginTransaction();

            // Lock the activity_table to prevent concurrent writes
            $pdo->exec('LOCK TABLES `activity_table` WRITE');
            
            $checkActivity = $pdo->prepare("SELECT * FROM `activity_table` WHERE `EntryUser` = :usernamePDO AND `ActivityName` = :activityPDO AND `EntryDate` = :currentDatePDO");
            $checkActivity->bindParam(':usernamePDO', $UserName);
            $checkActivity->bindParam(':activityPDO', $Activity);
            $checkActivity->bindParam(':currentDatePDO', $CurrentDate);
            $checkActivity->execute();
            $rowCount = $checkActivity->rowCount();
    
            if($rowCount == 0){
              $stmt = $pdo->prepare("INSERT INTO activity_table (`EntryDate`, `EntryUser`, `ActivityName`, `PostedDateTime`, `Validity`) VALUES (:currentDatePDO, :usernamePDO, :activityPDO, :currentTimePDO, 1)");
              $stmt->bindParam(':usernamePDO', $UserName);
              $stmt->bindParam(':activityPDO', $Activity);
              $stmt->bindParam(':currentTimePDO', $CurrentTime);
              $stmt->bindParam(':currentDatePDO', $CurrentDate);
              $stmt->execute();
            } else {
              $stmt = $pdo->prepare("UPDATE activity_table SET `PostedDateTime`= :currentTimePDO, `Validity` = 1 WHERE EntryUser = :usernamePDO AND EntryDate = :currentDatePDO AND Validity = 0 AND ActivityName = :activityPDO");
              $stmt->bindParam(':usernamePDO', $UserName);
              $stmt->bindParam(':activityPDO', $Activity);
              $stmt->bindParam(':currentTimePDO', $CurrentTime);
              $stmt->bindParam(':currentDatePDO', $CurrentDate);
              $stmt->execute();
            }
    
            $pdo->commit();
    
            // Unlock the activity_table
            $pdo->exec('UNLOCK TABLES');
        }
        echo "Activity Inserted Successfully.";
    }
} catch (Exception $e) {
    $pdo->rollBack();
    echo $e;
}
?>