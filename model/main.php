<!---DB Connection --->
<?php
    
$conn = mysqli_connect("localhost","root","","smartvid") or die('Error connecting to MySQL server.');
    
if ($conn->connect_error)   
{
    die("Connection failed: " . $conn->connect_error);
} 
else
{
    echo "";
}
  
?>

<!-- Parse Login -->

<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header();
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header();
	}

?>

<!DOCTYPE html>

<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartVid</title>
    <link rel="stylesheet" href="../view/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="../view/fonts/ionicons.min.css">
    <link rel="stylesheet" href="../view/fonts/material-icons.min.css">
    <link rel="stylesheet" href="../view/css/Dynamically-Queue-Videos.css">
    <link rel="stylesheet" href="../view/css/Features-Blue.css">
    <link rel="stylesheet" href="../view/css/Features-Boxed.css">
    <link rel="stylesheet" href="../view/css/Footer-Basic.css">
    <link rel="stylesheet" href="../view/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="../view/css/Navigation-Clean1.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../view/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="../view/css/Navigation-with-Button1.css">
    <link rel="stylesheet" href="../view/css/styles.css">
    <link rel="stylesheet" href="../view/css/styles_main.css">
    <link rel="stylesheet" href="../view/css/Team-Boxed.css">
    <link rel="stylesheet" href="../view/css/Team-Grid.css">
    <link rel="stylesheet" href="../view/css/Team-with-rotating-cards.css">
</head>

<body>
   
   
<!---DB Connection --->
<?php
    
$conn = mysqli_connect("localhost","root","","smartvid") or die('Error connecting to MySQL server.');
    
if ($conn->connect_error)   
{
    die("Connection failed: " . $conn->connect_error);
} 
else
{
    echo "";
}
  
