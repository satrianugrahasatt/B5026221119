<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <link href="./assets/favicon.ico" rel="icon">
    <title>gallery.</title>
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
                        <h1 class="h2">05 : Gallery</h1>
                        <p><b>Stepping into the colorful tapestry of my life</b>, where every photograph is a
                            brushstroke on the canvas of my memories. Each picture tells a story, and my gallery is a
                            sanctuary of cherished moments, laughter, and adventures.</p>
                        <br>
                    </div>
                </div>

                <div class="col-md-12">

                    <div id="myCarousel" class="carousel slide projects-carousel">
                        <!-- Carousel items -->
                        <div class="carousel-inner">
                            <div class="item active">
                                <div class="row">
                                    <div class="col-sm-4 black-image-project-hover">
                                        <img src="./assets/images/gallery1.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-sm-4 black-image-project-hover">
                                        <img src="./assets/images/gallery2.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-sm-4 black-image-project-hover">
                                        <img src="./assets/images/gallery3.jpg" alt="" class="img-responsive">
                                    </div>
                                </div>
                                <!--/row-->
                            </div>
                            <!--/item-->
                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-4 black-image-project-hover">
                                        <img src="./assets/images/gallery4.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-sm-4 black-image-project-hover">
                                        <img src="./assets/images/gallery5.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-sm-4 black-image-project-hover">
                                        <img src="./assets/images/gallery6.jpg" alt="" class="img-responsive">
                                    </div>
                                </div>
                                <!--/row-->
                            </div>

                            <div class="item">
                                <div class="row">
                                    <div class="col-sm-4 black-image-project-hover">
                                        <img src="./assets/images/gallery7.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-sm-4 black-image-project-hover">
                                        <img src="./assets/images/gallery8.jpg" alt="" class="img-responsive">
                                    </div>
                                    <div class="col-sm-4 black-image-project-hover">
                                        <img src="./assets/images/gallery9.jpg" alt="" class="img-responsive">
                                    </div>
                                </div>
                                <!--/row-->
                            </div>

                            <!--/item-->
                        </div>
                        <!--/carousel-inner-->
                        <a class="left carousel-control" href="#myCarousel" data-slide="prev">‹</a>

                        <a class="right carousel-control" href="#myCarousel" data-slide="next">›</a>
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
                    <br>
                    <br>
                    <br>
                    <br>
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
