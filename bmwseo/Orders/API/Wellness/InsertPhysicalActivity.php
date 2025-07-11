<?php
include("db_pdo.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
try{
    $PhysicalActivity = $_GET['JsonPhysicalActivity'];
    $UserName = $_GET['JsonUserName'];
    $Measurement = $_GET['JsonMeasurement'];
    $CurrentTime = $_GET['JsonNow'];
    $CurrentDate = substr($CurrentTime, 0, 10);
    $pdo = establishConnection($UserName);
    if( trim($_GET['JsonPhysicalActivity']) !="" && trim($_GET['JsonUserName']) != "" && trim($_GET['JsonMeasurement']) != "")
    {
        $pdo->beginTransaction();
        
        // Lock the activity_table to prevent concurrent writes
        $pdo->exec('LOCK TABLES `data_table` WRITE');
        
        $checkActivity = $pdo->prepare("SELECT * FROM `data_table` WHERE `EntryUser` = :usernamePDO AND `ActivityName` = :physicalactivityPDO AND `EntryDate` = :currentDatePDO");
        $checkActivity->bindParam(':usernamePDO', $UserName);
        $checkActivity->bindParam(':physicalactivityPDO', $PhysicalActivity);
        $checkActivity->bindParam(':currentDatePDO', $CurrentDate);
        $checkActivity->execute();
        $rowCount = $checkActivity->rowCount();
        if($PhysicalActivity === 'Weight'){
            if($rowCount == 0){
                $stmt = $pdo->prepare("INSERT INTO data_table (`EntryDate`, `EntryUser`, `ActivityName`, `PostedDateTime`, `Measurement`, `Validity`) VALUES (:currentDatePDO, :usernamePDO, :physicalactivityPDO, :currentTimePDO, :measurentPDO, 1)");
                
                // Bind the parameters
                $stmt->bindParam(':usernamePDO', $UserName);
                $stmt->bindParam(':physicalactivityPDO', $PhysicalActivity);
                $stmt->bindParam(':measurentPDO', $Measurement);
                $stmt->bindParam(':currentDatePDO', $CurrentDate);
                $stmt->bindParam(':currentTimePDO', $CurrentTime);
                for ($i = 0; $i < 1; $i++) {
                // Execute the statement
                $stmt->execute();
              }
              
                
              $pdo->commit();

             
            }else{
                $stmt = $pdo->prepare("UPDATE data_table SET `PostedDateTime` = :currentTimePDO, `Measurement` = :measurentPDO, `Validity`= 1 WHERE `EntryDate` = :currentDatePDO AND `EntryUser` = :usernamePDO AND  `ActivityName` = :physicalactivityPDO AND `Validity`= 0");
                
                // Bind the parameters
                $stmt->bindParam(':usernamePDO', $UserName);
                $stmt->bindParam(':physicalactivityPDO', $PhysicalActivity);
                $stmt->bindParam(':measurentPDO', $Measurement);
                $stmt->bindParam(':currentDatePDO', $CurrentDate);
                $stmt->bindParam(':currentTimePDO', $CurrentTime);
                for ($i = 0; $i < 1; $i++) {
                // Execute the statement
                $stmt->execute();
              }}
            }else{
                $stmt = $pdo->prepare("INSERT INTO data_table (`EntryDate`, `EntryUser`, `ActivityName`, `PostedDateTime`, `Measurement`, `Validity`) VALUES (:currentDatePDO, :usernamePDO, :physicalactivityPDO, :currentTimePDO, :measurentPDO, 1)");
                
                // Bind the parameters
                $stmt->bindParam(':usernamePDO', $UserName);
                $stmt->bindParam(':physicalactivityPDO', $PhysicalActivity);
                $stmt->bindParam(':measurentPDO', $Measurement);
                $stmt->bindParam(':currentDatePDO', $CurrentDate);
                $stmt->bindParam(':currentTimePDO', $CurrentTime);
                for ($i = 0; $i < 1; $i++) {
                // Execute the statement
                $stmt->execute();
            }
           
          $pdo->commit();
        // Unlock the activity_table
        $pdo->exec('UNLOCK TABLES');
            
        }
        echo json_encode("Inserted Successfully.");
    }
    else{
        echo json_encode("No inputs Available.");
    }
    }
catch(Exception $e){
    echo json_encode($e);
}
?>