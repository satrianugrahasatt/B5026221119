<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <meta content="description" name="description">
    <meta name="google" content="notranslate" />
    <meta content="Mashup templates have been developped by Orson.io team" name="author">

    <!-- Disable tap highlight on IE -->
    <meta name="msapplication-tap-highlight" content="no">

    <link rel="apple-touch-icon" sizes="180x180" href="./assets/apple-icon-180x180.png">
    <link href="./assets/favicon.ico" rel="icon">

    <title>rush hour.</title>

    <link href="style.css" rel="stylesheet">
</head>

<body class="">
    <!-- Add your content of header -->
    <header>
        <nav class="navbar  navbar-fixed-top navbar-default">
            <nav class="navbar  navbar-fixed-top navbar-default">
                <div class="collapse navbar-collapse" id="navbar-collapse">
                    <ul class="nav navbar-nav ">
                        <li><a href="{{ url('/') }}" title="">01 : Home</a></li>
                        <li><a href="{{ url('/about') }}" title="">02 : About me</a></li>
                        <li><a href="{{ url('/hobby') }}" title="">03 : Hobby</a></li>
                        <li><a href="{{ url('/contact') }}" title="">04 : Contact</a></li>
                        <li><a href="{{ url('/gallery') }}" title="">05 : Gallery</a></li>
                    </ul>

                    <ul class="nav navbar-nav navbar-right navbar-small visible-md visible-lg">
                        <li><a href="{{ url('/the-float') }}" title="">001</a></li>
                        <li><a href="{{ url('/rush-hour') }}" title="" class="active">002</a></li>
                        <li><a href="{{ url('/night-lights') }}" title="">003</a></li>
                        <li><a href="{{ url('/cat') }}" title="">004</a></li>
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
                            <h1 class="h2">002 : Rush Hour</h1>
                        </div>
                        <p>Here, a lone figure sits in a cozy corner of a bustling café, savoring the perfect brew and
                            watching the world whirl by. It's a snapshot of serenity in the heart of the city's vibrant
                            chaos, a reminder that amidst the rush, one can always find a peaceful pause.</p>
                        <blockquote>
                            <p>"Productivity is the result of a commitment to excellence, intelligent planning, and
                                focused effort."</p>
                            <small class="pull-right">Paul J. Meyer</small>
                        </blockquote>
                    </div>
                </div>
                <div class="col-xs-12 black-image-project-hover">
                    <img src="./assets/images/photo2.jpg" class="img-responsive" alt="">
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
