<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
	}

?>
<!DOCTYPE html>

<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartVid</title>
    <link rel="stylesheet" href="../view/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="../view/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../view/fonts/material-icons.min.css">
    <link rel="stylesheet" href="../view/css/Dynamically-Queue-Videos.css">
    <link rel="stylesheet" href="../view/css/Footer-Basic.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../view/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="../view/css/Navigation-Clean1.css">
    <link rel="stylesheet" href="../view/css/Navigation-with-Button1.css">
    <link rel="stylesheet" href="../view/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="../view/css/dashboard.css">
    <link rel="stylesheet" href="../view/css/styles.css">
</head>

<body>




    <nav class="navbar navbar-default navigation-login" id="LoginNav">
        <div class="container">
            <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">SmartVid </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li class="active" role="presentation"><a href="main.php">Main </a></li>
                    <li role="presentation"><a href="#">About </a></li>
                </ul>
                <p class="navbar-text">

                    <?php  if (isset($_SESSION['username'])) : ?>
                    <p class ="navbar-text">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                    <p class="navbar-text"> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
                    <?php endif ?>


               

                <p class="navbar-text navbar-right actions"><a class="navbar-link login" href="Main.php">Logout </a> <a class="btn btn-primary action-button" role="button" href="index.php" style="padding:7px;">Home </a></p>
            </div>
        </div>
    </nav>
    <div style="height:668px;">
        <div class="col-md-8">
            <div id="homePanel" class="panel panel-default">
                <div id="homePanelHeading" class="panel-heading">
                    <h3 id="panelTitleClasses" class="panel-title">Classes </h3>
                </div>
                <div id="panelBodyClasses" class="panel-body">
                    <a href="Class1.php"><img src="../view/img/chemistry.jpg" style="margin-top:10px;margin-right:10px;margin-bottom:10px;margin-left:10px;height:180px;"></a>
                    <a href="#"><img src="../view/img/English.jpg" style="margin-top:10px;margin-right:10px;margin-bottom:10px;margin-left:10px;width:180px;height:180px;"></a>
                    <a href="#"><img src="../view/img/Math.png" style="margin-top:10px;margin-right:10px;margin-bottom:10px;margin-left:10px;"></a>
                    <a href="#"><img src="../view/img/history.gif" style="margin-top:10px;margin-right:10px;margin-bottom:10px;margin-left:10px;"></a>
                </div>
            </div>
            <div id="uploadVideoPanel" class="panel panel-default" style="display:none;">
                <div id="uploadVideoHeading" class="panel-heading">
                    <h3 id="uploadVideoTitle" class="panel-title" style="font-size:40px;">Upload Video</h3>
                </div>
                <div class="panel-body"></div>
                <div class="row">
                </div>
            </div>
            <div id="createClassPanel" class="panel panel-default" style="display:none;">
                <div id="createClassHeading" class="panel-heading">
                    <h3 id="createClassTitle" class="panel-title" style="font-size:40px;">Create Class</h3>
                </div>
                <div class="panel-body"></div>
                <div class="row">
                </div>
            </div>
            <div id="manageClassesPanel" class="panel panel-default" style="display:none;">
                <div id="manageClassesHeading" class="panel-heading">
                    <h3 id="manageClassesTitle" class="panel-title" style="font-size:40px;">Manage Classes</h3>
                </div>
                <div class="panel-body"></div>
                <div class="row">
                </div>
            </div>
            <div id="manageVideosPanel" class="panel panel-default" style="display:none;">
                <div id="manageVideosHeading" class="panel-heading">
                    <h3 id="manageVideosTitle" class="panel-title" style="font-size:40px;">Manage Videos</h3>
                </div>
                <div class="panel-body"></div>
                <div class="row">
                </div>
            </div>
            <div id="accountSettingsPanel" class="panel panel-default" style="display:none;">
                <div id="accountSettingsHeading" class="panel-heading">
                    <h3 id="accountSettingsTitle" class="panel-title" style="font-size:40px;">Account Settings</h3>
                </div>
                <div class="panel-body"></div>
                <div class="row">
                </div>
            </div>
        </div>
        <div class="col-md-4" style="height:525px;">
            <div id="optionsPanel" class="panel panel-default">
                <div id="optionPanelHeading" class="panel-heading">
                    <h3 id="optionPanelTitle" class="panel-title">Options </h3>
                </div>
                <div id="optionPanelBody" class="panel-body">
                    <button id="uploadVideoButton" class="btn btn-primary btn-lg" type="button">Upload Video</button>
                    <button id="createClassButton" class="btn btn-primary btn-lg" type="button">Create Class</button>
                    <button id="manageClassesButton" class="btn btn-primary btn-lg" type="button">Manage Classes</button>
                    <button id="manageVideosButton" class="btn btn-primary btn-lg" type="button">Manage Videos</button>
                    <button id="accountSettingsButton" class="btn btn-primary btn-lg" type="button">Account Settings</button>
                </div>
            </div>
        </div>
    </div>
    <footer>
        <div class="social"></div>
        <ul class="list-inline">
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Terms & Services</a></li>
            <li><a href="#">Privacy Policy</a></li>
        </ul>
        <p class="copyright">Brogrammers &copy; 2017</p>
    </footer>
    <script src="../controller/js/jquery.min.js"></script>
    <script src="../controller/bootstrap/js/bootstrap.min.js"></script>
    <script src="../controller/js/dynamicDashboard.js"></script>
    <script src="../controller/js/Dynamically-Queue-Videos.js"></script>
    <script src="../controller/js/register.js"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
</body>

</html>
