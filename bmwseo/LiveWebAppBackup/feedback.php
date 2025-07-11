<?php
  session_start();
  ob_start();
  require ("db.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Baleen Media Call Logger - Baleen Media Operations</title>
    <link rel="stylesheet" href="css/bootstrap.min.css" />
	<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <link rel="stylesheet" href="css/site.css" />
	<link rel="stylesheet" href="css/jquery.timepicker.css">
</head>
<body>
    <header>
        <nav class="navbar navbar-expand-sm navbar-toggleable-sm navbar-light bg-white border-bottom box-shadow mb-3">
            <div class="container">
                <a class="navbar-brand" href="/">Baleen Media Feedback</a>
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
    <div class="container text-md-left">
        <div class="row hide">
            <div class="col-md-3"><input type="hidden" id="clientFeedbackID" readonly value="<?php print $_SESSION['ID']; ?>" /><input type="hidden" id="clientFeedbackUserID" readonly value="<?php print $_SESSION['userName']; ?>" /></div>
        </div>

        <div class="row">
            <div class="col-md-3">Client Name</div>
        </div>
        <div class="row">
            <div class="col-md-3"><input type="text" id="clientName" readonly value="<?php print $_SESSION['CompanyName']; ?>" /></div>
        </div>

        <div class="row">&nbsp;</div>
        <div class="row">
            <div class="col-md-3">Feedback</div>
        </div>

        <div class="row">
            <div class="col-md-3">
			<SELECT id ="feedback">
			  <OPTION Value="0">Please Select</OPTION>
			  <OPTION Value="1">Follow Up</OPTION>
			  <OPTION Value="2">Closed</OPTION>
			  <OPTION Value="3">No Requirement</OPTION>
			  <OPTION Value="4">Not Interested</OPTION>
			  <OPTION Value="5">Do Not Disturb</OPTION>
			  <OPTION Value="6">Ringing No Response</OPTION>
			  <OPTION Value="7">Customer Said Too Costly</OPTION>
			  <OPTION Value="10">Invalid Phone Number</OPTION>
			  <OPTION Value="11">Phone is switched Off</OPTION>
			</SELECT>	
			</div>
        </div>
		
		<div id="followUpShow" class="nonedisplay">
		<div class="row">&nbsp;</div>
		<div class="row">
            <div class="col-md-3">Follow Up Date</div>
        </div>
        <div class="row">
            <div class="col-md-3"><input type="text" id="followDate" readonly value="" /><small id="dateHelp" class="form-text text-muted">YYYY-MM-DD(2020-09-25)</small></div>
        </div>
		
		<div class="row">&nbsp;</div>
		<div class="row">
            <div class="col-md-3">Follow Up Time</div>
        </div>
        <div class="row">
            <div class="col-md-3"><input type="text" id="followTime" value="" /></div>
        </div>
		</div>
		
		<div class="row">&nbsp;</div>
        <div class="row">
            <div class="col-md-3">Remarks</div>
        </div>
		<div class="row">
            <div class="col-md-3"><textarea class="form-control rounded-0" id="clientRemarks" rows="3"></textarea></div>
        </div>


        <div class="row">&nbsp;</div>
        <div class="row">
            <div class="col-md-3">
                <input type="button" id="saveButton" value="Save" class="btn btn-primary" style="background-color:#4CAF50; font-size:20px" />
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
