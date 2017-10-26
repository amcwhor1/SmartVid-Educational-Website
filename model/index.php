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
	
	<div style="display:none;"
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
		
		<div id="uploadPage">
		
		
	<h1 style="font-size: 250%">View Video Section</h1><br><br><br>
			 <!-- 1. The <iframe> (and video player) will replace this <div> tag. Continued in in youTubePlayer.js-->
    <div id="player"></div>
	
	<p><b><u>Video Credits</u></b><br>
	URL: <a href="https://www.youtube.com/watch?v=pQNwVZEJO1A">Click Here</a><br>
	CHANNEL: SoodTube<br>
	TITLE: idek<br>
	VIDEO ID: eECvifbYCfQ<br>
	PLAYLIST ID: PLLK8qlgyQf1W58x5meXSrB7CA_1uUpFkC<br>
	</p>
	
	<hr style="height:30px;">
	
	<h1 style="font-size: 250%">Create a Playlist Section</h1><br><br><br>
	
	<div id="login-container" class="pre-auth">This application requires access to your YouTube account.
      Please <a href="#" id="login-link">authorize</a> to continue.
    </div>
    <div id="buttons">
      <button id="playlist-button" disabled onclick="createPlaylist()" style="color: black;">Create a new Private Playlist</button>
      <br>
      <label>Current Playlist Id: <input id="playlist-id" value='' type="text"/></label>
      <br>
      <label>Video Id: <input id="video-id" value='eECvifbYCfQ' type="text"/></label><button onclick="addVideoToPlaylist()" style="color: black;">Add to current playlist</button>
    </div>
    <h3>Playlist: <span id="playlist-title"></span></h3>
    <p id="playlist-description"></p>
    <div id="playlist-container">
      <span id="status">No Videos</span>
    </div>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.2/jquery.min.js"></script>
    <script src="auth.js"></script>
    <script src="playlist_updates.js"></script>
    <script src="https://apis.google.com/js/client.js?onload=googleApiClientReady"></script>
	
  </body>
</html>
		
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
    <script src="../controller/js/masterDynamic.js"></script>
    <script src="../controller/js/Dynamically-Queue-Videos.js"></script>
    <script src="../controller/js/register.js"></script>
	<script src="../controller/js/youTubePlayer.js"></script>
    <script src="https://www.youtube.com/iframe_api"></script>

</body>

</html>
