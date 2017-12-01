<!--
SmartVid
Main dynamic webpage (Logged off version)
Authors: Steven Biedenbach, Sagar Hansalia, Alex McWhorter, Caleb Gordon
Created: October 3, 2017
-->

<!---DB Connection --->
<?php include('server.php') ?>


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
    <link rel="stylesheet" href="../view/css/aboutStyles.css">
    <link rel="stylesheet" href="../view/css/helpcss.css">
    <link rel="stylesheet" href="../view/css/meetTeamStyles.css">
    <link rel="stylesheet" href="../view/css/Team-Boxed.css">
    <link rel="stylesheet" href="../view/css/Team-Grid.css">
    <link rel="stylesheet" href="../view/css/Team-with-rotating-cards.css">
    <link rel="stylesheet" href="../view/fonts/font-awesome.min.css">
    
</head>

<body>
<!--
Navigation bar:
-clickable SmartVid logo (Links to home page)
-link to about page
-button link to login page
-button link to sign up page   
-->
    <span id="mainheading">
        <nav class="navbar navbar-default navigation-login" id="LoginNav">
            <div class="container">
                <div class="navbar-header"><a class="navbar-brand navbar-link" href="main.php">SmartVid </a>
                    <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
                </div>
                <div class="collapse navbar-collapse" id="navcol-1">
                    <ul class="nav navbar-nav">
                    <li><a id="aboutBtn" role="button">About</a></li>
                    </ul>
                    <p class="navbar-text navbar-right actions"><a id="loginBtn" class="navbar-link login" role="button">Log In</a> <a class="btn btn-primary action-button" id="signupBtn" role="button">Sign Up</a></p>
                </div>
            </div>
        </nav>
    </span>
    
<!--
Home page:
-Jumbotron with button link to sign up page
-->
	
	<div id="homePage">
		
		<div id="mainHeading">
			<div id="jumbo" class="jumbotron">
				<h1>Make Learning Great!</h1>
				<p>Upload videos, Create classes, Learn!</p>
				<p><a id="signupNowBtn" class="btn btn-default" role="button">Sign Up Now!</a></p>
			</div>
		</div>
			
	</div>
   
