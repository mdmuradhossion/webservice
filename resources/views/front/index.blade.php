@extends('layouts.front')

@section('content')

<!-- Slider start -->
<section class="hero-slider text-center">
	<div class="slider-inner h-100">
		<div class="slider-item" data-dot="&lt;i class=&quot;{{$banner['icon']}}&quot;&gt;&lt;/i&gt; {{$banner['icon_title']}}" style="background-image: url({{asset('asset/upload/images/'.$banner['slider_1'])}});">
			<div class="overlay2">
				<div class="container h-100">
					<div class="row h-100 align-items-center">
						<div class="col-12">
							<h2 data-duration-in=".3" data-animation-in="fadeInUp">{{$banner['title']}}</h2>
							<h3 class="mb-4" data-duration-in=".4" data-animation-in="fadeInUp" data-delay-in=".4">{{$banner['text']}}</h3>
							<a href="#0" class="btn btn-primary white m-2" data-duration-in=".5" data-animation-in="fadeInUp" data-delay-in=".5">Start Now</a>
							<a href="#0" class="btn btn-primary solid m-2" data-duration-in=".6" data-animation-in="fadeInUp" data-delay-in=".6">Learn More</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-item" data-dot="&lt;i class=&quot;{{$banner['icon2']}}&quot;&gt;&lt;/i&gt; {{$banner['icon_title2']}}" style="background-image: url({{asset('asset/upload/images/'.$banner['slider_2'])}});">
			<div class="overlay2">
				<div class="container h-100">
					<div class="row h-100 align-items-center">
						<div class="col-md-6 d-none d-md-block" data-duration-in=".3" data-animation-in="fadeInUp">
							<img class="p-5 w-100" src="images/slider/bg-thumb1.png" alt="">
						</div>
						<div class="col-md-6">
							<h2 class="h3" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".4">{{$banner['title2']}}</h2>
							<p class="mb-4" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">{{$banner['text2']}}</p>
							<a href="#0" class="cd-hero__btn btn btn-primary solid" data-duration-in=".4" data-animation-in="fadeInUp" data-delay-in=".6">Take a Tour</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-item" data-dot="&lt;i class=&quot;{{$banner['icon3']}}&quot;&gt;&lt;/i&gt; {{$banner['icon_title3']}}" style="background-image: url({{asset('asset/upload/images/'.$banner['slider_3'])}});">
			<div class="overlay2">
				<div class="container h-100">
					<div class="row h-100 align-items-center">
						<div class="col-md-6">
							<h2 class="h3" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".4">{{$banner['title3']}}</h2>
							<p class="mb-4" data-duration-in=".3" data-animation-in="fadeInUp" data-delay-in=".5">{{$banner['text3']}}</p>
							<a href="#0" class="cd-hero__btn btn btn-primary white m-2" data-duration-in=".4" data-animation-in="fadeInUp" data-delay-in=".6">Start</a>
							<a href="#0" class="cd-hero__btn btn secondary btn-primary solid m-2" data-duration-in=".4" data-animation-in="fadeInUp" data-delay-in=".7">Learn More</a>
						</div>
						<div class="col-md-6 d-none d-md-block" data-duration-in=".3" data-animation-in="fadeInUp">
							<img class="p-4 w-100" src="images/slider/bg-thumb2.png" alt="">
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="slider-item" data-dot="&lt;i class=&quot;{{$banner['icon4']}}&quot;&gt;&lt;/i&gt; {{$banner['icon_title4']}}" style="background-image: url({{asset('asset/upload/images/'.$banner['slider_4'])}});">
			<div class="overlay2">
				<div class="container h-100">
					<div class="row h-100 align-items-center">
						<div class="col-12">
							<h2 data-duration-in=".3" data-animation-in="fadeInDown">{{$banner['title4']}}</h2>
							<h3 class="mb-4" data-duration-in=".4" data-animation-in="fadeInUp" data-delay-in=".4">{{$banner['text4']}}</h3>
							<a href="#0" class="cd-hero__btn btn btn-primary solid" data-duration-in=".5" data-animation-in="fadeInUp" data-delay-in=".5">Learn more</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--/ Slider end -->

<!-- Service box start -->
<section id="service" class="service angle">
	<div class="container">
		<div class="row">
			<div class="col-md-12 heading">
				<span class="title-icon float-left"><i class="fa fa-cogs"></i></span>
				<h2 class="title">Service We Provide <span class="title-desc">A Quality Experience Team with 4 years
						experience</span></h2>
			</div>
		</div><!-- Title row end -->

		<div class="row">
			@foreach($service as $row)
			<div class="col-md-3 col-sm-3 wow fadeInDown" data-wow-delay=".5s">
				<div class="service-content text-center">
					<span class="service-icon icon-pentagon"><i class="{{$row->icon}}"></i></span>
					<h3>{{$row->name}}</h3>
					<ul style="list-style-type: none; text-align: left;">
						<?php echo Helper::get_service_item($row->id);?>
					</ul>
				</div>
			</div>
			@endforeach
			<!--/ End first service -->
			
		</div><!-- Content row end -->
	</div>
	<!--/ Container end -->
