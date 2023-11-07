<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <link href="./assets/favicon.ico" rel="icon">
    <title>my hobby.</title>
    <link href="style.css" rel="stylesheet">
</head>

<body class="">
    <!-- Add your content of header -->
    <header>
        <nav class="navbar-default">
            <div class="collapse navbar-collapse" id="navbar-collapse">
                <ul class="nav navbar-nav ">
                    <li><a href="{{ url('/') }}" title="">01 : Home</a></li>
                    <li><a href="{{ url('/about') }}" title="">02 : About me</a></li>
                    <li><a href="{{ url('/hobby') }}" title="">03 : Hobby</a></li>
                    <li><a href="{{ url('/contact') }}" title="">04 : Contact</a></li>
                    <li><a href="{{ url('/gallery') }}" title="">05 : Gallery</a></li>
                </ul>
            </div>
        </nav>
    </header>

    <div class="section-container">
        <div class="container">
            <div class="row">

                <div class="col-sm-8 col-sm-offset-2 section-container-spacer">
                    <div class="text-center">
                        <h1 class="h2">03 : Hobby</h1>
                        <p><b>photography[fuh-tog-ruh-fee]</b> ; the process or art of producing images of objects on
                            sensitized
                            surfaces by the chemical action of light or of other forms of radiant energy, as x-rays,
                            gamma rays, or
                            cosmic rays. I'd like to taking photos of something that attract me to enshrine it</p>
                        <br>
                        <h1 class="h2">My Photograph</h1>
                    </div>
                </div>

                <div class="col-md-12">

                    <div id="myCarousel" class="carousel slide swiper">
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                          <div class="carousel item active swiper-wrapper">
                            <div class="row swiper-slide">
                              <!--/row-->
                              <div class="col-sm-4">
                                <a href="{{ url('/the-float') }}" title="" class="black-image-project-hover">
                                  <img src="./assets/images/photo1.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="card-container card-container-lg">
                                  <h4>001/006</h4>
                                  <h3>The Float</h3>
                                  <p>Capturing the world from beneath the iconic Marina Bay Sands Infinity Pool. A mesmerizing view that defies gravity.</p>
                                  <a href="{{ url('/the-float') }}" title="" class="btn btn-default">Discover</a>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <a href="{{ url('/rush-hour') }}" title="" class="black-image-project-hover">
                                  <img src="./assets/images/photo2.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="card-container card-container-lg">
                                  <h4>002/006</h4>
                                  <h3>Rush Hour</h3>
                                  <p>Savoring serenity amidst the hustle and bustle of Surabaya's famous mall during rush hour.</p>
                                  <a href="{{ url('/rush-hour') }}" title="" class="btn btn-default">Discover</a>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <a href="{{ url('/night-lights') }}" title="" class="black-image-project-hover">
                                  <img src="./assets/images/photo3.jpg" alt="" class="img-responsive">
                                </a>
                                <div class="card-container card-container-lg">
                                  <h4>003/006</h4>
                                  <h3>Night Lights</h3>
                                  <p>A mesmerizing view of the cityscape, like a sea of stars, from high above the tranquil hills.</p>
                                  <a href="{{ url('/night-lights') }}" title="" class="btn btn-default">Discover</a>
                                </div>
                              </div>
                            <!--/row-->
                            </div>
                          </div>
                          <!--/item-->
                          <div class="item">
                            <div class="row">
                              <div class="col-sm-4">
                                <a href="{{ url('/cat') }}" class="black-image-project-hover">
                                  <img src="./assets/images/photo4.jpg" alt="Image" class="img-responsive">
                                </a>
                                <div class="card-container">
                                  <h4>004/006</h4>
                                  <h3>Cat</h3>
                                  <p>Meet the newest 'IT' expert in our department - our fluffy white feline friend.</p>
                                  <a href="{{ url('/cat') }}" class="btn btn-default">Discover</a>
                                </div>
                              </div>
                              <div class="col-sm-4">
                                <a href="{{ url('/traffic') }}" class="black-image-project-hover">
                                  <img src="./assets/images/photo5.jpg" alt="Image" class="img-responsive">
                                </a>
                                <div class="card-container">
                                  <h4>005/006</h4>
                                  <h3>Traffic</h3>
                                  <p>The crisscrossing streams of vehicles, breathing metropolis, paint a fascinating tapestry of motion and life.</p>
                                  <a href="{{ url('/traffic') }}" class="btn btn-default">Discover</a>
                                </div>
                              </div>

                              <div class="col-sm-4">
                                <a href="{{ url('/birdie') }}" class="black-image-project-hover">
                                  <img src="./assets/images/photo6.jpg" alt="Image" class="img-responsive">
                                </a>
                                <div class="card-container">
                                  <h4>006/006</h4>
                                  <h3>Birdie</h3>
                                  <p>Amidst the hustle and bustle of the concrete jungle, a solitary bird finds its own path.</p>
                                  <a href="{{ url('/birdie') }}" class="btn btn-default">Discover</a>
                                </div>
                              </div>

                            </div>
                            <!--/row-->
                          </div>

                          <!--/item-->
                        </div>
                        <!--/carousel-inner-->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">&lt;</a>
                        <a class="right carousel-control" href="#myCarousel" data-slide="next">&gt;</a>
                      </div>
                    <!--/myCarousel-->
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

    <!-- import carousel javascript -->
    <script type="text/javascript" src="{{asset('js/carousel.js')}}"></script>
</body>

</body>

</html>
