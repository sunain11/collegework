<?php
 session_start();
if(isset($_SESSION['valid'])=='true')
   {
     
   }
else
   {
     header("Location: http://192.168.88.102/collegework/sitepages/data/failsub.html");
     die();
   }
?>
<!DOCTYPE html>
<html>
<head>
  <title>IRD Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  <style>
  body {
      position: relative; 
  }
  @media (min-width: 768px) {
  .navbar-nav.navbar-center {
    position: absolute;
    left: 15%;
    transform: translatex(-5%);
  }
  }
  .affix {
      top:0;
      z-index: 9999 !important;
  }
  .navbar {
      margin-bottom: 0px;
  }
  .navbar
  {
  width:100%;
  z-index:10;
  border-radius:0;
  border-color:transparent;
  }
  .navbar-default .navbar-nav > li > a
  {
  
  }
  .affix ~ .container-fluid {
     position: relative;
     top: 50px;
  }
  </style>
  <script>
      function disableClick(){
        document.onclick=function(event){
          if (event.button == 2) {
            alert('Right Click Message');
            return false;
          }
        }
      }
   </script>
</head>
<body data-spy="scroll" onLoad="disableClick()" oncontextmenu="return false" data-target=".navbar" data-offset="50">

<div class="container-fluid" style="color:#fff;">
<!-- dimensions 576*135 -->
<center><img class="img-responsive" src="http://192.168.88.102/collegework/logo2.png" alt="Chania"></center>
</div>

<nav class="navbar navbar-inverse" data-spy="affix" data-offset-top="197">
  <div class="container-fluid">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>                        
      </button> 
    </div>
    <div>
      <div class="collapse navbar-collapse" id="myNavbar">
        <ul class="nav navbar-nav navbar-center">
          <li><a href="http://192.168.88.102/collegework/home.html" ><span class="glyphicon glyphicon-home"></span>&nbsp&nbsp &nbsp HOME &nbsp&nbsp</a></li>
          <li><a href="http://192.168.88.102/collegework/sitepages/about.html">(<span class="glyphicon glyphicon-font"></span>)&nbsp ABOUT &nbsp</a></li>
          <li class="dropdown">
           <a class="dropdown-toggle" data-toggle="dropdown" href="#"><span class="glyphicon glyphicon-folder-open"></span> &nbsp &nbspEVENT&nbsp&nbsp
            <span class="caret"></span></a>
             <ul class="dropdown-menu">
               <li><a href="http://192.168.43.157/collegework/sitepages/event/conference.html">CONFERENCE</a></li>
               <li><a href="#">WORKSHOP</a></li>
               <li><a href="#">FDP</a></li>
               <li><a href="#">SEMINAR</a></li>
             </ul>
          </li>
          <li><a href="http://192.168.43.157/collegework/sitepages/journals.html" ><span class="glyphicon glyphicon-edit"></span>&nbsp &nbsp JOURNALS &nbsp&nbsp    </a></li>
           <li><a href="http://192.168.43.157/collegework/sitepages/consultancy.html"><span class="glyphicon glyphicon-road"></span>&nbsp &nbsp CONSULTANCY &nbsp&nbsp</a></li>
          <li><a href="http://192.168.43.157/collegework/sitepages/membership.html" > <span class="glyphicon glyphicon-user"></span>&nbsp &nbsp&nbspMEMBERSHIP &nbsp&nbsp</a></li>
          <li><a href="http://192.168.43.157/collegework/sitepages/contact.html" ><span class="glyphicon glyphicon-log-in"></span>&nbsp&nbsp &nbspCONTACT US&nbsp&nbsp</a></li>
        </ul>
      </div>
    </div>
  </div>
</nav>    
<!-- carousel -->
<div class="jumbotron"> 
 <div class="container">
 <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <!--
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
    <li data-target="#myCarousel" data-slide-to="3"></li>
    <li data-target="#myCarousel" data-slide-to="4"></li>
  </ol>
  -->
  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="http://192.168.88.102/collegework/coverimages/1.png" alt="Chania">
      <div class="carousel-caption">
        <p>LA is always so much fun!</p>
      </div>
    </div>

    <div class="item">
      <img src="http://192.168.88.102/collegework/coverimages/2.png" alt="Chicago">
      <div class="carousel-caption">
        <p>Thank you, Chicago!</p>
      </div>
    </div>

    <div class="item">
      <img src="http://192.168.88.102/collegework/coverimages/3.png" alt="New York">
      <div class="carousel-caption">
        <p>We love the Big Apple!</p>
      </div>
    </div>
   <div class="item">
      <img src="http://192.168.43.157/collegework/coverimages/4.png" alt="New York">
      <div class="carousel-caption">
        <p>We love the Big Apple!</p>
      </div>
    </div>
    <div class="item">
      <img src="http://192.168.88.102/collegework/coverimages/5.png" alt="New York">
      <div class="carousel-caption">
        <p>We love the Big Apple!</p>
      </div>
    </div>
  </div>
  <!-- Left and right controls -->
  <!--
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
  -->
