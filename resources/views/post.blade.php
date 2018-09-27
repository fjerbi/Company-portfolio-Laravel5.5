<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Architecture</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="" />
    <meta name="keywords" content="" />
    <meta name="author" content="" />

    <!-- Facebook and Twitter integration -->
    <meta property="og:title" content=""/>
    <meta property="og:image" content=""/>
    <meta property="og:url" content=""/>
    <meta property="og:site_name" content=""/>
    <meta property="og:description" content=""/>
    <meta name="twitter:title" content="" />
    <meta name="twitter:image" content="" />
    <meta name="twitter:url" content="" />
    <meta name="twitter:card" content="" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="shortcut icon" href="favicon.ico">

    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">

    <!-- Animate.css -->
    <link rel="stylesheet" href="{{asset('frontend/css/animate.css')}}">
    <!-- Icomoon Icon Fonts-->
    <link rel="stylesheet" href="{{asset('frontend/css/icomoon.css')}}">
    <!-- Bootstrap  -->
    <link rel="stylesheet" href="{{asset('frontend/css/bootstrap.css')}}">
    <!-- Flexslider  -->
    <link rel="stylesheet" href="{{asset('frontend/css/flexslider.css')}}">
    <!-- Flaticons  -->
    <link rel="stylesheet" href="{{asset('frontend/fonts/flaticon/font/flaticon.css')}}">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{asset('frontend/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('frontend/css/owl.theme.default.min.css')}}">
    <!-- Theme style  -->
    <link rel="stylesheet" href="{{asset('frontend/css/style.css')}}">

    <!-- Modernizr JS -->
    <script src="{{asset('frontend/js/modernizr-2.6.2.min.js')}}"></script>
    <!-- FOR IE9 below -->
    <!--[if lt IE 9]>
    <script src="{{asset('frontend/js/respond.min.js')}}"></script>
    <![endif]-->

</head>
<body>
<div id="colorlib-page">
    <a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
    <aside id="colorlib-aside" role="complementary" class="border js-fullheight">
        <h1 id="colorlib-logo"><a href="index.html">Architecture</a></h1>
        <nav id="colorlib-main-menu" role="navigation">
            <ul>
                <li class="colorlib-active"><a href="index.html">Accueil</a></li>
                <li><a href="work.html">Projets</a></li>
                <li><a href="about.html">à propos</a></li>
                <li><a href="services.html">Services</a></li>
                <li><a href="blog.html">Blog</a></li>
                <li><a href="contact.html">Contact</a></li>
            </ul>
        </nav>

        <div class="colorlib-footer">
            <p><small>&copy; <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;<script>document.write(new Date().getFullYear());</script>
            <ul>
                <li><a href="#"><i class="icon-facebook2"></i></a></li>
                <li><a href="#"><i class="icon-twitter2"></i></a></li>
                <li><a href="#"><i class="icon-instagram"></i></a></li>
                <li><a href="#"><i class="icon-linkedin2"></i></a></li>
            </ul>
        </div>

    </aside>

<center>
<div class="blog-entry">

    <a href="{{route('article.show', $post->slug)}}" class="blog-img"><img src="{{ asset('storage/'.$post->image)}}" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
    <div class="desc">
        <span><small>{{$post->created_at}}</small> | <small>{{$post->slug}}</small> | <small> <i class="icon-bubble3"></i> </small></span>
        <h3><a href="blog.html">{{$post->title}}</a></h3>
        <p>{{$post->body}}</p>
    </div>
</div>