</section>
<!--/ Service box end -->

<!-- Portfolio start -->
<section id="portfolio" class="portfolio">
	<div class="container">
		<div class="row">
			<div class="col-md-12 heading">
				<span class="title-icon classic float-left"><i class="fa fa-suitcase"></i></span>
				<h2 class="title classic">Our Awesome Work</h2>
			</div>
		</div> <!-- Title row end -->

		<!--Isotope filter start -->
		<div class="row text-right">
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
	</div>

	<div class="container-fluid">
		<div class="row isotope" id="isotope">
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
							<a class="view icon-pentagon" data-rel="prettyPhoto" href="{{asset('asset/front/images/portfolio/portfolio-bg4.html')}}"><i
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

<!-- Counter Strat -->
<section class="ts_counter p-0">
	<div class="container-fluid">
		<div class="row facts-wrapper wow fadeInLeft text-center">
			<div class="facts one col-md-3 col-sm-6">
				<span class="facts-icon"><i class="fa fa-user"></i></span>
				<div class="facts-num">
					<span class="counter">1200</span>
				</div>
				<h3>Clients</h3>
			</div>

			<div class="facts two col-md-3 col-sm-6">
				<span class="facts-icon"><i class="fa fa-institution"></i></span>
				<div class="facts-num">
					<span class="counter">1277</span>
				</div>
				<h3>Item Sold</h3>
			</div>

			<div class="facts three col-md-3 col-sm-6">
				<span class="facts-icon"><i class="fa fa-suitcase"></i></span>
				<div class="facts-num">
					<span class="counter">869</span>
				</div>
				<h3>Projects</h3>
			</div>

			<div class="facts four col-md-3 col-sm-6">
				<span class="facts-icon"><i class="fa fa-trophy"></i></span>
				<div class="facts-num">
					<span class="counter">76</span>
				</div>
				<h3>Awwards</h3>
			</div>

		</div>
	</div>
	<!--/ Container end -->
</section>
<!--/ Counter end -->

<!-- Feature box start -->
<section id="feature" class="feature">
	<div class="container">
		<div class="row">
			@foreach($ourgoal as $row)
			<div class="feature-box col-sm-4 wow fadeInDown" data-wow-delay=".5s">
				<span class="feature-icon float-left">@php echo $row->icon @endphp</span>
				<div class="feature-content">
					<h3>{{$row->title}}</h3>
					<p>{{$row->description}}</p>
				</div>
			</div>
			@endforeach
			
		</div><!-- Content row end -->

		

	</div>
	<!--/ Container end -->
</section>
<!--/ Feature box end -->


<section id="image-block" class="image-block p-0">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-6 ts-padding"
				style="height:650px;background:url({{asset('asset/upload/choose/'.$chooseus['image'])}}) 50% 50% / cover no-repeat;">
			</div>
			<div class="col-md-6 ts-padding img-block-right">
				<div class="img-block-head text-center">
					<h2>{{$chooseus['subtitle']}}</h2>
					<h3>{{$chooseus['title']}}</h3>
					<p>{{$chooseus['description']}}
					</p>
				</div>

				<div class="gap-30"></div>

				<div class="image-block-content">
					<span class="feature-icon float-left">@php echo $chooseus['icon1'] @endphp</span>
					<div class="feature-content">
						<h3>{{$chooseus['title1']}}</h3>
						<p>{{$chooseus['title1des']}}</p>
					</div>
				</div>
				<!--/ End 1st block -->

				<div class="image-block-content">
					<span class="feature-icon float-left">@php echo $chooseus['icon2'] @endphp</span>
					<div class="feature-content">
						<h3>{{$chooseus['title2']}}</h3>
						<p>{{$chooseus['title2des']}}</p>
					</div>
				</div>
				<!--/ End 1st block -->

				<div class="image-block-content">
					<span class="feature-icon float-left">@php echo $chooseus['icon3'] @endphp</span>
					<div class="feature-content">
						<h3>{{$chooseus['title3']}}</h3>
						<p>{{$chooseus['title3des']}}</p>
					</div>
				</div>
				<!--/ End 1st block -->

			</div>
		</div>
	</div>
</section>
<!--/ Image block end -->


