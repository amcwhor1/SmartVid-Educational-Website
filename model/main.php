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
		header('location: login.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: login.php");
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
    <link rel="stylesheet" href="../view/css/Footer-Basic.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="../view/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="../view/css/Navigation-Clean1.css">
    <link rel="stylesheet" href="../view/css/Navigation-with-Button1.css">
    <link rel="stylesheet" href="../view/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="../view/css/styles.css">
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

    <div id="mainheading">
        <nav class="navbar navbar-default navigation-login" id="LoginNav">
            <div class="container">
                <div class="navbar-header"><a class="navbar-brand navbar-link" href="#">SmartVid </a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav">
					<?php  if (isset($_SESSION['username'])) : ?>
                    <p class ="navbar-text">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
                    <p class="navbar-text"> <a href="index.php?logout='1'" style="color: red;">logout</a> </p>
                    <?php endif ?>
                        <li class="active" role="presentation"><a href="main.php">Main </a></li>
                        <li role="presentation"><a href="#">About </a></li>
                    </ul>
                    <p class="navbar-text navbar-right actions"><a id="loginBtn" class="navbar-link login" role="button" style="margin-left:-12px;padding:6px;">Log In</a> <a class="btn btn-primary action-button" role="button" href="register.php" style="padding:7px;">Sign Up</a></p>
                </div>
            </div>
        </nav>
    </div>
	
	<div id="homePage">
		
		<div id="mainHeading" style="background-image:url(&quot;../view/img/DigitalLearning.jpg&quot;);height:600px;background-size:cover;background-repeat:no-repeat;">
			<div class="jumbotron" style="background-color:rgba(63,121,180,0.79);">
				<h1>Make Learning Great!</h1>
				<p>Upload videos, Create classes, Learn!</p>
				<p><a class="btn btn-default" role="button" href="register.php">Sign Up Now!</a></p>
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
	
	<div id="">
	
		
	
	</div>
    
    <div id="footerMain" class="footer-main">
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
    </div>
	
    <script src="../controller/js/jquery.min.js"></script>
    <script src="../controller/bootstrap/js/bootstrap.min.js"></script>
    <script src="../controller/js/Dynamically-Queue-Videos.js"></script>
    <script src="../controller/js/dynamicDashboard.js"></script>
	<script src="../controller/js/register.js"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
</body>

</html>