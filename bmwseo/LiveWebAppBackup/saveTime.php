<?php
session_start();
ob_start();

$_SESSION['callTime']=time();
echo '1';
exit;

?>