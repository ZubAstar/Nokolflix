<?php
session_start();
error_reporting(0);
include('DBconnect.php');
?>
<html>
<head>
  <link href="https://vjs.zencdn.net/8.16.1/video-js.css" rel="stylesheet" />

  <!-- If you'd like to support IE8 (for Video.js versions prior to v7) -->
  <!-- <script src="https://vjs.zencdn.net/ie8/1.1.2/videojs-ie8.min.js"></script> -->
</head>

<body background="">
  
  <video
    id="my-video"
    class="video-js"
    controls
    preload="auto"
    width="1900"
    height="920"
    poster="MY_VIDEO_POSTER.jpg"
    data-setup="{}"
  >
  <source src="Trending Videos/t3.mp4" type="video/mp4" />
    <source src="MY_VIDEO.webm" type="video/webm" />
    <p class="vjs-no-js">
      To view this video please enable JavaScript, and consider upgrading to a
      web browser that
      <a href="https://videojs.com/html5-video-support/" target="_blank"
        >supports HTML5 video</a
      >
    </p>
  </video>
  

  <script src="https://vjs.zencdn.net/8.16.1/video.min.js"></>
</body>
</html>