<!--
About page:
-information about project
-project features
-button link to 'meet the team' page
-->
   
   <div id="aboutPage" style="display:none;">
      <div id="something" style="height:174px;">
        <h1 class="text-primary" id="title">What is SmartVid?</h1>
        <p class="text" id="overview">SmartVid is an educational platform for instructors to upload video content to help their students learn material at their own pace. Click the button below to meet the Brogrammers or check out some of our awesome features. Thank you for choosing
            SmartVid to help making learning great again!</p>
      </div>
    <div>
        <div class="container">
            <div class="row">
                <div id="aboutBanner" class="col-md-12"><a class="btn btn-default btn-lg" role="button" id="meetTheTeam">Meet the Team</a>
                    <h2 class="text-primary" id="features"><strong>Top Professor Features</strong> </h2></div>
            </div>
            <div class="row">
                <div id="uploadVideoInfo" class="col-lg-4 col-md-4" style="height:156px;">
                    <h3 style="padding:-15px;padding-top:-18px;margin:3px;">Upload Videos</h3>
                    <p id="uploadDescription">Professors can upload as many video lessons as they wish for their students to learn.</p>
                </div>
                <div class="col-lg-4 col-md-4" id="account">
                    <h3 style="padding:-15px;padding-top:-18px;margin:3px;">Protected Account</h3>
                    <p>Students and professors both have password protected accounts, But as a professor, no one else will be able to manage your class sections</p>
                </div>
                <div class="col-lg-4 col-md-4" id="gradeBook">
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
                    <h2 class="text-primary" id="features"><strong>Top Student Features</strong> </h2></div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4">
                    <h3 style="padding:-15px;padding-top:-18px;margin:3px;">View Videos</h3>
                    <p>Students can watch uploaded professor content at their own pace to ensure that they are understanding the material </p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h3 style="padding:-15px;padding-top:-18px;margin:3px;">Rewatch Videos</h3>
                    <p>The beauty of video lessons, is you can watch them as many time as you like until you get it!</p>
                </div>
                <div class="col-lg-4 col-md-4">
                    <h3 style="padding:-15px;padding-top:-18px;margin:3px;">Quizzes </h3>
                    <p>Students can take comprensive quizzes following their video to check for understanding before moving on to the next one.</p>
                </div>
            </div>
        </div>
    </div>
   </div>
   
   <!--
   Meet team page:
   -Information about each team member, including client
   -team member roles
   -->
   
   <div id="meetTeamPage" style="display:none;">
       <h1 id="teamHead"style="text-align:center;"><strong>Meet the Brogrammers</strong></h1>
    <p class="text-center" id="p1" style="color:rgb(225,229,231);">Meet the hard-working "Bros" that brought you SmartVid and the doc with the vision!</p>
    <div class="team-boxed" style="background-color:rgba(238,244,247,0);">
        <div class="container" style="width:1011px;">
            <div class="row people" id="bros" style="margin:-9px;width:1002px;">
                <div id="steveHead" class="col-md-4 col-sm-6 item">
                    <div id="steve" class="box"><img class="img-circle" src="../view/img/steven.jpg" style="height:160px;width:160px;">
                        <h3 class="name" style="color:#f7f0f0;">Steven Biedenbach</h3>
                        <p class="title">Lead UI designer</p>
                        <p class="description" style="color:rgb(236,239,241);">Steven is a strong front-end developer that strived for simplicity in creating the professor dashboard.</p>
                    </div>
                </div>
                <div id="sagarHead" class="col-md-4 col-sm-6 item">
                    <div id="sagar" class="box"><img class="img-circle" src="../view/img/Sagar.jpg" id="sagarPic">
                        <h3 class="name" style="color:#f7f0f0;">Sagar Hansalia</h3>
                        <p class="title">Data modeler</p>
                        <p class="description" style="color:rgb(248,250,251);">The man in charge of creating and maintaining SmartVid's database and account infrastructure..</p>
                    </div>
                </div>
                <div id="calHead" class="col-md-4 col-sm-6 item">
                    <div id="cal" class="box"><img class="img-circle" src="../view/img/Cal.jpg" style="height:159px;width:160px;">
                        <h3 class="name" style="color:#f7f0f0;">Cal Gordon</h3>
                        <p class="title">code architect</p>
                        <p class="description" style="color:rgb(248,249,249);">Cal is the back-end developer that connects the database to website to make using SmartVId a seamless process. </p>
                    </div>
                </div>
            </div>
            <div class="row people" id="bros" style="margin:-4px;">
                <div id="alexHead" class="col-md-4 col-sm-6 item">
                    <div id="alex" class="box"><img class="img-circle" src="../view/img/alexpic.jpg" style="height:160px;width:160px;">
                        <h3 class="name" style="color:#f7f0f0;">Alex McWhorter</h3>
                        <p class="title">Team manager/ doc. lead</p>
                        <p class="description" style="padding-right:0px;color:rgb(248,252,255);">As manager, Alex has had a hand in all areas of the project as well as communicating directly with client to make sure requirements are being met.</p>
                    </div>
                </div>
                <div id="fencilHead" class="col-md-4 col-sm-6 item">
                    <div id="fencil" class="box"><img class="img-circle" src="../view/img/Dr_Fen.jpg" style="height:160px;width:160px;">
                        <h3 class="name" style="color:#f7f0f0;">Dr. Fencil Shuler</h3>
                        <p class="title">client </p>
                        <p class="description" style="color:rgb(248,252,254);">Chemistry professor at GGC that had the vision of SmartVid. Dr. Fen wanted a website to track his student's learning habits. </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
   </div>
   
   <!--
   Login page:
   -Login form with username and password
   -link to sign up page for new members
   -form submission takes user to dashboard page on index.php
   -->
	
	<div id="loginPage" style="display:none;">
			
		<div class="login-dark">
			<form method="post" action="main.php">
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
				Not yet a member? <a role="button" id="signupBtn">Sign up</a>
				</p>
			</form>
		</div>
		
	</div>
	
   <!--
   Register page:
   -Registration form
   -database is connected and accepts multiple parameters
   -upon submitting form, user account is created
   -errors included when incorrect or missing information is entered
   -->
   
        <div id="registerForm" class="row register-form" style="display:none;">
            <div class="col-md-8 col-md-offset-2">
                <form class="form-horizontal custom-form" method="post" action="main.php" style="color:rgb(255,253,253);background-color:rgb(42,42,42);">
                    <h1 style="color:rgb(234,237,239);">Register Form</h1>

                    <div class="form-group" style="background:none;">

                        <div class="col-sm-4 label-column">
                            <label class="control-label" style="color:rgb(242,241,241);">First Name</label>
                        </div>
                        <div class="col-sm-6 input-column">

                            <input id="firstName" class="form-control" type="text" name="firstName" value="<?php echo $firstName; ?>">
                        </div>
                    </div>

                    <div class="form-group" style="background:none;">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" style="color:rgb(242,241,241);">Last Name</label>
                        </div>
                        <div class="col-sm-6 input-column">

                            <input id="lastName" class="form-control" type="text"name="lastName" value="<?php echo $lastName; ?>">

                        </div>
                    </div>

                    <div class="form-group" style="background:none;">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" style="color:rgb(242,241,241);">Username</label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="text" name="username" value="<?php echo $username; ?>">
                        </div>
                    </div>

                    <div class="form-group" style="background:none;">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" style="color:rgb(242,241,241);">E-Mail Address</label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="email" name="email" value="<?php echo $email; ?>">
                        </div>
                    </div>

                    <div class="form-group" style="background:none;">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" style="color:rgb(242,241,241);">Password</label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="password" name="password_1">
                        </div>
                    </div>

                    <div class="form-group" style="background:none;">
                        <div class="col-sm-4 label-column">
                            <label class="control-label" style="color:rgb(242,241,241);">Confirm Password</label>
                        </div>
                        <div class="col-sm-6 input-column">
                            <input class="form-control" type="password" name="password_2">
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
                    <button type="submit" class="btn btn-default submit-button" type="button" name="reg_user">Submit</button>
                </form>
            </div>
        </div>
        
