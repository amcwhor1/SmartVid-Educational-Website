<?php include('server.php') ?>
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
                    <li class="active" role="presentation"><a href="Main.php">Main </a></li>
                    <li role="presentation"><a href="#">About </a></li>
                </ul>
                <p class="navbar-text navbar-right actions" style="padding:0px;padding-right:0px;margin-left:0px;margin-right:-13px;margin-top:9px;width:101px;"><a class="navbar-link login" href="Login.php" style="max-width:0px;min-width:0px;width:0px;height:0px;margin:0px;margin-top:0px;margin-right:0px;margin-bottom:0px;margin-left:-12px;padding:6px;">Log In</a> <a class="btn btn-primary action-button" role="button" href="register.php" style="padding:7px;">Sign Up</a></p>
            </div>
        </div>
    </nav>
    <div>
        <div class="row register-form" style="background-image:url(&quot;../view/img/winterNight.jpg&quot;);background-repeat:no-repeat;background-size:cover; height:100vh;">
            <div class="col-md-8 col-md-offset-2">
           

                <h1 style="color:rgb(234,237,239);">Register Form</h1>
                <form class="form-horizontal custom-form" method="post" action="register.php" style="color:rgb(255,253,253);background-color:rgb(42,42,42);">

                    <?php include('errors.php'); ?>
                    <div class="form-style-register" style="background:none;">
                        <label>FirstName</label>
                        <input type="text" name="firstName" value="<?php echo $firstName; ?>">
                    </div>
                    <div class="form-style-register" style="background:none;">
                        <label>lastName</label>
                        <input type="text" name="lastName" value="<?php echo $lastName; ?>">
                    </div>
                    <div class="form-style-register" style="background:none;">
                        <label>Username</label>
                        <input type="text" name="username" value="<?php echo $username; ?>">
                    </div>
                    <div class="form-style-register" style="background:none;">
                        <label>Email</label>
                        <input type="email" name="email" value="<?php echo $email; ?>">
                    </div>
                    <div class="form-style-register" style="background:none;">
                        <label>Password</label>
                        <input type="password" name="password_1">
                    </div>
                    <div class="form-style-register" style="background:none;">
                        <label>Confirm password</label>
                        <input type="password" name="password_2">
                    </div>
                    <div class="btn-style-register form-style-register" style="background:none;">
                        <button type="submit" class="btn" name="reg_user">Register</button>
                    </div>
                    <p>
                        Already a member? <a href="login.php">Sign in</a>
                    </p>
                </form>
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
    <script src="../controller/js/Dynamically-Queue-Videos.js"></script>
    <script src="../controller/js/register.js"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
</body>

</html>
