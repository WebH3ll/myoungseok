
<?php
    session_start();
    if(!isset($_SESSION['user_id'])){
        echo "<script>alert('You Have to Login');</script>";
        echo "<script>location.replace('/index.php')</script>";
      }  
?>
<script type="text/javascript" src="https://code.jquery.com/jquery-1.12.4.min.js"></script>
<!DOCTYPE HTML>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" />
  <title>Tetris JS</title>
  <link rel="stylesheet" href="css/styles.css">

  <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/icon/144.png">
  <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/icon/114.png">
  <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/icon/72.png">
  <link rel="apple-touch-icon-precomposed" href="images/icon/57.png">
  <link rel="shortcut icon" href="../../images/favicon.png" />
</head>
<body>
  <div id="page">
    <div id="page_home" class="page">
      <h1>Tetris JS</h1>
      <div class="touch_controls">
        <p>Swipe <strong>anywhere</strong> on the screen to play</p>
        <p>Tap to rotate</p>
        <p>Swipe down to drop</p>
      </div>
      <a class="button" href="#_" id="bt_new_game">New game</a>
      <div class="about">
        <h2>About Tetris JS</h2>
        <p>This is a JS / HTML5 experiment using <a target="_blank" href="http://kineticjs.com/">KineticJS</a></p>
      </div>
    </div>
    <div id="page_game" class="page">
      <div id="game_col">
        <div id="game_zone"></div>
        <div class="messages_wrapper">
          <div id="messages"></div>
        </div>
        <div id="overlay"></div>
      </div>
      <div id="infos">
        <div id="next_zone"></div>
        <a class="button" href="#_" id="bt_pause">Pause</a>
        <div class="best_wrapper">
          Best: <span id="best_zone"></span>
        </div>
        <div id="score_zone"></div>
        <div class="lines_wrapper">
          Lines: <span id="lines_zone"></span>
        </div>
      </div>
    </div>
  </div> <!-- /#page -->

  <div id="msg_portrait">
    Please rotate your device to portrait mode
  </div>
  <!--[if lt IE 9]>
    <div id="msg_old_browser">
      Sorry, your browser doesn't support HTML5 Canvas.
      <br>Please update your browser.
    </div>
  <![endif]-->

  <script type="text/javascript" src="js/kinetic-v4.6.0.min.js"></script>
  <script type="text/javascript" src="js/tetris.js"></script

</body>
</html>