<?php
  session_start();
  ob_start();

  $host = 'www.baleenmedia.com';
  $port = '3306';
  $dbname = 'baleeed5_live';
  $users = 'baleeed5_web_adm';
  $pwd = 'admin123$';
  $num =0;
  
  try{
    $checkDb = new PDO("mysql:host=$host;dbname=$dbname", $users, $pwd);
	$loadQuery = "SELECT UserNumber FROM loadbalancing_table";
	$loadExe = $checkDb->query($loadQuery); 
    $loadFetch = $loadExe->fetch();
	switch ($loadFetch['UserNumber']) {
      case 1:
        $num=2;
		$newUser='baleeed5_dev2';
      break;
      case 2:
        $num=3;
		$newUser='baleeed5_dev3';
      break;
      case 3:
        $num=4;
		$newUser='baleeed5_dev4';
      break;
	  case 4:
        $num=5;
		$newUser='baleeed5_dev5';
      break;
	  case 5:
        $num=1;
		$newUser='baleeed5_dev1';
      break;
    }
	$checkDb->exec("UPDATE loadbalancing_table SET UserNumber=".$num);
  $_SESSION['dbuser']=$newUser;
  $checkDb=null;

  } catch (PDOException $e){
    echo $e->getMessage();
  }
  ?>