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
                <p class="navbar-text navbar-right actions"><a class="navbar-link login" href="Main.php">Logout </a> <a class="btn btn-primary action-button" role="button" href="ProfDash.php" style="padding:7px;">Home </a></p>
            </div>
        </div>
    </nav>
    <div class="container-fluid" id="dqv" style="background-color:#3d34a7;">
        <h1>View Videos</h1>
        <div class="row">
            <div class="col-lg-6 col-md-7 col-sm-8">
                <div id="video-placeholder"><img class="img-responsive" src="view/img/video_place_holder.jpg"></div>
                <div class="row">
                    <div class="col-lg-6 col-md-6 col-sm-7 controls"><i class="material-icons" id="prev">skip_previous</i><i class="material-icons" id="pause">pause</i><i class="material-icons" id="play">play_arrow</i><i class="material-icons" id="next">skip_next</i><i class="material-icons" id="mute-toggle">volume_up</i>
                        <input
                        type="range" min="0" max="100" step="1" id="volume-input" class="dqv-range vol">
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
                    <div class="col-lg-12 col-md-10 col-sm-10 vids"><img class="img-responsive thumbnail" src="view/img/video_place_holder.jpg" data-video-id="Xa0Q0J5tOP0"><img class="img-responsive thumbnail" src="view/img/cat_video_1.jpg" data-video-id="h14wr4pXZFk"><img class="img-responsive thumbnail" src="view/img/cat_video_2.jpg"
                        data-video-id="KkFnm-7jzOA"><img class="img-responsive thumbnail" src="view/img/cat_video_3.jpg" data-video-id="Ph77yOQFihc"></div>
                </div>
            </div>
        </div>
        <h2>Video Title</h2>
        <p style="margin-right:20px;margin-left:20px;max-width:600px;">Information about the video. </p>
    </div>
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