<!-- Team start -->
<section id="team" class="team">
	<div class="container">
		<div class="row">
			<div class="col-md-12 heading">
				<span class="title-icon float-left"><i class="fa fa-weixin"></i></span>
				<h2 class="title">Meet with our Team <span class="title-desc">A Quality Experience Team with 4 years
						experience</span></h2>
			</div>
		</div><!-- Title row end -->

		<div class="row text-center">
			<div class="col-md-3 col-sm-6">
				<div class="team wow slideInLeft">
					<div class="img-hexagon">
						<img src="{{asset('asset/front/images/team/team1.jpg')}}" alt="">
						<span class="img-top"></span>
						<span class="img-bottom"></span>
					</div>
					<div class="team-content">
						<h3>Vosgi Varduhi</h3>
						<p>Web Designer</p>
						<div class="team-social">
							<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
							<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
							<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
							<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
							<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
						</div>
					</div>
				</div>
			</div>
			<!--/ Team 1 end -->
			<div class="col-md-3 col-sm-6">
				<div class="team wow slideInLeft">
					<div class="img-hexagon">
						<img src="{{asset('asset/front/images/team/team2.jpg')}}" alt="">
						<span class="img-top"></span>
						<span class="img-bottom"></span>
					</div>
					<div class="team-content">
						<h3>Robert Aleska</h3>
						<p>Web Designer</p>
						<div class="team-social">
							<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
							<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
							<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
							<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
							<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
						</div>
					</div>
				</div>
			</div>
			<!--/ Team 2 end -->
			<div class="col-md-3 col-sm-6">
				<div class="team wow slideInRight">
					<div class="img-hexagon">
						<img src="{{asset('asset/front/images/team/team3.jpg')}}" alt="">
						<span class="img-top"></span>
						<span class="img-bottom"></span>
					</div>
					<div class="team-content">
						<h3>Taline Voski</h3>
						<p>Web Designer</p>
						<div class="team-social">
							<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
							<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
							<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
							<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
							<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
						</div>
					</div>
				</div>
			</div>
			<!--/ Team 3 end -->
			<div class="col-md-3 col-sm-6">
				<div class="team animate wow slideInRight">
					<div class="img-hexagon">
						<img src="{{asset('asset/front/images/team/team4.jpg')}}" alt="">
						<span class="img-top"></span>
						<span class="img-bottom"></span>
					</div>
					<div class="team-content">
						<h3>Alban Spencer</h3>
						<p>Web Designer</p>
						<div class="team-social">
							<a class="fb" href="#"><i class="fa fa-facebook"></i></a>
							<a class="twt" href="#"><i class="fa fa-twitter"></i></a>
							<a class="gplus" href="#"><i class="fa fa-google-plus"></i></a>
							<a class="linkdin" href="#"><i class="fa fa-linkedin"></i></a>
							<a class="dribble" href="#"><i class="fa fa-dribbble"></i></a>
						</div>
					</div>
				</div>
			</div>
			<!--/ Team 4 end -->
		</div>
		<!--/ Content row end -->
	</div>
	<!--/ Container end -->
</section>
<!--/ Team end -->

<!-- Parallax 1 start -->
<section class="parallax parallax1">
	<div class="parallax-overlay"></div>
	<div class="container">
		<div class="row">
			<div class="col-md-12 text-center">
				<h2>Are You Ready to Buy This Template!</h2>
				<h3>Just Click Button and Use Your Own</h3>
				<p>
					<a href="#" class="btn btn-primary white">Purchase Now</a>
					<a href="#" class="btn btn-primary solid">Get In Touch</a>
				</p>
			</div>
		</div>
	</div><!-- Container end -->
</section><!-- Parallax 1 end -->


