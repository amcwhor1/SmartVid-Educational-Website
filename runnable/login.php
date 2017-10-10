<?php include('server.php') ?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SmartVid</title>
    <link rel="stylesheet" href="view/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato:300,400,700">
    <link rel="stylesheet" href="view/fonts/ionicons.min.css">
    <link rel="stylesheet" href="view/fonts/material-icons.min.css">
    <link rel="stylesheet" href="view/css/Dynamically-Queue-Videos.css">
    <link rel="stylesheet" href="view/css/Footer-Basic.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="view/css/Login-Form-Dark.css">
    <link rel="stylesheet" href="view/css/Navigation-Clean1.css">
    <link rel="stylesheet" href="view/css/Navigation-with-Button1.css">
    <link rel="stylesheet" href="view/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="view/css/styles.css">
    <link rel="stylesheet" type="text/css" href="style.css">
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
                <p class="navbar-text navbar-right actions"><a class="navbar-link login" href="login.php" style="margin-left:-12px;padding:6px;">Log In</a> <a class="btn btn-primary action-button" role="button" href="createAccount.php" style="padding:7px;padding-top:7px;">Sign Up</a></p>
            </div>
        </div>
    </nav>
     
      <div class="login-dark">
        <form method="post" action="login.php">

        <?php include('errors.php'); ?>
           
            <h2 class="sr-only">Login Form</h2>
            <div class="illustration"><i class="icon ion-ios-locked-outline"></i></div>
            
            <div class="form-group">
                <input class="form-control" type="text" name="username" placeholder="Username/Email">
            </div>
            <div class="form-group">
                <input class="form-control" type="password" name="password" placeholder="Password">
            </div>
             <div class="row input-group btn-style">
            <button type="submit" class="btn-inner-style" name="login_user">Login</button>
        </div>
        <p style="text-align: center">
            Not yet a member? <a href="register.php">Sign up</a>
        </p>
    </form>
    </div>
     
     
     <!-- NEW LOGIN PAGE -->
     
    
<!--
    <div class="header">
        <h2>Login</h2>
    </div>

    <form method="post" action="login.php">

        <?php include('errors.php'); ?>

        <div class="input-group">
            <label>Username</label>
            <input type="text" name="username">
        </div>
        <div class="input-group">
            <label>Password</label>
            <input type="password" name="password">
        </div>
        <div class="input-group">
            <button type="submit" class="btn" name="login_user">Login</button>
        </div>
        <p>
            Not yet a member? <a href="register.php">Sign up</a>
        </p>
    </form>
-->
   
    
 <!-- NEW LOGIN PAGE -->

    <footer>
        <div class="social"></div>
        <ul class="list-inline">
            <li><a href="#">Home</a></li>
            <li><a href="#">Services</a></li>
            <li><a href="#">About</a></li>
            <li><a href="#">Terms</a></li>
            <li><a href="#">Privacy Policy</a></li>
        </ul>
        <p class="copyright">Company Name © 2016</p>
    </footer>
    <script src="controller/js/jquery.min.js"></script>
    <script src="controller/bootstrap/js/bootstrap.min.js"></script>
    <script src="controller/js/Dynamically-Queue-Videos.js"></script>
	<script src="controller/js/register.js"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
</body>

</html>
