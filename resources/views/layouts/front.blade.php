<!doctype html>
<html lang="zxx">
<head>
  <meta charset="utf-8">
  <title>Service</title>

  <!-- mobile responsive meta -->
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  <meta name="title" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">
  <meta name="description" content="">
  <!-- ** Plugins Needed for the Project ** -->
  <!-- Bootstrap -->
  <link rel="stylesheet" href="{{asset('asset/front/plugins/bootstrap/bootstrap.min.css')}}">
	<!-- FontAwesome -->
  <link rel="stylesheet" href="{{asset('asset/front/plugins/fontawesome/font-awesome.min.css')}}">
	<!-- Animation -->
	<link rel="stylesheet" href="{{asset('asset/front/plugins/animate.css')}}">
	<!-- Prettyphoto -->
	<link rel="stylesheet" href="{{asset('asset/front/plugins/prettyPhoto.css')}}">
	<!-- Owl Carousel -->
	<link rel="stylesheet" href="{{asset('asset/front/plugins/owl/owl.carousel.css')}}">
	<link rel="stylesheet" href="{{asset('asset/front/plugins/owl/owl.theme.css')}}">
	<!-- Flexslider -->
	<link rel="stylesheet" href="{{asset('asset/front/plugins/flex-slider/flexslider.css')}}">
	<!-- Slick-slider -->
	<link rel="stylesheet" href="{{asset('asset/front/plugins/slick/slick.css')}}">
	<!-- Style Swicther -->
	<link id="style-switch" href="{{asset('asset/front/css/presets/preset3.css')}}" media="screen" rel="stylesheet" type="text/css">

	<!-- HTML5 shim, for IE6-8 support of HTML5 elements. All other JS at the end of file. -->
    <!--[if lt IE 9]>
      <script src="plugins/html5shiv.js"></script>
      <script src="plugins/respond.min.js"></script>
    <![endif]-->

  <!-- Main Stylesheet -->
  <link href="{{asset('asset/front/css/style.css')}}" rel="stylesheet">
  
  <!--Favicon-->
	<link rel="icon" href="{{asset('asset/front/img/favicon/favicon-32x32.html')}}" type="image/x-icon" />
	<link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{asset('asset/front/img/favicon/favicon-144x144.html')}}">
	<link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{asset('asset/front/img/favicon/favicon-72x72.html')}}">
	<link rel="apple-touch-icon-precomposed" href="{{asset('asset/front/img/favicon/favicon-54x54.html')}}">

</head>

<body>
	<div class="loader"></div>
	<!-- Style switcher start -->
	<div class="style-switch-wrapper">
		<div class="style-switch-button">
			<i class="fa fa-sliders"></i>
		</div>
		<h3>Style Options</h3>
		<button id="preset1" class="btn btn-sm btn-primary"></button>
		<button id="preset2" class="btn btn-sm btn-primary"></button>
		<button id="preset3" class="btn btn-sm btn-primary"></button>
		<button id="preset4" class="btn btn-sm btn-primary"></button>
		<button id="preset5" class="btn btn-sm btn-primary"></button>
		<button id="preset6" class="btn btn-sm btn-primary"></button>
		<br/><br/>
		<a class="btn btn-sm btn-primary close-styler float-right">Close X</a>
	</div>
	<!-- Style switcher end -->

	<div class="body-inner">

<!-- Header start -->
<header id="header" class="fixed-top header" role="banner">
	<a class="navbar-brand navbar-bg" href="{{url('/')}}"><img class="img-fluid float-right" src="{{asset('asset/upload/images/'.Helper::logo())}}" alt="logo" style="width: 165px; height: 50px;" ></a>
	<div class="container">
		<nav class="navbar navbar-expand-lg navbar-dark">
			<button class="navbar-toggler ml-auto border-0 rounded-0 text-white" type="button" data-toggle="collapse"
				data-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
				<span class="fa fa-bars"></span>
			</button>

			<div class="collapse navbar-collapse text-center" id="navigation">
				<ul class="navbar-nav ml-auto">
					<li class="nav-item active">
						<a class="nav-link" href="{{ url('/') }}">Home</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{ route('services')}}">Services</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{route('portfolio')}}">Portfolio</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{route('blog')}}">Blog</a>
					</li>
					<li class="nav-item">
						<a class="nav-link" href="{{route('contact')}}">Contact</a>
					</li>
				</ul>
			</div>
		</nav>
	</div>
</header>
<!--/ Header end -->


@yield('content')


