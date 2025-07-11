<?php
include('db_pdo.php');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

try {
    $Days = $_GET['JsonDays'];
    $UserName = $_GET['JsonUserName'];
    $currentDate = $_GET['JsonNow'];
    $pdo = establishConnection($UserName);
    if (trim($_GET['JsonDays']) != "") {
        if ($Days === '2023-02-25') {
            $stmt = $pdo->prepare("SELECT Min(EntryDate) AS MinDate FROM activity_table WHERE EntryUser LIKE :userPDO AND `Validity` = 1");
            $stmt->bindParam(':userPDO', $UserName);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $Days = $result['MinDate'];
        }
        
        $diffDate = date_diff(date_create($Days), date_create($currentDate));
        $ExpectedDisciplineDays = ($diffDate->days + 1);
        
        // Calculating Education
        $eduStmt = $pdo->prepare("SELECT COUNT(*) AS EntryCount FROM activity_table AS a INNER JOIN discipline_table AS d ON a.EntryDate >= d.ValidityStartDate AND a.EntryDate <= d.ValidityEndDate AND     d.Activity = 'Education' WHERE a.EntryDate >= :daysPDO AND a.EntryDate <= :currentDatePDO AND a.ActivityName = 'Education' AND Time(a.PostedDateTime) >= d.ActivityStartTime AND Time(a.PostedDateTime) <= d.ActivityEndTime AND a.Validity = 1 AND a.EntryUser LIKE :userPDO");
        $eduStmt->bindParam(':daysPDO', $Days);
        $eduStmt->bindParam(':userPDO', $UserName);
	    $eduStmt->bindParam(':currentDatePDO', $currentDate);
        $eduStmt->execute();
        $EducatedCount = $eduStmt->fetchColumn();
        
        // Calculating Breakfast
        $brfStmt = $pdo->prepare("SELECT COUNT(*) AS EntryCount FROM activity_table WHERE EntryDate >= :daysPDO AND EntryDate <= :currentDatePDO AND ActivityName = 'Breakfast' AND Time(PostedDateTime) >= '05:00:00' AND Time(PostedDateTime) <= '08:30:59' AND Validity = 1 AND EntryUser LIKE :userPDO");
        $brfStmt->bindParam(':daysPDO', $Days);
        $brfStmt->bindParam(':userPDO', $UserName);
	    $brfStmt->bindParam(':currentDatePDO', $currentDate);
        $brfStmt->execute();
        $BreakfastedCount = $brfStmt->fetchColumn();
        
        // Calculating Lunch
        $lunStmt = $pdo->prepare("SELECT COUNT(*) AS EntryCount FROM activity_table WHERE EntryDate >= :daysPDO AND EntryDate <= :currentDatePDO AND ActivityName = 'Lunch' AND Time(PostedDateTime) >= '12:00:00' AND Time(PostedDateTime) <= '16:00:59' AND Validity = 1 AND EntryUser LIKE :userPDO");
        $lunStmt->bindParam(':daysPDO', $Days);
        $lunStmt->bindParam(':userPDO', $UserName);
	    $lunStmt->bindParam(':currentDatePDO', $currentDate);
        $lunStmt->execute();
        $LunchedCount = $lunStmt->fetchColumn();
        
        // Calculating Dinner
        $dinStmt = $pdo->prepare("SELECT COUNT(*) AS EntryCount FROM activity_table WHERE EntryDate >= :daysPDO AND EntryDate <= :currentDatePDO AND ActivityName = 'Dinner' AND Time(PostedDateTime) >= '17:30:00' AND Time(PostedDateTime) <= '20:30:59' AND Validity = 1 AND EntryUser LIKE :userPDO");
        $dinStmt->bindParam(':daysPDO', $Days);
        $dinStmt->bindParam(':userPDO', $UserName);
	    $dinStmt->bindParam(':currentDatePDO', $currentDate);
        $dinStmt->execute();
        $DinnedCount = $dinStmt->fetchColumn();
        
        // Calculating Weight
        $witStmt = $pdo->prepare("SELECT COUNT(*) AS EntryCount FROM data_table WHERE EntryDate >= :daysPDO AND EntryDate <= :currentDatePDO AND ActivityName = 'Weight' AND Time(PostedDateTime) >= '03:00:00' AND Time(PostedDateTime) <= '06:00:59' AND Validity = 1 AND EntryUser LIKE :userPDO");
        $witStmt->bindParam(':daysPDO', $Days);
        $witStmt->bindParam(':userPDO', $UserName);
	    $witStmt->bindParam(':currentDatePDO', $currentDate);
        $witStmt->execute();
        $WeightedCount = $witStmt->fetchColumn();

        $education_percentage = (($EducatedCount) / $ExpectedDisciplineDays) * 100;
	$breakfast_percentage = (($BreakfastedCount) / $ExpectedDisciplineDays) * 100;
	$lunch_percentage = (($LunchedCount) / $ExpectedDisciplineDays) * 100;
	$dinner_percentage = (($DinnedCount) / $ExpectedDisciplineDays) * 100;
	$weight_percentage = (($WeightedCount) / $ExpectedDisciplineDays) * 100;
        
	$all_items = array("Education" => round($education_percentage,2), "Breakfast" => round($breakfast_percentage,2), "Lunch" => round($lunch_percentage,2), "Dinner" => round($dinner_percentage,2), "Weight" => round($weight_percentage,2));
        echo json_encode($all_items);
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
}finally {
    $pdo = null; // Close the PDO connection
}
?>