<?php

  $host = 'www.baleenmedia.com';
  $port = '3306';
  $dbname = 'baleeed5_live';
  $users = $_SESSION['dbuser'];
  $pwd = 'admin123$';
  $num =0;  
	try{
      $db = new PDO("mysql:host=$host;dbname=$dbname", $users, $pwd);
	} catch (PDOException $e){
      echo $e->getMessage();
    } 
?>