<!-- Pricing table start -->
<section id="pricing" class="pricing">
	<div class="container">
		<div class="row">
			<div class="col-md-12 heading">
				<span class="title-icon float-left"><i class="fa fa-university"></i></span>
				<h2 class="title">Pricing Table <span class="title-desc">We Love to Work with Passion</span></h2>
			</div>
		</div><!-- Title row end -->
		<div class="row">
			<!-- plan start -->
			<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay=".5s">
				<div class="plan text-center">
					<span class="plan-name">Basic <small>Monthly plan</small></span>
					<p class="plan-price"><sup class="currency">$</sup><strong>49</strong><sub>.99</sub></p>
					<ul class="list-unstyled">
						<li>100GB Monthly Bandwidth</li>
						<li>$100 Google AdWords</li>
						<li>100 Domain Hosting</li>
						<li>SSL Shopping Cart</li>
						<li>24/7 Live Support</li>
					</ul>
					<a class="btn btn-primary" href="#.">Sign Up</a>
				</div>
			</div><!-- plan end -->

			<!-- plan start -->
			<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="1s">
				<div class="plan text-center">
					<span class="plan-name">Standared <small>Monthly plan</small></span>
					<p class="plan-price"><sup class="currency">$</sup><strong>99</strong><sub>.99</sub></p>
					<ul class="list-unstyled">
						<li>100GB Monthly Bandwidth</li>
						<li>$100 Google AdWords</li>
						<li>100 Domain Hosting</li>
						<li>SSL Shopping Cart</li>
						<li>24/7 Live Support</li>
					</ul>
					<a class="btn btn-primary" href="#.">Sign Up</a>
				</div>
			</div><!-- plan end -->

			<!-- plan start -->
			<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="1.4s">
				<div class="plan text-center featured">
					<span class="plan-name">Professional <small>Monthly plan</small></span>
					<p class="plan-price"><sup class="currency">$</sup><strong>149</strong><sub>.99</sub></p>
					<ul class="list-unstyled">
						<li>100GB Monthly Bandwidth</li>
						<li>$100 Google AdWords</li>
						<li>100 Domain Hosting</li>
						<li>SSL Shopping Cart</li>
						<li>24/7 Live Support</li>
					</ul>
					<a class="btn btn-primary" href="#.">Sign Up</a>
				</div>
			</div><!-- plan end -->

			<!-- plan start -->
			<div class="col-md-3 col-sm-6 wow fadeInUp" data-wow-delay="1.6s">
				<div class="plan text-center">
					<span class="plan-name">Premium <small>Monthly plan</small></span>
					<p class="plan-price"><sup class="currency">$</sup><strong>399</strong><sub>.99</sub></p>
					<ul class="list-unstyled">
						<li>100GB Monthly Bandwidth</li>
						<li>$100 Google AdWords</li>
						<li>100 Domain Hosting</li>
						<li>SSL Shopping Cart</li>
						<li>24/7 Live Support</li>
					</ul>
					<a class="btn btn-primary" href="#.">Sign Up</a>
				</div>
			</div><!-- plan end -->
		</div>
		<!--/ Content row end -->
	</div>
	<!--/  Container end-->
</section>
<!--/ Pricing table end -->


<!-- Testimonial start-->
<section class="testimonial parallax parallax2">
	<div class="parallax-overlay"></div>
	<div class="container">
		<div class="row">
			<div id="testimonial-carousel" class="owl-carousel owl-theme text-center testimonial-slide">
				<div class="item">
					<div class="testimonial-thumb">
						<img src="{{asset('asset/front/images/team/testimonial1.jpg')}}" alt="testimonial">
					</div>
					<div class="testimonial-content">
						<p class="testimonial-text">
							Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still
							in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on
							purpose. Lorem Ipsum is that it as opposed to using.
						</p>
						<h3 class="name">Sarah Arevik<span>Chief Executive</span></h3>
					</div>
				</div>
				<div class="item">
					<div class="testimonial-thumb">
						<img src="{{asset('asset/front/images/team/testimonial2.jpg')}}" alt="testimonial">
					</div>
					<div class="testimonial-content">
						<p class="testimonial-text">
							Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still
							in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on
							purpose. Lorem Ipsum is that it as opposed to using.
						</p>
						<h3 class="name">Narek Bedros<span>Sr. Manager</span></h3>
					</div>
				</div>
				<div class="item">
					<div class="testimonial-thumb">
						<img src="{{asset('asset/front/images/team/testimonial3.jpg')}}" alt="testimonial">
					</div>
					<div class="testimonial-content">
						<p class="testimonial-text">
							Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites still
							in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on
							purpose. Lorem Ipsum is that it as opposed to using.
						</p>
						<h3 class="name">Taline Lucine<span>Sales Manager</span></h3>
					</div>
				</div>
			</div>
			<!--/ Testimonial carousel end-->
		</div>
		<!--/ Row end-->
	</div>
	<!--/  Container end-->
</section>
<!--/ Testimonial end-->


<!-- Clients start -->
<section id="clients" class="clients">
	<div class="container">
		<div class="row wow fadeInLeft">
			<div id="client-carousel" class="col-sm-12 owl-carousel owl-theme text-center client-carousel">
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="{{asset('asset/front/images/clients/client1.png')}}" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="{{asset('asset/front/images/clients/client2.png')}}" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="{{asset('asset/front/images/clients/client3.png')}}" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="{{asset('asset/front/images/clients/client4.png')}}" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="{{asset('asset/front/images/clients/client5.png')}}" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="{{asset('asset/front/images/clients/client6.png')}}" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="{{asset('asset/front/images/clients/client7.png')}}" alt="client">
					</a>
				</figure>
				<figure class="m-0 item client_logo">
					<a href="#">
						<img src="{{asset('asset/front/images/clients/client8.png')}}" alt="client">
					</a>
				</figure>
			</div><!-- Owl carousel end -->
		</div><!-- Main row end -->
	</div>
	<!--/ Container end -->
</section>
<!--/ Clients end -->

@endsection