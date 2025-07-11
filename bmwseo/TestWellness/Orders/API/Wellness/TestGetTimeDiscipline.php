<?php
include('db_pdo.php');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

try {
    $Days = $_GET['JsonDays'];
    $UserName = $_GET['JsonUserName'];
    $currentDate = $_GET['JsonNow'];
    $User = "%" . $UserName . "%";
    $pdo = establishConnection($UserName);
    if (trim($_GET['JsonDays']) != "") {
        if ($Days === '2023-02-25') {
            $stmt = $pdo->prepare("SELECT Min(EntryDate) AS MinDate FROM activity_table WHERE EntryUser LIKE :userPDO AND `Validity` = 1");
            $stmt->bindParam(':userPDO', $User);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $Days = $result['MinDate'];
        }
        
        $diffDate = date_diff(date_create($Days), date_create($currentDate));
        $ExpectedDisciplineDays = ($diffDate->days + 1) * 5;
        
        // Calculating Education
        $eduStmt = $pdo->prepare("SELECT COUNT(*) AS EntryCount FROM activity_table WHERE EntryDate >= :daysPDO AND EntryDate <= :currentDatePDO AND ActivityName = 'Education' AND Time(PostedDateTime) >= '07:30:00' AND Time(PostedDateTime) <= '08:45:00' AND Validity = 1 AND EntryUser LIKE :userPDO");
        $eduStmt->bindParam(':daysPDO', $Days);
        $eduStmt->bindParam(':userPDO', $User);
	    $eduStmt->bindParam(':currentDatePDO', $currentDate);
        $eduStmt->execute();
        $EducatedCount = $eduStmt->fetchColumn();
        
        // Calculating Breakfast
        $brfStmt = $pdo->prepare("SELECT COUNT(*) AS EntryCount FROM activity_table WHERE EntryDate >= :daysPDO AND EntryDate <= :currentDatePDO AND ActivityName = 'Breakfast' AND Time(PostedDateTime) >= '05:00:00' AND Time(PostedDateTime) <= '08:30:00' AND Validity = 1 AND EntryUser LIKE :userPDO");
        $brfStmt->bindParam(':daysPDO', $Days);
        $brfStmt->bindParam(':userPDO', $User);
	    $brfStmt->bindParam(':currentDatePDO', $currentDate);
        $brfStmt->execute();
        $BreakfastedCount = $brfStmt->fetchColumn();
        
        // Calculating Lunch
        $lunStmt = $pdo->prepare("SELECT COUNT(*) AS EntryCount FROM activity_table WHERE EntryDate >= :daysPDO AND EntryDate <= :currentDatePDO AND ActivityName = 'Lunch' AND Time(PostedDateTime) >= '12:00:00' AND Time(PostedDateTime) <= '14:00:00' AND Validity = 1 AND EntryUser LIKE :userPDO");
        $lunStmt->bindParam(':daysPDO', $Days);
        $lunStmt->bindParam(':userPDO', $User);
	    $lunStmt->bindParam(':currentDatePDO', $currentDate);
        $lunStmt->execute();
        $LunchedCount = $lunStmt->fetchColumn();
        
        // Calculating Dinner
        $dinStmt = $pdo->prepare("SELECT COUNT(*) AS EntryCount FROM activity_table WHERE EntryDate >= :daysPDO AND EntryDate <= :currentDatePDO AND ActivityName = 'Dinner' AND Time(PostedDateTime) >= '18:30:00' AND Time(PostedDateTime) <= '20:30:00' AND Validity = 1 AND EntryUser LIKE :userPDO");
        $dinStmt->bindParam(':daysPDO', $Days);
        $dinStmt->bindParam(':userPDO', $User);
	    $dinStmt->bindParam(':currentDatePDO', $currentDate);
        $dinStmt->execute();
        $DinnedCount = $dinStmt->fetchColumn();
        
        // Calculating Weight
        $witStmt = $pdo->prepare("SELECT COUNT(*) AS EntryCount FROM data_table WHERE EntryDate >= :daysPDO AND EntryDate <= :currentDatePDO AND ActivityName = 'Weight' AND Time(PostedDateTime) >= '03:00:00' AND Time(PostedDateTime) <= '06:00:00' AND Validity = 1 AND EntryUser LIKE :userPDO");
        $witStmt->bindParam(':daysPDO', $Days);
        $witStmt->bindParam(':userPDO', $User);
	    $witStmt->bindParam(':currentDatePDO', $currentDate);
        $witStmt->execute();
        $WeightedCount = $witStmt->fetchColumn();

        $activity_discipline_percentage = 0;
        if ($ExpectedDisciplineDays !== 0) {
            $activity_discipline_percentage = (($EducatedCount + $BreakfastedCount + $LunchedCount + $DinnedCount + $WeightedCount) / $ExpectedDisciplineDays) * 100;
        } else {
            $activity_discipline_percentage = (($EducatedCount + $BreakfastedCount + $LunchedCount + $DinnedCount + $WeightedCount) / 5) * 100;
        }
        
        echo json_encode(round($activity_discipline_percentage, 2) . "%");
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}finally {
    $pdo = null; // Close the PDO connection
}
?>