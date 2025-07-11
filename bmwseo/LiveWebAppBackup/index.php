<?php
  session_start();
  ob_start();
  require ("checkdb.php");
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
                <a class="navbar-brand" href="/">Baleen Media Call Login</a>
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
    <h3 class="col-md-3">Login Form</h3>
	
    <div class="container text-md-left">
        <div class="row">
            <div class="col-md-3">Username</div>
        </div>
        <div class="row">
            <div class="col-md-3"><input type="text" id="userName" value="" /></div>
        </div>

        <div class="row">&nbsp;</div>
        <div class="row">
            <div class="col-md-3">Password</div>
        </div>

        <div class="row">
            <div class="col-md-3"><input type="password" id="userPassword" value="" /></div>
        </div>

        <div class="row">&nbsp;</div>
        <div class="row">
            <div class="col-md-3">
                <input type="button" id="loginButton" value="Login" class="btn btn-primary" style="background-color:#4CAF50; font-size:20px" />
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
$checkdb = null;
?>
</html>
