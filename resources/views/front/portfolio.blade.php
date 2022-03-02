@extends('layouts.front')

@section('content')

<div id="banner-area">
	<img src="{{asset('asset/front/images/banner/banner1.jpg')}}" alt="" />
	<div class="parallax-overlay"></div>
	<!-- Subpage title start -->
	<div class="banner-title-content">
		<div class="text-center">
			<h2>Portfolio Classic</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item text-white" aria-current="page">Portfolio Classic</li>
				</ol>
			</nav>
		</div>
	</div><!-- Subpage title end -->
</div><!-- Banner area end -->

<!-- Portfolio start -->
<section id="main-container" class="portfolio portfolio-box">
	<div class="container">
		<!--Isotope filter start -->
		<div class="row text-center">
			<div class="col-12">
				<div class="isotope-nav" data-isotope-nav="isotope">
					<ul>
						<li><a href="#" class="active" data-filter="*">All</a></li>
						<li><a href="#" data-filter=".web-design">Web Design</a></li>
						<li><a href="#" data-filter=".development">Development</a></li>
						<li><a href="#" data-filter=".joomla">Joomla</a></li>
						<li><a href="#" data-filter=".wordpress">Wordpress</a></li>
					</ul>
				</div>
			</div>
		</div><!-- Isotope filter end -->

		<div id="isotope" class="isotope row">
			<div class="col-sm-3 web-design isotope-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="{{asset('asset/front/images/portfolio/portfolio1.jpg')}}" alt="">
						<figcaption>
							<h3>Startup Business</h3>
							<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="{{asset('asset/front/images/portfolio/portfolio-bg1.jpg')}}"><i
									class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div><!-- Isotope item end -->

			<div class="col-sm-3 development isotope-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="{{asset('asset/front/images/portfolio/portfolio2.jpg')}}" alt="">
						<figcaption>
							<h3>Easy to Lanunch</h3>
							<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="{{asset('asset/front/images/portfolio/portfolio-bg2.jpg')}}"><i
									class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div><!-- Isotope item end -->

			<div class="col-sm-3 joomla isotope-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="{{asset('asset/front/images/portfolio/portfolio3.jpg')}}" alt="">
						<figcaption>
							<h3>Your Business</h3>
							<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="{{asset('asset/front/images/portfolio/portfolio-bg3.jpg')}}"><i
									class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div><!-- Isotope item end -->

			<div class="col-sm-3 wordpress isotope-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="{{asset('asset/front/images/portfolio/portfolio4.jpg')}}" alt="">
						<figcaption>
							<h3>Prego Match</h3>
							<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="{{asset('asset/front/images/portfolio/portfolio-bg4.jpg')}}"><i
									class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div><!-- Isotope item end -->

			<div class="col-sm-3 joomla isotope-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="{{asset('asset/front/images/portfolio/portfolio5.jpg')}}" alt="">
						<figcaption>
							<h3>Fashion Brand</h3>
							<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="{{asset('asset/front/images/portfolio/portfolio-bg5.html')}}"><i
									class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div><!-- Isotope item end -->

			<div class="col-sm-3 development isotope-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="{{asset('asset/front/images/portfolio/portfolio6.jpg')}}" alt="">
						<figcaption>
							<h3>The Insidage</h3>
							<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="{{asset('asset/front/images/portfolio/portfolio-bg1.jpg')}}"><i
									class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div><!-- Isotope item end -->

			<div class="col-sm-3 development isotope-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="{{asset('asset/front/images/portfolio/portfolio7.jpg')}}" alt="">
						<figcaption>
							<h3>Light Carpet</h3>
							<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="{{asset('asset/front/images/portfolio/portfolio-bg2.jpg')}}"><i
									class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div><!-- Isotope item end -->

			<div class="col-sm-3 development isotope-item">
				<div class="grid">
					<figure class="m-0 effect-oscar">
						<img src="{{asset('asset/front/images/portfolio/portfolio8.jpg')}}" alt="">
						<figcaption>
							<h3>Amazing Keyboard</h3>
							<a class="link icon-pentagon" href="portfolio-item.html"><i class="fa fa-link"></i></a>
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="{{asset('asset/front/images/portfolio/portfolio-bg3.jpg')}}"><i
									class="fa fa-search"></i></a>
						</figcaption>
					</figure>
				</div>
			</div><!-- Isotope item end -->
		</div><!-- Content row end -->
	</div><!-- Container end -->
</section><!-- Portfolio end -->

<div class="gap-40"></div>

@endsection