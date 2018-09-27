<!DOCTYPE HTML>
<html>
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Ace Touch</title>
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

  <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
  <link rel="shortcut icon" href="{{asset('frontend/favicon.ico')}}">

  <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700" rel="stylesheet">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <!-- Bootstrap core CSS -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.5.10/css/mdb.min.css" rel="stylesheet">
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
  <script src="js/respond.min.js"></script>
  <![endif]-->


	</head>
	<body>
	<div id="colorlib-page">
		<a href="#" class="js-colorlib-nav-toggle colorlib-nav-toggle"><i></i></a>
		<aside id="colorlib-aside" role="complementary" class="border js-fullheight">
			<h1 id="colorlib-logo"><a href="index.html">ACE TOUCH</a></h1>
			<nav id="colorlib-main-menu" role="navigation">
				<ul>
          <li><a href="{{('/')}}">Home</a></li>
            <li><a href="{{('/about')}}">About</a></li>
           <li ><a href="{{('/portfolio')}}">Project</a></li>
          <li><a href="{{('/videos')}}">Videos</a></li>
          <li   class="colorlib-active"><a href="{{('/blog')}}">Blog</a></li>
          <li><a href="{{('/organigramme')}}">Organigramme</a></li>
          
          <li><a href="contact.html">Devis/Questions</a></li>
          <li><a href="{{('/references')}}">References</a></li>
          <li><a href="contact.html">ACE NET</a></li>
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

		<div id="colorlib-main">

			<div class="colorlib-blog">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<span class="heading-meta">Blog</span>
							<h2 class="colorlib-heading">Read Blog</h2>
						</div>
					</div>
					<div class="row">
            <?php foreach ($posts as $post): ?>
						<div class="col-md-4 col-sm-6 animate-box" data-animate-effect="fadeInLeft">
							<div class="blog-entry">
								<a href="blog.html" class="blog-img"><img src="{{asset('storage/'.$post->image)}}" class="img-responsive" alt="HTML5 Bootstrap Template by colorlib.com"></a>
								<div class="desc">
									<span><small>{{$post->created_at}}</small>
									<h3><a href="{{route('article.show', $post->slug)}}">{{$post->title}}</a></h3>
									<p>{{$post->meta_description}}</p>
								</div>
							</div>
						</div>
<?php endforeach; ?>

				</div>
			</div>

			<div id="get-in-touch" class="colorlib-bg-color">
				<div class="colorlib-narrow-content">
					<div class="row">
						<div class="col-md-6 animate-box" data-animate-effect="fadeInLeft">
							<h2>Get in Touch!</h2>
						</div>
					</div>
					<div class="row">
						<div class="col-md-6 col-md-offset-3 col-md-pull-3 animate-box" data-animate-effect="fadeInLeft">
							<p class="colorlib-lead">RESTEZ EN CONTACT !</p>
							<p><a href="#" class="btn btn-primary btn-learn">CONTACTEZ-NOUS !</a></p>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>

  <!-- jQuery -->
	<script src="{{asset('frontend/js/jquery.min.js')}}"></script>
	<!-- jQuery Easing -->
	<script src="{{asset('frontend/js/jquery.easing.1.3.js')}}"></script>
	<!-- Bootstrap -->
	<script src="{{asset('frontend/js/bootstrap.min.js')}}"></script>
	<!-- Waypoints -->
	<script src="{{asset('frontend/js/jquery.waypoints.min.js')}}"></script>
	<!-- Flexslider -->
	<script src="{{asset('frontend/js/jquery.flexslider-min.js')}}"></script>
	<!-- Sticky Kit -->
	<script src="{{asset('frontend/js/sticky-kit.min.js')}}"></script>
	<!-- Owl carousel -->
	<script src="{{asset('frontend/js/owl.carousel.min.js')}}"></script>
	<!-- Counters -->
	<script src="{{asset('frontend/js/jquery.countTo.js')}}"></script>


	<!-- MAIN JS -->
	<script src="{{asset('frontend/js/main.js')}}"></script>


	</body>
</html>