</div>
</div>
</div>
<!--carousel end -->
<div class="container-fluid">
    <div class="row">
    <div class="col-sm-9 col-md-6 col-lg-2">
      <div class="panel panel-info">
       <div class="panel-heading">MORE ABOUT IRD</div>
       <div class="panel-body">
          <i class="glyphicon glyphicon-chevron-right"></i><a href="#">&nbsp&nbspgallery</a></br>
          <i class="glyphicon glyphicon-chevron-right"></i><a href="#">&nbsp&nbspJoin Us</a></br>
          <i class="glyphicon glyphicon-chevron-right"></i><a href="#">&nbsp&nbspJournal Submission</a></br>
       </div>
      </div>
      <div class="panel panel-info">
       <div class="panel-heading">UPCOMING CONFERENCE</div>
       <div class="panel-body">
        <marquee behavior="scroll" direction="up" scrollamount="1" onmouseover="stop()" onmouseout="start()" height="90">
          <p align="justify"><font color="#FF00FF">
           Springer Int. Conference-ICCISC-2017, Dec 20-21<br /></br>
           All accepted and registered papers will be considered for the conference proceedings published by Springer� Advances in Intelligent Systems and Computing (AISC)(Indexed by EI and SCOPUS).</<br /></font></p>
        </marquee>
       </div>
      </div>
      <!-- <div class="panel panel-info">
      <div class="panel-heading">IMPORTANT DOWNLOAD</div>
      <div class="panel-body">
        <a href="#">
          <img src="click2.png" class="img-responsive" style ="width:120%">
        </a>
      </div>
    </div> -->
    </div>   
    <div class="col-sm-9 col-md-6 col-lg-8">
     <div class="panel panel-info">
       <div class="panel-heading">Admin Logged in...</div>
       <div class="panel-body">
        <center> <a href="http://192.168.88.102/collegework/sitepages/data/admin/loggedinsub.php" class="btn btn-info" role="button">Subscribed Emails</a>
         <a href="http://192.168.88.102/collegework/sitepages/data/admin/loggedinjournal.php" class="btn btn-info" role="button">Journal Submitted</a></center>
      </div>
     </div>
    </div>
    <div class="col-sm-9 col-md-6 col-lg-2">
    <div class="panel panel-info">
      <div class="panel-heading">NEWS/EVENTS</div>
      <div class="panel-body">
       <marquee behavior="scroll" direction="up" scrollamount="1" onmouseover="stop()" onmouseout="start()" height="90">
          <p align="justify"><font color="#FF00FF">
           Springer Int. Conference-ICCISC-2017, Dec 20-21<br /></br>
           All accepted and registered papers will be considered for the conference proceedings published by Springer� Advances in Intelligent Systems and Computing (AISC)(Indexed by EI and SCOPUS).</<br /></font></p>
        </marquee>
      </div>
    </div>
    <div class="panel panel-info">
      <div class="panel-heading">JOURNALS</div>
      <div class="panel-body">
       <img src="ijacect cover.jpg" alt="rotating" width="70%" height="50%" id="rotator">
        <script type="text/javascript">
        (function () {
        var rotator = document.getElementById('rotator'); // change to match image ID
        var imageDir = 'http://192.168.88.102/collegework/journalimages/';
        var delayInSeconds = 3;
        // set number of seconds delay
        // list image names
        var images = ['ijacect cover.jpg',
                      'ijacte cover.jpg', 
                      'ijeecs cover.jpg',
                      'ijaeee cover.jpg', 
                      'ijaece cover.jpg', 
                      'itsi cover.jpg', 
                      'ijtarme cover.jpg', 
                      'ijmer cover.jpg', 
                      'ijcsa cover.jpg', 
                      'apl cover.jpg'];
        var num = 0;
        var changeImage = function () {
            var len = images.length;
            rotator.src = imageDir + images[num++];
            if (num == len) {
                num = 0;
            }
        };
        setInterval(changeImage, delayInSeconds * 1000);
        })();
       </script>
     </div>
    </div>
Copyright &copy <a href="#"><b style="color:Blue;">IRD India</b></a></br>
Designed & Developed by <a href="#"><b style="color:Blue;">Sunain Mittal</b></a>
    </div>
  </div>
</div>

</body>
</html>