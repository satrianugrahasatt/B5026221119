<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta content="IE=edge" http-equiv="X-UA-Compatible">
    <meta content="width=device-width,initial-scale=1" name="viewport">
    <link href="./assets/favicon.ico" rel="icon">
    <title>get to know me;</title>
    <link href="style.css" rel="stylesheet">
</head>

<body class="">
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
                <div class="col-xs-12">
                    <div class="section-container-spacer text-center" style="margin-top: 80px;">
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
                                        idealistic, empathetic, movies, music, rains, moon, feeling, actofservices,
                                        anxiety, intuition, self-care, dynamics, nature, photography, soft spoken,
                                        daydreamer, tolerant, mindful, gentle, humble, space</p>
                                    <br>
                                    <h3>Quote that motivates me</h3>
                                    <p>"Happiness comes when you believe in what you are doing, know what you are doing,
                                        and love what you are doing." - Brian Tracy</p>
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
