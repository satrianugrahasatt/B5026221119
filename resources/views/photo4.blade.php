<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <link href="./assets/favicon.ico" rel="icon">

  <title>cat.</title>

  <link href="style.css" rel="stylesheet">
</head>

<body class="">
  <header>
    <nav class="navbar  navbar-fixed-top navbar-default">
      <div class="collapse navbar-collapse" id="navbar-collapse">
        <ul class="nav navbar-nav ">
            <li><a href="{{url('/')}}" title="">01 : Home</a></li>
            <li><a href="{{url('/about')}}" title="">02 : About me</a></li>
            <li><a href="{{url('/hobby')}}" title="">03 : Hobby</a></li>
            <li><a href="{{url('/contact')}}" title="">04 : Contact</a></li>
            <li><a href="{{url('/gallery')}}" title="">05 : Gallery</a></li>
        </ul>

        <ul class="nav navbar-nav navbar-right navbar-small visible-md visible-lg">
            <li><a href="{{ url('/the-float') }}" title="">001</a></li>
            <li><a href="{{ url('/rush-hour') }}" title="">002</a></li>
            <li><a href="{{ url('/night-lights') }}" title="">003</a></li>
            <li><a href="{{ url('/cat') }}" title="" class="active">004</a></li>
            <li><a href="{{ url('/traffic') }}" title="">005</a></li>
            <li><a href="{{ url('/birdie') }}" title="">006</a></li>
        </ul>
      </div>
  </nav>
  </header>

  <div class="section-container">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <img src="./assets/images/work001-01.jpg" class="img-responsive" alt="">
          <div class="card-container">
            <div class="text-center">
              <h1 class="h2">004 : Cat</h1>
            </div>
            <p>Amid the chaos of everyday life, there's something truly enchanting about capturing a glimpse of my furry friend's world. The way those whiskers twitch, those eyes gleam with curiosity, and that graceful posture exudes an air of untamed elegance. </p>

            <blockquote>
              <p>"Cats are connoisseurs of comfort."</p>
              <small class="pull-right">James Herriot</small>
            </blockquote>
          </div>
        </div>


        <div class="col-xs-12 black-image-project-hover">
          <img src="./assets/images/photo4.jpg" class="img-responsive" alt="">
        </div>

      </div>
    </div>
  </div>


  <footer class="footer-container text-center">
    <div class="container">
      <div class="row">
        <div class="col-xs-12">
          <p>© SATRIA DWI NUGRAHA | 2023</p>
        </div>
      </div>
    </div>
  </footer>
</body>

</html>
