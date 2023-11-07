<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="IE=edge" http-equiv="X-UA-Compatible">
  <meta content="width=device-width,initial-scale=1" name="viewport">
  <link href="./assets/favicon.ico" rel="icon">

  <title>traffic.</title>

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
            <li><a href="{{ url('/cat') }}" title="">004</a></li>
            <li><a href="{{ url('/traffic') }}" title="" class="active">005</a></li>
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
              <h1 class="h2">005 : Traffic</h1>
            </div>
            <p>In the heart of this bustling city-state, the roads pulse with life as vehicles of all shapes and sizes elegantly waltz through the meticulously planned thoroughfares. Singapore's traffic isn't just a daily routine; it's a beautifully choreographed dance of urban mobility.</p>

            <blockquote>
              <p>"Your time is limited, don't waste it living someone else's life."</p>
              <small class="pull-right">Steve Jobs</small>
            </blockquote>
          </div>
        </div>


        <div class="col-xs-12 black-image-project-hover">
          <img src="./assets/images/photo5.jpg" class="img-responsive" alt="">
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
