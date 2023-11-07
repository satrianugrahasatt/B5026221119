<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.6.4/dist/jquery.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"></script>
    <link href="./assets/favicon.ico" rel="icon">
    <title>
        <Satria>hello world!
    </title>
    <link href="{{ asset('style.css') }}" rel="stylesheet">
</head>

<body class="minimal">

    <!-- Add your content of header -->
    <header>
        <nav class="navbar-inverse" style="margin-top: 15px;">
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
    <!-- Add your site or app content here -->
    <div class="hero-full-container background-image-container white-text-container"
        style="background-image: url('./assets/images/bg1.jpg');margin-top: -15px;">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="hero-full-wrapper">
                        <div class="text-content">
                            <h1>Hello,<br>
                                <span id="typed-strings">
                                    <span>World!</span>
                                    <span>Information Systems!</span>
                                    <span>I'm Satria.</span>
                                </span>
                                <span id="typed"></span>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>

    <div class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="section-container-spacer text-center">
                    <h1 class="h2">02 : About me</h1>
                </div>
                <br>

                <div class="row">
                    <div class="col-md-10 col-md-offset-1">
                        <div class="row">
                            <div class="col-xs-12 col-md-6">
                                <h3>Get to know me!</h3>
                                <p>Hello. My name is Satria Dwi Nugraha. I come from the city of Mojokerto. I am the
                                    youngest of 2 brothers. I am a person who likes to explore what is around me</p>
                                <br>
                                <h3>Keywords that suit me</h3>
                                <p>independent, happy, adaptive, sensitive, introvert, geek, explorer, catlovers,
                                    idealistic, empathetic, movies, music, rains, moon, feeling, actofservices, anxiety,
                                    intuition, self-care, dynamics, nature, photography, soft spoken, daydreamer,
                                    tolerant, mindful, gentle, humble, space</p>
                                <br>
                                <h3>Quote that motivates me</h3>
                                <p>"Happiness comes when you believe in what you are doing, know what you are doing, and
                                    love what you are doing." - Brian Tracy</p>
                            </div>
                            <div class="col-xs-12 col-md-6">
                                <img src="./assets/images/profil.jpg" class="img-responsive" alt="">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <br>
    <br>
    <h3 class="text-center small">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
        - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</h3>
    <br>

    <div class="container">
        <div class="row">

            <div class="col-sm-8 col-sm-offset-2 section-container-spacer" style="margin-bottom: 20px;">
                <div class="text-center">
                    <h1 class="h2">03 : Hobby</h1>
                    <br>
                    <p><b>photography[fuh-tog-ruh-fee]</b> ; the process or art of producing images of objects on
                        sensitized
                        surfaces by the chemical action of light or of other forms of radiant energy, as x-rays, gamma
                        rays, or
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
                                        <p>Capturing the world from beneath the iconic Marina Bay Sands Infinity Pool. A
                                            mesmerizing view that defies gravity.</p>
                                        <a href="{{ url('/the-float') }}" title=""
                                            class="btn btn-default">Discover</a>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <a href="{{ url('/rush-hour') }}" title="" class="black-image-project-hover">
                                        <img src="./assets/images/photo2.jpg" alt="" class="img-responsive">
                                    </a>
                                    <div class="card-container card-container-lg">
                                        <h4>002/006</h4>
                                        <h3>Rush Hour</h3>
                                        <p>Savoring serenity amidst the hustle and bustle of Surabaya's famous mall
                                            during rush hour.</p>
                                        <a href="{{ url('/rush-hour') }}" title=""
                                            class="btn btn-default">Discover</a>
                                    </div>
                                </div>
                                <div class="col-sm-4">
                                    <a href="{{ url('/night-lights') }}" title=""
                                        class="black-image-project-hover">
                                        <img src="./assets/images/photo3.jpg" alt="" class="img-responsive">
                                    </a>
                                    <div class="card-container card-container-lg">
                                        <h4>003/006</h4>
                                        <h3>Night Lights</h3>
                                        <p>A mesmerizing view of the cityscape, like a sea of stars, from high above the
                                            tranquil hills.</p>
                                        <a href="{{ url('/night-lights') }}" title=""
                                            class="btn btn-default">Discover</a>
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
                                        <p>Meet the newest 'IT' expert in our department - our fluffy white feline
                                            friend.</p>
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
                                        <p>The crisscrossing streams of vehicles, breathing metropolis, paint a
                                            fascinating tapestry of motion and life.</p>
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
                                        <p>Amidst the hustle and bustle of the concrete jungle, a solitary bird finds
                                            its own path.</p>
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
    <h3 class="text-center small">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
        - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</h3>

    <div class="section-container">
        <div class="container">
            <br>
            <br>
            <br>
            <div class="row">
                <div class="col-xs-12">
                    <div class="section-container-spacer text-center">
                        <h1 class="h2">04 : Contact me!</h1>
                    </div>

                    <div class="row">
                        <div class="col-md-10 col-md-offset-1">
                            <form action="" class="reveal-content">
                                <div class="row">
                                    <h3 class="col-lg-10">Leave a message :</h3>
                                    <div class="col-md-7">
                                        <div class="form-group">
                                            <input type="email" class="form-control" id="email"
                                                placeholder="Email">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control" id="subject"
                                                placeholder="Subject">
                                        </div>
                                        <div class="form-group">
                                            <textarea class="form-control" rows="5" placeholder="Enter your message"></textarea>
                                        </div>
                                        <button type="submit" class="btn btn-default btn-lg">Send</button>
                                    </div>
                                    <div class="col-md-5 address-container">
                                        <ul class="list-unstyled">
                                            <li>
                                                <span class="fa-icon">
                                                    <i class="fa fa-phone" aria-hidden="true"></i>
                                                </span>
                                                +62 878-5269-7609
                                            </li>
                                            <li>
                                                <span class="fa-icon">
                                                    <i class="fa fa-at" aria-hidden="true"></i>
                                                </span>
                                                nugrahasatria05@gmail.com
                                            </li>
                                            <li>
                                                <span class="fa-icon">
                                                    <i class="fa fa fa-map-marker" aria-hidden="true"></i>
                                                </span>
                                                Jl. Keputih Tegal Timur III C
                                            </li>
                                        </ul>
                                        <h3 style="margin-left: 20px;">Follow me on social networks</h3>
                                        <b href="http://www.instagram.com/satrianugraha.satt" title=""
                                            class="fa-icon" style="margin-left: 15px;">
                                            <i class="fa fa-instagram"></i>
                                        </b>
                                        <b href="http://www.twitter.com/noleppz" title="" class="fa-icon">
                                            <i class="fa fa-twitter"></i>
                                        </b>
                                        <b href="https://www.linkedin.com/in/satria-dwi-nugraha-94889b249?utm_source=share&utm_campaign=share_via&utm_content=profile&utm_medium=ios_app"
                                            title="" class="fa-icon">
                                            <i class="fa fa-linkedin"></i>
                                        </b>

                                    </div>
                                </div>
                            </form>
                        </div>

                    </div>

                </div>
            </div>
        </div>
    </div>
    <br>

    <h3 class="text-center small">- - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -
        - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - - -</h3>

    <script type="text/javascript" src="{{ asset('js/carousel.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/typing.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            type();
            movingBackgroundImage();
        });
    </script>

    <div class="container text-center">
        <h1 class="h2">05 : My Assignments</h1>
        <br>
        <br>

        <nav class="tugas">
            <a href="{{ url('/html-intro') }}">| Tugas 1 </a>
            <a href="{{ url('/bootstrap') }}">| Tugas 2 </a>
            <a href="{{ url('/linktree') }}">| Tugas 3 </a>
            <a href="{{ url('/validation') }}">| Tugas 4 </a>
            <a href="{{ url('/calculator') }}">| Tugas 5 </a>
            <a href="{{ url('/replikasi') }}">| Tugas 6 |</a>
        </nav>
    </div>

    <footer class="footer-container text-center">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <br>
                    <br>
                    <p>© SATRIA DWI NUGRAHA | 2023</p>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