?>

    <span id="mainheading">
        <nav class="navbar navbar-default navigation-login" id="LoginNav">
            <div class="container">
                <div class="navbar-header"><a class="navbar-brand navbar-link" href="main.php">SmartVid </a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav">
					<?php  if (isset($_SESSION['username'])) : ?>
                    <p class ="navbar-text">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                    <p class="navbar-text"> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
                    <?php endif ?>
                    <li><a id="aboutBtn" role="button">About </a></li>
                    </ul>
                    <p class="navbar-text navbar-right actions"><a id="loginBtn" class="navbar-link login" role="button">Log In</a> <a class="btn btn-primary action-button" id="signupBtn" role="button">Sign Up</a></p>
                </div>
            </div>
        </nav>
    </span>
	
	<div id="homePage">
		
		<div id="mainHeading">
			<div id="jumbo" class="jumbotron">
				<h1>Make Learning Great!</h1>
				<p>Upload videos, Create classes, Learn!</p>
				<p><a id="signupNowBtn" class="btn btn-default" role="button">Sign Up Now!</a></p>
			</div>
		</div>
			
	</div>
   
   <div id="aboutPage" style="display:none;background-image:url(&quot;../view/img/mountainLights.jpg&quot;);background-size: cover;background-repeat:no-repeat;background-color:rgb(0,0,102);">
      <div id="something" style="height:174px;">
        <h1 class="text-primary" id="title" style="text-align:center;padding:0px;padding-bottom:1px;margin:23px;height:44px;">What is SmartVid?</h1>
        <p class="text" id="overview" style="text-align:center; font-size:19px;/*background-color:rgba(25,25,31,0.54);*/width:1186px;max-width:-1px;min-width:1px;padding:4px;padding-right:1px;padding-top:-3px;padding-left:119px;color:rgb(238,238,241);margin:9px;height:88px;">SmartVid is an educational platform for instructors to upload video content to help their students learn material at their own pace. Click the button below to meet the Brogrammers or check out some of our awesome features. Thank you for choosing
            SmartVid to help making learning great again!</p>
      </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12" style="text-align:center;margin:8px;height:143px;"><a class="btn btn-default btn-lg" role="button" href="#" id="meetTheTeam" style="margin:1px;padding:5px;padding-bottom:-1px;padding-top:8px;height:41px;font-size:16px;padding-left:4px;">Meet the Team</a>
                    <h2 class="text-primary" id="features"
                    style="text-align:center;padding-bottom:20px;padding-left:2px;padding-top:15px;background-color:rgba(255,255,255,0);width:1109px;margin:10px;height:72px;"><strong>Top Professor Features</strong> </h2></div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4" style="height:156px;">
                    <i class="glyphicon glyphicon-upload" style="font-size:45px;padding-bottom:-12px;"></i>
                    <h3 style="padding:-15px;padding-top:-18px;margin:3px;">Upload Videos</h3>
                    <p id="uploadDescription">Professors can upload as many video lessons as they wish for their students to learn.</p>
                </div>
                <div class="col-lg-4 col-md-4" id="account">
                    <i class="glyphicon glyphicon-lock" style="font-size:45px;padding-bottom:-12px;"></i>
                    <h3 style="padding:-15px;padding-top:-18px;margin:3px;">Protected Account</h3>
                    <p>Students and professors both have password protected accounts, But as a professor, no one else will be able to manage your class sections</p>
                </div>
                <div class="col-lg-4 col-md-4" id="gradeBook"><i class="glyphicon glyphicon-check" style="font-size:45px;padding-bottom:-12px;"></i>
                    <h3 style="padding:-15px;padding-top:-18px;margin:3px;">Gradebook </h3>
                    <p>Professors will be able to see student's viewing habits with a percentage (%) of how much of the lessons your student has watched.</p>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="container">
            <div class="row">
                <div class="col-md-12" id="column" style="margin:8px;">
                    <h2 class="text-primary" id="features" style="text-align:center;padding-top:26px;padding-bottom:21px;"><strong>Top Student Features</strong> </h2></div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4"><i class="glyphicon glyphicon-facetime-video" style="font-size:45px;padding-bottom:-12px;"></i>
                    <h3 style="padding:-15px;padding-top:-18px;margin:3px;">View Videos</h3>
                    <p>Students can watch uploaded professor content at their own pace to ensure that they are understanding the material </p>
                </div>
                <div class="col-lg-4 col-md-4"><i class="glyphicon glyphicon-repeat" style="font-size:45px;padding-bottom:-12px;"></i>
                    <h3 style="padding:-15px;padding-top:-18px;margin:3px;">Rewatch Videos</h3>
                    <p>The beauty of video lessons, is you can watch them as many time as you like until you get it!</p>
                </div>
                <div class="col-lg-4 col-md-4"><i class="glyphicon glyphicon-list-alt" style="font-size:45px;padding-bottom:-12px;"></i>
                    <h3 style="padding:-15px;padding-top:-18px;margin:3px;">Quizzes </h3>
                    <p>Students can take comprensive quizzes following their video to check for understanding before moving on to the next one.</p>
                </div>
            </div>
        </div>
    </div>
   </div>
	
	<div id="loginPage" style="display:none;">
			
		<div class="login-dark">
			<form method="post" action="login.php">
				<h2 class="sr-only">Login Form</h2>
				<div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
				<div class="input-group form-control form-style" style=" margin-bottom:1em;">
				<input  type="text" name="username" style="background:none; border:none; color:white;" placeholder="Username">
				</div>
				<div class="input-group form-control" >
					<input type="password" name="password" style="background:none; border:none; color:white;" placeholder="Password">
				</div>
				<div class="input-group btn-primary btn-block" style="text-align:center; margin-bottom: 1em; padding:0;">
				<button type="submit" class="btn" name="login_user" style="background:none;">Login</button>
				</div>
				<p>
				Not yet a member? <a href="register.php">Sign up</a>
				</p>
			</form>
		</div>
		
	</div>
	
	<div id="registerPage" style="display:none;">
   
        <div id="registerForm" class="row register-form">
            <div class="col-md-8 col-md-offset-2">
                <form class="form-horizontal custom-form" style="color:rgb(255,253,253);background-color:rgb(42,42,42);">
                    <h1 style="color:rgb(234,237,239);">Register Form</h1>
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="firstName-input-field" style="color:rgb(242,241,241);">First </label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input id="firstName" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="lastName-input-field" style="color:rgb(242,241,241);">Last </label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input id="lastName" class="form-control" type="text">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="email-input-field" style="color:rgb(249,249,249);">Email </label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input id="email" class="form-control" type="email">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="password-input-field" style="color:rgb(249,247,247);">Password </label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input id="pass" class="form-control" type="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="repeat-password-input-field" style="color:rgb(255,251,251);">Repeat Password </label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input id="passConf" class="form-control" type="password">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" for="dropdown-input-field" style="color:rgb(254,251,251);">Account Type</label>
                        </div>
                        <div class="col-sm-4 input-column">
                            <div class="dropdown">
                                <button class="btn btn-default dropdown-toggle" data-toggle="dropdown" aria-expanded="false" type="button">Dropdown <span class="caret"></span></button>
                                <ul class="dropdown-menu" role="menu">
                                    <li role="presentation"><a href="#">Student </a></li>
                                    <li role="presentation"><a href="#">Professor </a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="checkbox">
                        <label>
                            <input id="acceptTerms" type="checkbox">I've read and accept the terms and conditions</label>
                    </div>
                    <button class="btn btn-default submit-button" type="button" onclick="onClick()">Submit</button>
                </form>
            </div>
        </div>
	</div>
	

    
    <span id="footerMain" class="footer-main">
        <footer>
            <div class="social"></div>
            <ul class="list-inline">
                <li><a href="main.php">Home</a></li>
            <li><a id="aboutFooterBtn" role="button">About</a></li>
            <li><a href="#">Terms & Services</a></li>
            <li><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Brogrammers &copy; 2017</p>
        </footer>
    </span>
	
    <script src="../controller/js/jquery.min.js"></script>
    <script src="../controller/bootstrap/js/bootstrap.min.js"></script>
    <script src="../controller/js/Dynamically-Queue-Videos.js"></script>
    <script src="../controller/js/masterDynamic.js"></script>
	<script src="../controller/js/register.js"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
</body>

</html>