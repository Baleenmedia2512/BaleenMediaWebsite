<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
include("db_pdo.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");

$userName = $_GET['JsonUserName'];
$pdo = establishConnection($userName);
$pdo->beginTransaction();
// Check if a similar entry already exists in the database
$checkStmt = $pdo->prepare("SELECT * FROM enquiry_table WHERE `EnquirerName` = :PDOUserName");
$checkStmt->bindParam(':PDOUserName', $userName);
$checkStmt->execute();

try {
    
    if ($checkStmt->rowCount() == 0) {
        $currentDate = $_GET['JsonToday'];
        $gender = $_GET['JsonGender'];
        $mobNumber = $_GET['JsonMobNumber'];
        $age = $_GET['JsonAge'];
        $dob = $_GET['JsonDOB'];
        $profession = $_GET['JsonProfession'];
        $initHeight = $_GET['JsonInitialHeight'];
        $initWeight = $_GET['JsonInitialWeight'];
        $targetWeight = $_GET['JsonTargetWeight']; 
        $targetWakeUpTime = $_GET['JsonTargetWakeUpTime']; 
        $targetWeightPostingTime = $_GET['JsonTargetWeightPostingTime']; 
        $afresh1Time = $_GET['JsonAfresh1Time']; 
        $educationTime = $_GET['JsonEducationTime']; 
        $targetBreakfastTime = $_GET['JsonTargetBreakfastTime']; 
        $afresh2Time = $_GET['JsonAfresh2Time']; 
        $targetLunchTime = $_GET['JsonTargetLunchTime']; 
        $afresh3Time = $_GET['JsonAfresh3Time']; 
        $workoutTime = $_GET['JsonWorkoutTime'];
        $targetDinnerTime = $_GET['JsonDinnerTime']; 
        $targetBedTime = $_GET['JsonTargetBedTime']; 
        $targetWaterInTake = $_GET['JsonTargetWaterInTake'];
         $stmt = $pdo->prepare("INSERT INTO enquiry_table (`Id`, `EntryUser`, `EntryDate`, `EnquirerName`, `Gender`, `EnquirerPhoneNo`, `DOB`, `Age`, `Profession`, `InitialHeight`, `InitialWeight`, `TargetWeight`, `TargetWakeUpTime`, `TargetWeightPostingTime`, `Afresh1Time`, `EducationTime`, `TargetBreakfastTime`, `Afresh2Time`, `TargetLunchTime`, `Afresh3Time`, `WorkoutTime`, `TargetDinnerTime`, `TargetBedTime`, `TargetWaterInTake(in Ltrs)`) VALUES (null, :PDOUserName, :PDOToday, :PDOUserName, :PDOGender, :PDOPhoneNumber, :PDODob, :PDOAge, :PDOProfession, :PDOInitialHeight, :PDOInitialWeight, :PDOTargetWeight, :PDOTargetWakeUpTime, :PDOTargetWeightPostingTime, :PDOAfresh1, :PDOEducationTime, :PDOTargetBreakfastTime, :PDOAfresh2, :PDOTargetLunchTime, :PDOAfresh3, :PDOWorkoutTime, :PDOTargetDinnerTime, :PDOTargetBedTime, :PDOTargetWaterInTake)");
          $stmt->bindParam(':PDOUserName', $userName);
          $stmt->bindParam(':PDOToday', $currentDate);
          $stmt->bindParam(':PDOGender', $gender);
          $stmt->bindParam(':PDOPhoneNumber', $mobNumber);
          $stmt->bindParam(':PDODob', $dob);
          $stmt->bindParam(':PDOAge', $age);
          $stmt->bindParam(':PDOProfession', $profession);
          $stmt->bindParam(':PDOInitialHeight', $initHeight);
          $stmt->bindParam(':PDOInitialWeight', $initWeight);
        //   $stmt->bindParam(':PDOInitChest', $initChest);
        //   $stmt->bindParam(':PDOInitWaist', $initWaist);
        //   $stmt->bindParam(':PDOInitHip', $initHip);
        //   $stmt->bindParam(':PDOInitWaterInTake', $initWaterInTake);
        //   $stmt->bindParam(':PDOFoodType', $foodType);
        //   $stmt->bindParam(':PDOInitWakeUpTime', $initWakeUpTime);
        //   $stmt->bindParam(':PDONoOfCoffeeTea', $noOfCoffeeTea);
        //   $stmt->bindParam(':PDOInitBreakfastTime', $initBreakfastTime);
        //   $stmt->bindParam(':PDOInitLunchTime', $initLunchTime);
        //   $stmt->bindParam(':PDOInitDinner', $initDinnerTime);
        //   $stmt->bindParam(':PDOInitBedTime', $initBedTime);
        //   $stmt->bindParam(':PDOHealthProblem', $healthProblems);
        //   $stmt->bindParam(':PDOMedication', $medication);
          $stmt->bindParam(':PDOTargetWeight', $targetWeight);
          $stmt->bindParam(':PDOTargetWakeUpTime', $targetWakeUpTime);
          $stmt->bindParam(':PDOTargetWeightPostingTime', $targetWeightPostingTime);
          $stmt->bindParam(':PDOAfresh1', $afresh1Time);
          $stmt->bindParam(':PDOEducationTime', $educationTime);
          $stmt->bindParam(':PDOTargetBreakfastTime', $targetBreakfastTime);
          $stmt->bindParam(':PDOAfresh2', $afresh2Time);
          $stmt->bindParam(':PDOTargetLunchTime', $targetLunchTime);
          $stmt->bindParam(':PDOAfresh3', $afresh3Time);
          $stmt->bindParam(':PDOWorkoutTime', $workoutTime);
          $stmt->bindParam(':PDOTargetDinnerTime', $targetDinnerTime);
          $stmt->bindParam(':PDOTargetBedTime', $targetBedTime);
          //$stmt->bindParam(':PDOTargetNutrition', $targetNutrition);
        //   $stmt->bindParam(':PDOTargetHip', $targetHipSize);
        //   $stmt->bindParam(':PDOTargetChest', $targetChestSize);
        //   $stmt->bindParam(':PDOTargetWaist', $targetWaistSize);
          $stmt->bindParam(':PDOTargetWaterInTake', $targetWaterInTake); 
          $stmt->execute();
          $pdo->commit();
          
          // Check for SQL errors
          $errorInfo = $stmt->errorInfo();
          if ($errorInfo[0] !== '00000') {
            echo "SQL Error: " . $errorInfo[2];
          } else {
            echo "Enquiry Inserted Successfully.";
          }
    } else {
        $currentDate = $_GET['JsonToday'];
        $gender = $_GET['JsonGender'];
        $mobNumber = $_GET['JsonMobNumber'];
        $age = $_GET['JsonAge'];
        $dob = $_GET['JsonDOB'];
        $profession = $_GET['JsonProfession'];
        $initHeight = $_GET['JsonInitialHeight'];
        $initWeight = $_GET['JsonInitialWeight'];
        // $initHip = $_GET['JsonInitialHip']; 
        // $initChest = $_GET['JsonInitialChest']; 
        // $initWaist = $_GET['JsonInitialWaist']; 
        // $initWaterInTake = $_GET['JsonInitialWaterInTake']; 
        // $foodType = $_GET['JsonFoodType']; 
        // $initWakeUpTime = $_GET['JsonInitialWakeUpTime'];      
        // $noOfCoffeeTea = $_GET['JsonNoOfCoffeeTea']; 
        // $initBreakfastTime = $_GET['JsonInitialBreakfastTime']; 
        // $initLunchTime = $_GET['JsonInitialLunchTime']; 
        // $initDinnerTime = $_GET['JsonInitialDinnerTime']; 
        // $initBedTime = $_GET['JsonInitialBedTime']; 
        // $healthProblems = $_GET['JsonHealthProblems']; 
        // $medication = $_GET['JsonMedication']; 
        $targetWeight = $_GET['JsonTargetWeight']; 
        $targetWakeUpTime = $_GET['JsonTargetWakeUpTime']; 
        $targetWeightPostingTime = $_GET['JsonTargetWeightPostingTime']; 
        $afresh1Time = $_GET['JsonAfresh1Time']; 
        $educationTime = $_GET['JsonEducationTime']; 
        $targetBreakfastTime = $_GET['JsonTargetBreakfastTime']; 
        $afresh2Time = $_GET['JsonAfresh2Time']; 
        $targetLunchTime = $_GET['JsonTargetLunchTime']; 
        $afresh3Time = $_GET['JsonAfresh3Time']; 
        $workoutTime = $_GET['JsonWorkoutTime'];
        $targetDinnerTime = $_GET['JsonDinnerTime']; 
        $targetBedTime = $_GET['JsonTargetBedTime']; 
        // $targetNutrition = $_GET['JsonTargetNutrition']; 
        // $targetHipSize = $_GET['JsonTargetHipSize']; 
        // $targetChestSize = $_GET['JsonTargetChestSize']; 
        // $targetWaistSize = $_GET['JsonTargetWaistSize']; 
        $targetWaterInTake = $_GET['JsonTargetWaterInTake'];
        $stmt = $pdo->prepare("Update enquiry_table SET EntryUser = :PDOUserName, EntryDate = :PDOToday, EnquirerName = :PDOUserName, Gender = :PDOGender, EnquirerPhoneNo = :PDOPhoneNumber, Dob = :PDODob, Age = :PDOAge, Profession = :PDOProfession, InitialHeight = :PDOInitialHeight, InitialWeight = :PDOInitialWeight, TargetWeight = :PDOTargetWeight, TargetWakeUpTime = :PDOTargetWakeUpTime, TargetWeightPostingTime =:PDOTargetWeightPostingTime, Afresh1Time = :PDOAfresh1, EducationTime = :PDOEducationTime, TargetBreakfastTime = :PDOTargetBreakfastTime, Afresh2Time = :PDOAfresh2, TargetLunchTime = :PDOTargetLunchTime, Afresh3Time = :PDOAfresh3, WorkoutTime = :PDOWorkoutTime, TargetDinnerTime = :PDOTargetDinnerTime, TargetBedTime = :PDOTargetBedTime, `TargetWaterInTake(in Ltrs)`= :PDOTargetWaterInTake WHERE EnquirerName = :PDOUserName");
        $stmt->bindParam(':PDOUserName', $userName);
          $stmt->bindParam(':PDOToday', $currentDate);
          $stmt->bindParam(':PDOGender', $gender);
          $stmt->bindParam(':PDOPhoneNumber', $mobNumber);
          $stmt->bindParam(':PDODob', $dob);
          $stmt->bindParam(':PDOAge', $age);
          $stmt->bindParam(':PDOProfession', $profession);
          $stmt->bindParam(':PDOInitialHeight', $initHeight);
          $stmt->bindParam(':PDOInitialWeight', $initWeight);
        //   $stmt->bindParam(':PDOInitChest', $initChest);
        //   $stmt->bindParam(':PDOInitWaist', $initWaist);
        //   $stmt->bindParam(':PDOInitHip', $initHip);
        //   $stmt->bindParam(':PDOInitWaterInTake', $initWaterInTake);
        //   $stmt->bindParam(':PDOFoodType', $foodType);
        //   $stmt->bindParam(':PDOInitWakeUpTime', $initWakeUpTime);
        //   $stmt->bindParam(':PDONoOfCoffeeTea', $noOfCoffeeTea);
        //   $stmt->bindParam(':PDOInitBreakfastTime', $initBreakfastTime);
        //   $stmt->bindParam(':PDOInitLunchTime', $initLunchTime);
        //   $stmt->bindParam(':PDOInitDinner', $initDinnerTime);
        //   $stmt->bindParam(':PDOInitBedTime', $initBedTime);
        //   $stmt->bindParam(':PDOHealthProblem', $healthProblems);
        //   $stmt->bindParam(':PDOMedication', $medication);
          $stmt->bindParam(':PDOTargetWeight', $targetWeight);
          $stmt->bindParam(':PDOTargetWakeUpTime', $targetWakeUpTime);
          $stmt->bindParam(':PDOTargetWeightPostingTime', $targetWeightPostingTime);
          $stmt->bindParam(':PDOAfresh1', $afresh1Time);
          $stmt->bindParam(':PDOEducationTime', $educationTime);
          $stmt->bindParam(':PDOTargetBreakfastTime', $targetBreakfastTime);
          $stmt->bindParam(':PDOAfresh2', $afresh2Time);
          $stmt->bindParam(':PDOTargetLunchTime', $targetLunchTime);
          $stmt->bindParam(':PDOAfresh3', $afresh3Time);
          $stmt->bindParam(':PDOWorkoutTime', $workoutTime);
          $stmt->bindParam(':PDOTargetDinnerTime', $targetDinnerTime);
          $stmt->bindParam(':PDOTargetBedTime', $targetBedTime);
        //   $stmt->bindParam(':PDOTargetNutrition', $targetNutrition);
        //   $stmt->bindParam(':PDOTargetHip', $targetHipSize);
        //   $stmt->bindParam(':PDOTargetChest', $targetChestSize);
        //   $stmt->bindParam(':PDOTargetWaist', $targetWaistSize);
          $stmt->bindParam(':PDOTargetWaterInTake', $targetWaterInTake);
          $stmt->execute();
          $pdo->commit();
          
          // Check for SQL errors
          $errorInfo = $stmt->errorInfo();
          if ($errorInfo[0] !== '00000') {
            echo "SQL Error: " . $errorInfo[2];
          } else {
            echo "Enquiry Updated Successfully.";
          }
    }
    
          
} catch (Exception $e) {
    $pdo->rollBack();
    echo $e;
}
?>