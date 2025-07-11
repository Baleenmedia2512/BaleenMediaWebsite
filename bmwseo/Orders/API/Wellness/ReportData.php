<?php
include('db_pdo.php');
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

try {
    $Days = $_GET['JsonDays'];
    $UserName = $_GET['JsonUserName'];
    $currentDate = $_GET['JsonNow'];
    $activity = $_GET['Activity']; // Get the activity parameter
    $pdo = establishConnection($UserName);
    
    if (trim($_GET['JsonDays']) != "") {
        if ($Days === '2023-02-25') {
            $stmt = $pdo->prepare("SELECT Min(EntryDate) AS MinDate FROM activity_table WHERE EntryUser LIKE :userPDO AND `Validity` = 1");
            $stmt->bindParam(':userPDO', $UserName);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
            $Days = $result['MinDate'];
        }
        
         if ($Days !== null && $currentDate !== null) {
        $diffDate = date_diff(date_create($Days), date_create($currentDate));
        $ExpectedDisciplineDays = ($diffDate->days + 1);
        } else {
        $ExpectedDisciplineDays = 0; 
        }
        
        // Conditionally calculate discipline percentages based on the activity
        switch ($activity) {
            case 'Education':
                // Education query
                $stmt = $pdo->prepare("SELECT EntryUser,COUNT(*) AS EntryCount FROM activity_table AS a INNER JOIN discipline_table AS d ON a.EntryDate >= d.ValidityStartDate AND a.EntryDate <= d.ValidityEndDate AND     d.Activity = 'Education' WHERE a.EntryDate >= :daysPDO AND a.EntryDate <= :currentDatePDO AND a.ActivityName = 'Education' AND Time(a.PostedDateTime) >= d.ActivityStartTime AND Time(a.PostedDateTime) <= d.ActivityEndTime AND a.Validity = 1 AND a.EntryUser IN (SELECT UserName FROM team_table WHERE team_table Status ='Active' GROUP BY EntryUser");
                $stmt->bindParam(':daysPDO', $Days);
                $stmt->bindParam(':userPDO', $UserName);
                $stmt->bindParam(':currentDatePDO', $currentDate);
                $stmt->execute();
                $EducationCount = $stmt->fetchColumn();
                $education_percentage = 0; // Default percenage value
                if ($EducationCount !== null && $EducationCount > 0) {
                $education_percentage = ($EducationCount / $ExpectedDisciplineDays) * 100;
                }
                $response = array("Education" => round($education_percentage, 2));
                echo json_encode($response);
                break;
            case 'Breakfast':
                 // Breakfast query
                $stmt = $pdo->prepare("SELECT EntryUser,COUNT(*) AS EntryCount FROM activity_table WHERE EntryDate >= :daysPDO AND EntryDate <= :currentDatePDO AND ActivityName = 'Breakfast' AND Time(PostedDateTime) >= '05:00:00' AND Time(PostedDateTime) <= '08:30:59' AND Validity = 1 AND EntryUser IN (SELECT UserName FROM team_table WHERE team_table Status ='Active' GROUP BY EntryUser");
                $stmt->bindParam(':daysPDO', $Days);
                $stmt->bindParam(':userPDO', $UserName);
                $stmt->bindParam(':currentDatePDO', $currentDate);
                $stmt->execute();
                $BreakfastCount = $stmt->fetchColumn();
                $breakfast_percentage = 0; // Default percentage value
                if ($BreakfastCount !== null && $BreakfastCount > 0) {
                $breakfast_percentage = ($BreakfastCount / $ExpectedDisciplineDays) * 100;
                }
                $response = array("Breakfast" => round($breakfast_percentage, 2));
                echo json_encode($response);
                break;
            case 'Lunch':
                // Lunch query
                $stmt = $pdo->prepare("SELECT EntryUser,COUNT(*) AS EntryCount FROM activity_table WHERE EntryDate >= :daysPDO AND EntryDate <= :currentDatePDO AND ActivityName = 'Lunch' AND Time(PostedDateTime) >= '12:00:00' AND Time(PostedDateTime) <= '14:00:59' AND Validity = 1 AND EntryUser IN (SELECT UserName FROM team_table WHERE team_table Status ='Active' GROUP BY EntryUser");
                $stmt->bindParam(':daysPDO', $Days);
                $stmt->bindParam(':userPDO', $UserName);
                $stmt->bindParam(':currentDatePDO', $currentDate);
                $stmt->execute();
                $LunchCount = $stmt->fetchColumn();
                $lunch_percentage = 0; // Default percentage value
                if ($LunchCount !== null && $LunchCount > 0) {
                $lunch_percentage = ($LunchCount / $ExpectedDisciplineDays) * 100;
                }
                $response = array("Lunch" => round($lunch_percentage, 2));
                echo json_encode($response);
                break;
            case 'Dinner':
                // Dinner query
                $stmt = $pdo->prepare("SELECT EntryUser,COUNT(*) AS EntryCount FROM activity_table WHERE EntryDate >= :daysPDO AND EntryDate <= :currentDatePDO AND ActivityName = 'Dinner' AND Time(PostedDateTime) >= '17:30:00' AND Time(PostedDateTime) <= '20:30:59' AND Validity = 1 AND EntryUser IN (SELECT UserName FROM team_table WHERE team_table Status ='Active' GROUP BY EntryUser");
                $stmt->bindParam(':daysPDO', $Days);
                $stmt->bindParam(':userPDO', $UserName);
                $stmt->bindParam(':currentDatePDO', $currentDate);
                $stmt->execute();
                $DinnerCount = $stmt->fetchColumn();
                $dinner_percentage = 0; // Default percentage value
                if ($DinnerCount !== null && $DinnerCount > 0) {
                $dinner_percentage = ($DinnerCount / $ExpectedDisciplineDays) * 100;
                }
                $response = array("Dinner" => round($dinner_percentage, 2));
                echo json_encode($response);
                break;

            case 'Weight':
                // Weight query
                $stmt = $pdo->prepare("SELECT EntryUser,COUNT(*) AS EntryCount FROM data_table WHERE EntryDate >= :daysPDO AND EntryDate <= :currentDatePDO AND ActivityName = 'Weight' AND Time(PostedDateTime) >= '03:00:00' AND Time(PostedDateTime) <= '06:00:59' AND Validity = 1 AND EntryUser IN (SELECT UserName FROM team_table WHERE team_table Status ='Active' GROUP BY EntryUser");
                $stmt->bindParam(':daysPDO', $Days);
                $stmt->bindParam(':userPDO', $UserName);
                $stmt->bindParam(':currentDatePDO', $currentDate);
                $stmt->execute();
                $WeightedCount = $stmt->fetchColumn();
                $weight_percentage = 0; // Default percentage value
                if ($WeightedCount !== null && $WeightedCount > 0) {
                $weight_percentage = (($WeightedCount) / $ExpectedDisciplineDays) * 100;
                }
                // Return the weight percentage as JSON
                $response = array("Weight" => round($weight_percentage, 2));
                echo json_encode($response);
                break;

            default:
                echo "Invalid activity";
                exit();
        }
    }
} catch (PDOException $e) {
    echo "Error: " . $e->getMessage();
} finally {
    $pdo = null; // Close the PDO connection
}
?>
