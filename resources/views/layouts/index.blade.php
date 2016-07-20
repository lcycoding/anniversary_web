<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>
    To our 4th Anniversary
    </title>
    <style>
    body, html {
    height: 100%;
    margin: 0;
    font: 400 25px/1.8 "Lato", sans-serif;
    color: #777;
    }
    #section1{padding-top:5%;height:100%;}
    #section2{padding-top:5%;height:100%;}
    #section3{padding-top:5%;height:100%;}

    .bgimg-1, .bgimg-2, .bgimg-3 {
      position: relative;
      opacity: 0.5;
      background-attachment: fixed;
      background-position: center;
      background-repeat: no-repeat;
      background-size: cover;

    }

    .bgimg-1 {
      background-image: url("img/bg002.jpg");
      min-height: 100%;
    }

    .bgimg-2 {
      background-image: url("img/bg002.jpg");
      min-height: 60%;
    }

    .bgimg-3 {
      background-image: url("img/bg003.jpg");
      min-height: 70%;
    }

    .caption {
      position: absolute;
      left: 0;
      top: 50%;
      width: 100%;
      text-align: center;
      color: #000;
    }

    .caption span.border {
      background-color: #111;
      color: #fff;
      padding: 18px;
      font-size: 25px;
      letter-spacing: 10px;
    }

    h3 {
      letter-spacing: 5px;
      text-transform: uppercase;
      font: 20px "Lato", sans-serif;
      color: #111;
    }

    .carousel-inner > .item > img {
        margin: 0 auto;
    }

    </style>

    <!-- Bootstrap -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.2/html5shiv.js"></script>
      <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

  </head>
  <body data-spy="scroll" data-target=".navbar">
    <!--navigation bar-->
    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Anniversary Website</a>
        </div>
        <div>
          <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav">
              <li><a href="#section1">Memories</a></li>
              <li><a href="#section2">Videos</a></li>
              <li><a href="#section3">MarryMe</a></li>
            </ul>
          </div>
        </div>
      </div>
    </nav>

    <div class="bgimg-1">
      <div class="caption">
        <span class="border">僅獻給生命中最特別的妳</span>
      </div>
    </div>

    <!--section1 with parallax-->
    <div id="section1" class="container-fluid">
      <div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
        <h3 style="text-align:center;">We've been together for 4 years！</h3>
        <p style="text-align:center;">
          第四個年頭發生了好多事情，先來回顧一下吧！
        </p>
      </div>
      @yield('memories')

      <div id="myCarousel" class="carousel slide"  data-ride="carousel">
        <!-- Indicators -->
        <ol class="carousel-indicators">
          <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
          <li data-target="#myCarousel" data-slide-to="1"></li>
          <li data-target="#myCarousel" data-slide-to="2"></li>
          <li data-target="#myCarousel" data-slide-to="3"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
          <div class="item active">
            <img src="img/img001.jpg">
          </div>

          <div class="item">
            <img src="img/img002.jpg">
          </div>

          <div class="item">
            <img src="img/img003.jpg">
          </div>

          <div class="item">
            <img src="img/img004.jpg">
          </div>
        </div>

        <!-- Left and right controls -->
        <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
          <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
          <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
      </div>

      <!--add carousel here-->
    </div>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
  </body>
</html>