<!-- Footer start -->
	<footer id="footer" class="footer">
	  <div class="container">
	    <div class="row">
	      <div class="col-md-4 col-sm-12 footer-widget">
	        <h3 class="widget-title">Recent Posts</h3>
	        <div class="latest-post-items media">
	          <div class="latest-post-content media-body">
	            <h4><a href="#">Bulgaria claims to find Europe's 'oldest town'</a></h4>
	            <p class="post-meta">
	              <span class="author">Posted by John Doe</span>
	              <span class="post-meta-cat">in<a href="#"> Blog</a></span>
	            </p>
	          </div>
	        </div><!-- 1st Latest Post end -->

	        <div class="latest-post-items media">
	          <div class="latest-post-content media-body">
	            <h4><a href="#">Few Answers in Case of Murdered Law Professor</a></h4>
	            <p class="post-meta">
	              <span class="date"><i class="icon icon-calendar"></i> Mar 15, 2015</span>
	              <span class="post-meta-comments"><i class="icon icon-bubbles4"></i> <a href="#">03</a></span>
	            </p>
	          </div>
	        </div><!-- 2nd Latest Post end -->

	        <div class="latest-post-items media">
	          <div class="latest-post-content media-body">
	            <h4><a href="#">Over the year we have lots of experience in our field</a></h4>
	            <p class="post-meta">
	              <span class="date"><i class="icon icon-calendar"></i> Apr 17, 2015</span>
	              <span class="post-meta-comments"><i class="icon icon-bubbles4"></i> <a href="#">14</a></span>
	            </p>
	          </div>
	        </div><!-- 3rd Latest Post end -->

	      </div>
	      <!--/ End Recent Posts-->


	      <div class="col-md-4 col-sm-12 footer-widget">
	        <h3 class="widget-title">Maps</h3>

	        <div class="img-gallery">
	          <div class="img-container">
	           	<iframe src="{{Helper::contact()->map}}" width="100%" height="250" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe> 
	          </div>
	        </div>
	      </div>
	      <!--/ end flickr -->

	      <div class="col-md-3 col-sm-12 footer-widget footer-about-us">
	        <h3 class="widget-title">About Craft</h3>
	        <p>{{Helper::contact()->details}}</p>
	        <h4>Address</h4>
	        <p>{{Helper::contact()->address}}</p>
	        <div class="row">
	          <div class="col-md-12">
	            <h4>Email:</h4>
	            <p>{{Helper::contact()->email}}</p>
	          </div>
	          <div class="col-md-12">
	            <h4>Phone No.</h4>
	            <p>{{Helper::contact()->phone}}</p>
	          </div>
	        </div>
	        <form action="#" role="form">
	          <div class="input-group subscribe">
	            <input type="email" class="form-control" placeholder="Email Address" required="">
	            <span class="input-group-addon">
	              <button class="btn" type="submit"><i class="fa fa-envelope-o"> </i></button>
	            </span>
	          </div>
	        </form>
	      </div>
	      <!--/ end about us -->

	    </div><!-- Row end -->
	  </div><!-- Container end -->
	</footer><!-- Footer end -->


	<!-- Copyright start -->
	<section id="copyright" class="copyright angle">
	  <div class="container">
	    <div class="row">
	      <div class="col-md-12 text-center">
	        <ul class="footer-social unstyled">
	          <li>
	            <a title="Twitter" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-twitter"></i></span>
	            </a>
	            <a title="Facebook" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-facebook"></i></span>
	            </a>
	            <a title="Google+" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-google-plus"></i></span>
	            </a>
	            <a title="linkedin" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-linkedin"></i></span>
	            </a>
	            <a title="Pinterest" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-pinterest"></i></span>
	            </a>
	            <a title="Skype" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-skype"></i></span>
	            </a>
	            <a title="Dribble" href="#">
	              <span class="icon-pentagon wow bounceIn"><i class="fa fa-dribbble"></i></span>
	            </a>
	          </li>
	        </ul>
	      </div>
	    </div>
	    <!--/ Row end -->
	    <div class="row">
	      <div class="col-md-12 text-center">
	        <div class="copyright-info">
	          &copy; Copyright 2019 Murad. <span>Designed by <a
	              href="#">MD Murad</a></span>
	        </div>
	      </div>
	    </div>
	    <!--/ Row end -->
	    <div id="back-to-top" data-spy="affix" data-offset-top="10" class="back-to-top affix position-fixed">
	      <button class="btn btn-primary" title="Back to Top"><i class="fa fa-angle-double-up"></i></button>
	    </div>
	  </div>
	  <!--/ Container end -->
	</section>
	<!--/ Copyright end -->

</div><!-- Body inner end -->

<!-- jQuery -->
<script src="{{asset('asset/front/plugins/jQuery/jquery.min.js')}}"></script>
<!-- Bootstrap JS -->
<script src="{{asset('asset/front/plugins/bootstrap/bootstrap.min.js')}}"></script>
<!-- Style Switcher -->
<script type="text/javascript" src="{{asset('asset/front/plugins/style-switcher.js')}}"></script>
<!-- Owl Carousel -->
<script type="text/javascript" src="{{asset('asset/front/plugins/owl/owl.carousel.js')}}"></script>
<!-- PrettyPhoto -->
<script type="text/javascript" src="{{asset('asset/front/plugins/jquery.prettyPhoto.js')}}"></script>
<!-- Bxslider -->
<script type="text/javascript" src="{{asset('asset/front/plugins/flex-slider/jquery.flexslider.js')}}"></script>
<!-- Slick slider -->
<script type="text/javascript" src="{{asset('asset/front/plugins/slick/slick.min.js')}}"></script>
<!-- Isotope -->
<script type="text/javascript" src="{{asset('asset/front/plugins/isotope.js')}}"></script>
<script type="text/javascript" src="{{asset('asset/front/plugins/ini.isotope.js')}}"></script>
<!-- Wow Animation -->
<script type="text/javascript" src="{{asset('asset/front/plugins/wow.min.js')}}"></script>
<!-- Eeasing -->
<script type="text/javascript" src="{{asset('asset/front/plugins/jquery.easing.1.3.js')}}"></script>
<!-- Counter -->
<script type="text/javascript" src="{{asset('asset/front/plugins/jquery.counterup.min.js')}}"></script>
<!-- Waypoints -->
<script type="text/javascript" src="{{asset('asset/front/plugins/waypoints.min.js')}}"></script>
<!-- google map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU&amp;libraries=places"></script>
<script src="{{asset('asset/front/plugins/google-map/gmap.js')}}"></script>

<!-- Main Script -->
<script src="{{asset('asset/front/js/script.js')}}"></script>

</body>
</html>