<!--
Help Page:
-helps user with registration, logging in, and site navigation
-->
        
    <div id="helpPage" style="display:none">
        <h1 id="needHelpTitle">Need Help?</h1>
        <div>
            <h1 id="smartvidHeading">Signing Up with SmartVid</h1>
            <p id="paragraph">To register with SmartVid, you must create an account by clicking either "Sign Up" button on the home page!</p><img src="../view/img/signUp.jpg" id="pic"></div>
        <div>
            <h1 id="smartvidHeading">Registration Process</h1>
            <p id="paragraph">This is where the "Bros" at SmartVid need some information about you so you can get started using SmartVid!</p><img src="../view/img/registerForm.jpg" id="pic"></div>
        <div>
            <h1 id="smartvidHeading">Logging into SmartVid</h1>
            <p id="paragraph">To login to SmartVid, you must have already completed the registration process above, then login with the credentials you created.</p><img src="../view/img/logIn.jpg" id="pic"></div>
        <div>
            <h1 id="smartvidHeading">SmartVid Dashboard</h1>
            <p id="paragraph">If you have registered or signed in correctly to SmartVid, you should be taken to the dashboard where you will see your username at the top of the screen!</p><img src="../view/img/dashboard.jpg" id="pic"></div>
    </div>

<!--
Footer:
-link to homepage
-link to about page
-link to help page
-inoperable link to privacy policy
-coppyright and company information
-->
    
    <span id="footerMain" class="footer-main">
        <footer>
            <div class="social"></div>
            <ul class="list-inline">
                <li><a href="main.php">Home</a></li>
            <li><a id="aboutFooterBtn" role="button">About</a></li>
            <li><a id="helpFooterBtn" role="button">Help</a></li>
            <li><a href="#">Privacy Policy</a></li>
            </ul>
            <p class="copyright">Brogrammers &copy; 2017</p>
        </footer>
    </span>
	
    <script src="../controller/js/jquery.min.js"></script>
    <script src="../controller/bootstrap/js/bootstrap.min.js"></script>
    <script src="../controller/js/Dynamically-Queue-Videos.js"></script>
    <script src="../controller/js/masterDynamic.js"></script>
    <script src="../controller/js/masterDynamic2.js"></script>
	<script src="../controller/js/register.js"></script>
    <script src="https://www.youtube.com/iframe_api"></script>
</body>

</html>