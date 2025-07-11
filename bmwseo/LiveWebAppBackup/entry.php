<?php
  session_start();
  ob_start();
  require ("db.php");
  
  if ($_SESSION['userName']=='') {
    header('Location: index.php');
  }
  
  function gettable($id) {
    require ("db.php");
    $logQuery = "SELECT EntryUser, CallDate, Remarks FROM calllogger_table WHERE ClientID=".$id." ORDER BY CallDate DESC";
    $stmt = $db->query($logQuery);
    $htmlBody = '';
	$i=0;
    while ($row = $stmt->fetch()) {
      $i++;
	  $htmlBody.='<tr>';
	  $htmlBody.='<td>'.$i.'</td>';
	  $htmlBody.='<td>'.$row['EntryUser'].'</td>';
	  $htmlBody.='<td>'.$row['CallDate'].'</td>';
	  $htmlBody.='<td>'.$row['Remarks'].'</td>';
	  $htmlBody.='</tr>';
    }
	$html = '';
	if ($i > 0) {
	  $html ='<table class="table table-dark">
      <thead>
      <tr>
      <th scope="col">#</th>
      <th scope="col">User</th>
      <th scope="col">Call Date</th>
      <th scope="col">Remarks</th>
      </tr>
      </thead>
      <tbody>';
	  $html.=$htmlBody;
	  $html.='</tbody>
              </table>';
	}
    return $html;
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Baleen Media Call Logger - Baleen Media Operations</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" href="css/site.css" />
	<link rel="stylesheet" href="css/jquery.timepicker.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
            <div class="container">
                <a class="navbar-brand" href="/">Baleen Media Call Logger</a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".navbar-collapse" aria-controls="navbarSupportedContent"
                        aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav>
    </header>
    <div class="container">
        <main role="main" class="pb-3">
            
<div class="text-md-center">
    <h3 class="col-md-3">Client Information</h3>
    <?php
	date_default_timezone_set('Asia/Kolkata');
	$nowCurrentDate = date('Y-m-d');
	$nowCurrentTime = date('G:i');
	$followAlert = 0;
	$followQuery = "SELECT ID, MobileNo, CompanyName, KeyWord, State, Address, Location, FollowupTime FROM `clientinfo_table` WHERE `State`=1 AND UserName='".$_SESSION['userName']."' AND SUBSTRING(`FollowupDate`,1,10) = '".$nowCurrentDate."' AND `FollowupTime` <= '".$nowCurrentTime."' order by ID desc LIMIT 0,1";
	$execFollow = $db->query($followQuery);
	$resFollow = $execFollow->fetch();
	if ($resFollow) {
	  $followAlert = 1;
	  $_SESSION['ID'] = $resFollow['ID'];
	  $_SESSION['MobileNo'] = $resFollow['MobileNo'];
	  $_SESSION['CompanyName'] = $resFollow['CompanyName'];
	  $resId = $resFollow['ID'];
	  $resMobileNo = $resFollow['MobileNo'];
	  $resCompanyName = $resFollow['CompanyName'];	
      $resKeyWord = $resFollow['KeyWord'];	
	  $resAddress ='NA';
	  if ($resFollow['Address']) {
        $resAddress = $resFollow['Address'];	  
	  }
	  $resLocation ='NA';
	  if ($resFollow['Address']) {
        $resLocation = $resFollow['Location'];	  
	  }
	}
	else {
	  $i=1;
	  label1:
	  if ($i>10) {
	    echo 'No more datas found';
		exit;
	  }
	  $query = "SELECT ID, MobileNo, CompanyName, KeyWord, State, Address, Location FROM clientinfo_table WHERE ((State = 0) OR (State=2020 AND UserName='".$_SESSION['userName']."')) AND KeyWord <> '' order by ID desc LIMIT 0,1";
	  $execQuery = $db->query($query);
	  $res = $execQuery->fetch();
	  date_default_timezone_set('Asia/Kolkata');
      $entryDate = date('Y-m-d G:i:s');
	  if ($res['State']==0) {
	    $updNo = $db->exec("UPDATE clientinfo_table SET State=2020, EntryDate='".$entryDate."', UserName='".$_SESSION['userName']."' WHERE State=0 and ID =".$res['ID']);
	    if($updNo==0) {
		  $i++;
		  goto label1;
	    }
	  } 
	  $_SESSION['ID'] = $res['ID'];
	  $_SESSION['MobileNo'] = $res['MobileNo'];
	  $_SESSION['CompanyName'] = $res['CompanyName'];
	  $_SESSION['Address'] = $res['Address'];
	  $resId = $res['ID'];
	  $resMobileNo = $res['MobileNo'];
	  $resCompanyName = $res['CompanyName'];
	  $resKeyWord = $res['KeyWord'];
	  $resAddress = $res['Address'];
	  $resAddress ='NA';
	  if ($res['Address']) {
        $resAddress = $res['Address'];	  
	  }
	  $resLocation ='NA';
	  if ($res['Address']) {
        $resLocation = $res['Location'];	  
	  }
	}
	?>

    <div class="container text-md-left">
        <div class="row hide">
            <div class="col-md-3"><input type="hidden" id="clientID" readonly value="<?php print $resId; ?>" /><input type="hidden" id="userId" readonly value="<?php print $_SESSION['userName']; ?>" /></div>
        </div>

        <div class="row">
            <div class="col-md-3">Client Name</div>
        </div>
        <div class="row">
            <div class="col-md-3"><input type="text" id="clientName" readonly value="<?php print $resCompanyName; ?>" /></div>
			<?php if (gettable($resId)) { ?>
			  <div class="col-md-4"><?php print gettable($resId); ?></div>
			<?php } ?>
        </div>

        <div class="row">&nbsp;</div>
        <div class="row">
            <div class="col-md-3">Client Category</div>
        </div>

        <div class="row">
            <div class="col-md-3"><input type="text" id="clientCategory" readonly value="<?php print $resKeyWord; ?>" /></div>
        </div>
		
		<div class="row">&nbsp;</div>
        <div class="row">
            <div class="col-md-3">Location</div>
        </div>

        <div class="row">
            <div class="col-md-3"><input type="text" id="clientLocation" readonly value="<?php print $resLocation; ?>" /></div>
        </div>
		
		
		<div class="row">&nbsp;</div>
		
        <div class="row">
            <div class="col-md-3">Address</div>
        </div>
		<div class="row">
            <div class="col-md-3"><textarea class="form-control rounded-0" readonly id="clientAddress" rows="3"><?php print $resAddress; ?></textarea></div>
        </div>

        <div class="row">&nbsp;</div>
        <div class="row">
            <div class="col-md-3">Mobile No.</div>
        </div>

        <div class="row">
            <div class="col-md-3"><input type="text" id="clientMobileNo" readonly value="<?php print $resMobileNo; ?>" /></div>
        </div>

        <div class="row">&nbsp;</div>
        <div class="row">
            <div class="col-md-3">
			<?php
			 if ($followAlert) {
			   ?>
			   <span class="followUp">This is Follow up Call. <br />Need to follow up on <?php echo $resFollow['FollowupTime']; ?></span>
			   <?php
			 }
			?>
                <input type="button" id="callButton" value="Call" class="btn btn-primary" style="background-color:#4CAF50; font-size:20px" />
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-12">
            <hr />
        </div>
    </div>

    <div class="row">
        <div class="col-6">
            <ul id="callHistory"></ul>
        </div>
    </div>

</div>

        </main>
    </div>

    <footer class="border-top footer text-muted">
        <div class="container">
            &copy; 2020 - Baleen Media - <a href="/Home/Privacy">Privacy</a>
        </div>
    </footer>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
    <script src="js/bootstrap.bundle.min.js"></script>
	<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
    <script src="js/signalr.js"></script>
    <script src="js/site.js"></script>
	<script src="js/jquery.timepicker.js"></script>
    
</body>
<?php
$db=null;
?>
</html>