<?php
session_start();
ob_start();
require ("db.php");

$userName = $_POST['userName'];
$userPassword = $_POST['userPassword'];

$updQuery = "SELECT userName FROM employee_table WHERE userName =:userName AND password=:userPassword AND LOWER(status)=:status";

$updState = $db->prepare($updQuery);

$updState->execute([':userName' => $userName, ':userPassword' => $userPassword, ':status' => 'active']);
$res = $updState->fetch();

if($res['userName']){
    $_SESSION['userName']= $res['userName'];
	echo '1';
}
else {
	echo '0';
}
$db=null;
exit;
?>