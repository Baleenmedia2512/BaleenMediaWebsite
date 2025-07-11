<?php 
include("db_pdo.php");
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Headers: *");
try {


    $UserName = $_GET['JsonUserName'];
    $password = $_GET['JsonPassword'];
    $pdo = establishConnection($UserName);
//echo json_encode($obj['JsonUserName']);
      $stmt = $pdo->prepare("SELECT * FROM `team_table` WHERE `UserName` = :PDOusername and `Password` = :PDOpassword");
      $stmt->bindParam(':PDOusername', $UserName, PDO::PARAM_STR);
      $stmt->bindParam(':PDOpassword', $password, PDO::PARAM_STR);
      $stmt->execute();
      $result = $stmt->fetch(PDO::FETCH_ASSOC);
      
      if(!$result){
        $stmt = $pdo->prepare("SELECT UserId FROM `team_table` WHERE `UserName` = :PDOusername");
        $stmt->bindParam(':PDOusername', $UserName, PDO::PARAM_STR);
        $stmt->execute();
        $UserId = $stmt->fetchColumn();
        if ($UserId === false || $UserId === null){
            echo json_encode('Wrong UserName');
        }else{
            echo  json_encode('Wrong Password');
        }
      }
      else{
        if($result['Status'] == 'Inactive'){
            echo json_encode('Inactive Member');
        }
        else{
            echo json_encode('Login Succesfully'); 	
        }
       }
   
   }
  
  //catch exception
  catch(Exception $e) {
	echo json_encode('Message: ' .$e->getMessage());
  }


?>