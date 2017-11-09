<?php 
	session_start(); 

	if (!isset($_SESSION['username'])) {
		$_SESSION['msg'] = "You must log in first";
		header('location: main.php');
	}

	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header("location: main.php");
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
    <link rel="stylesheet" href="../view/css/aboutStyles.css">
    <link rel="stylesheet" href="../view/css/meetTeamStyles.css">
    <link rel="stylesheet" href="../view/css/Navigation-Clean1.css">
    <link rel="stylesheet" href="../view/css/Navigation-with-Button1.css">
    <link rel="stylesheet" href="../view/css/Pretty-Registration-Form.css">
    <link rel="stylesheet" href="../view/css/dashboard.css">
    <link rel="stylesheet" href="../view/css/styles.css">
</head>

<body>




    <nav class="navbar navbar-default navigation-login" id="LoginNav">
        <div class="container">
            <div class="navbar-header"><a id="smartVidLogo" class="navbar-brand navbar-link" >SmartVid </a>
                <button class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navcol-1"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span></button>
            </div>
            <div class="collapse navbar-collapse" id="navcol-1">
                <ul class="nav navbar-nav">
                    <li role="presentation"><a id="aboutBtn" role="button">About </a></li>
                </ul>
                <p class="navbar-text">

                    <?php  if (isset($_SESSION['username'])) : ?>
                    <p class ="navbar-text">Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
    
                <p class="navbar-text navbar-right actions"><a class="navbar-link login" href="index.php?logout='1'">Logout </a> <a class="btn btn-primary action-button" role="button" href="index.php" style="padding:7px;">Home </a></p>
                <?php endif ?>
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
                    <a><img src="../view/img/chemistry.jpg" id="classIcon1" role="button" style="margin-top:10px;margin-right:10px;margin-bottom:10px;margin-left:10px;height:180px;"></a>
                    <a><img src="../view/img/English.jpg" style="margin-top:10px;margin-right:10px;margin-bottom:10px;margin-left:10px;width:180px;height:180px;"></a>
                    <a><img src="../view/img/Math.png" style="margin-top:10px;margin-right:10px;margin-bottom:10px;margin-left:10px;"></a>
                    <a><img src="../view/img/history.gif" style="margin-top:10px;margin-right:10px;margin-bottom:10px;margin-left:10px;"></a>
                </div>
            </div>
            <div id="videoListPanel" class="panel panel-default" style="display:none;">
                    <div class="panel-heading">
                        <h3 class="panel-title" style="font-size:40px;">Chemistry 2150 - Section 03</h3>
                    </div>
                    <div class="panel-body"></div>
                    <div class="row">
                        <div class="col-md-12">
                            <h3>Uploaded Video:</h3><a id="videoLink" role="button" style="font-size:20px;">Link to the video.</a></div>
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
                    <h2 class="text-primary" id="features2"><strong>Top Student Features</strong> </h2></div>
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
   
   <div id="meetTeamPage" style="display:none;">
       <h1 id="teamHead"style="text-align:center;"><strong>Meet the Brogrammers</strong></h1>
    <p class="text-center" id="p1" style="color:rgb(225,229,231);">Meet the hard-working "Bros" that brought you SmartVid and the doc with the vision!</p>
    <div class="team-boxed" style="background-color:rgba(238,244,247,0);">
        <div class="container" style="width:1011px;">
            <div class="row people" id="bros" style="margin:-9px;width:1002px;">
                <div id="steveHead" class="col-md-4 col-sm-6 item">
                    <div id="steven" class="box"><img class="img-circle" src="../view/img/steven.jpg" style="height:160px;width:160px;">
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
    <div class="container-fluid" id="videoQueue" style="background-image:url(&quot;../view/img/ocean.jpg&quot;);display:none;background-size:cover;background-repeat:no-repeat;">
            <h1>View Videos</h1>
            <div class="row">
                <div class="col-lg-6 col-md-7 col-sm-8">
                    <div id="video-placeholder"><img class="img-responsive" src="../view/img/video_place_holder.jpg"></div>
                    <div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-7 controls"><i class="material-icons" id="prev">skip_previous</i><i class="material-icons" id="pause">pause</i><i class="material-icons" id="play">play_arrow</i><i class="material-icons" id="next">skip_next</i><i class="material-icons" id="mute-toggle">volume_up</i>
                            <input type="range" min="0" max="100" step="1" id="volume-input" class="dqv-range vol">
                            <div>
                                <div class="dqv-range dur"><span id="current-time">0:00</span><span> / </span><span id="duration">0:00</span></div>
                            </div>
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-5 controls">
                            <input type="range" value="0" id="progress-bar" class="dqv-range prog">
                        </div>
                        <div class="col-md-12">
                            <select class="input-sm hidden" id="speed">
                            <option value="0.25">0.25</option>
                            <option value="0.5">0.5</option>
                            <option value="1" selected="">1</option>
                            <option value="1.5">1.5</option>
                            <option value="2">2</option>
                        </select>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2 col-md-3 col-sm-4" style="padding-right:0px;padding-left:0px;">
                    <div class="row" style="margin-left:15px;margin-right:15px;">
                        <div class="col-lg-12 col-md-10 col-sm-10 vids"><img class="img-responsive thumbnail" src="../view/img/video_place_holder.jpg" data-video-id="Xa0Q0J5tOP0"><img class="img-responsive thumbnail" src="../view/img/cat_video_1.jpg" data-video-id="h14wr4pXZFk"><img class="img-responsive thumbnail" src="../view/img/cat_video_2.jpg" data-video-id="KkFnm-7jzOA"><img class="img-responsive thumbnail" src="../view/img/cat_video_3.jpg" data-video-id="Ph77yOQFihc"></div>
                    </div>
                </div>
            </div>
            <h2>Video Title</h2>
            <p style="margin-right:20px;margin-left:20px;max-width:600px;">Information about the video. </p>
        </div>
		
		</div>
		
		
    <footer>
        <div class="social"></div>
        <ul class="list-inline">
            <li><a href="#">Home</a></li>
            <li><a id="aboutFooterBtn" role="button">About</a></li>
            <li><a href="#">Terms & Services</a></li>
            <li><a href="#">Privacy Policy</a></li>
        </ul>
        <p class="copyright">Brogrammers &copy; 2017</p>
    </footer>
    <script src="../controller/js/jquery.min.js"></script>
    <script src="../controller/bootstrap/js/bootstrap.min.js"></script>
    <script src="../controller/js/dynamicDashboard.js"></script>
    <script src="../controller/js/masterDynamic.js"></script>
    <script src="../controller/js/masterDynamic2.js"></script>
    <script src="../controller/js/Dynamically-Queue-Videos.js"></script>
    <script src="../controller/js/register.js"></script>
	<script src="../controller/js/youTubePlayer.js"></script>
    <script src="https://www.youtube.com/iframe_api"></script>

</body>

</html>
