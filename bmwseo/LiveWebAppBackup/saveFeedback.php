<?php
session_start();
ob_start();
require ("db.php");
$feedback = $_POST['feedback'];
$remarks = $_POST['remarks'];
$userName = $_POST['userName'];
$id = $_POST['id'];
$followDate = $_POST['followDate'];
$followTime = $_POST['followTime'];
date_default_timezone_set('Asia/Kolkata');
$entryDate = date('Y-m-d G:i:s');

$callDate = $_SESSION['callTime'];
$newDate = time();

$callTimeUsed = $newDate-$callDate;

if ($followDate) {
  $updQuery = "UPDATE  clientinfo_table SET State=".$feedback.", FollowupDate='".$followDate."', FollowupTime='".$followTime."', EntryDate='".$entryDate."', callTimeUsed='".$callTimeUsed."'  WHERE ID =".$id;
}
else {
  $updQuery = "UPDATE  clientinfo_table SET State='".$feedback."', EntryDate='".$entryDate."', callTimeUsed='".$callTimeUsed."' WHERE ID =".$id;
}

$updState=$db->exec($updQuery);
$logQuery = "INSERT INTO calllogger_table(ClientID, CallDate, Status, Remarks, EntryUser) VALUES ('".$id."','".$entryDate."','".$feedback."','".$remarks."','".$userName."')";
$logState=$db->exec($logQuery);

if($updState){
    echo 1;
}
else {
	echo '0';
}
$db=null;
exit;
?>