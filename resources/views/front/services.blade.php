@extends('layouts.front')

@section('content')

<div id="banner-area">
	<img src="{{asset('asset/front/images/banner/banner1.jpg')}}" alt="" />
	<div class="parallax-overlay"></div>
	<!-- Subpage title start -->
	<div class="banner-title-content">
		<div class="text-center">
			<h2>Service</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
					<li class="breadcrumb-item text-white" aria-current="page">Service</li>
				</ol>
			</nav>
		</div>
	</div><!-- Subpage title end -->
</div><!-- Banner area end -->

<!-- Main container start -->
<section id="main-container">
	<div class="container">
		<!-- Services -->
		<div class="row">
			<div class="col-md-12 heading">
				<span class="title-icon classic float-left"><i class="fa fa-cogs"></i></span>
				<h2 class="title classic">Our Services</h2>
			</div>
		</div>
		<div class="row">
			@foreach($service as $row)
			<div class="col-md-3 col-sm-3 mb-5 wow fadeInDown" data-wow-delay=".5s">
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
		</div><!-- Content 2nd row end -->
		<!-- Services end -->
	</div>
	<!--/ 1st container end -->

	<div class="gap-60"></div>

	<!-- Testimonial start-->
	<div class="testimonial parallax parallax3">
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
								Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites
								still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes
								on purpose. Lorem Ipsum is that it as opposed to using.
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
								Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites
								still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes
								on purpose. Lorem Ipsum is that it as opposed to using.
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
								Lorem Ipsum as their default model text, and a search for ‘lorem ipsum’ will uncover many web sites
								still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes
								on purpose. Lorem Ipsum is that it as opposed to using.
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
	</div>
	<!--/ Testimonial end-->

	<div class="gap-60"></div>

	<div class="container">
		<!-- 2nd container start -->

		<!-- Pricing table start -->
		<div id="pricing" class="pricing">
			<div class="row">
				<div class="col-md-12 heading">
					<span class="title-icon classic float-left"><i class="fa fa-university"></i></span>
					<h2 class="title classic">Pricing Table</h2>
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
		<!--/ Pricing table end -->
	</div><!-- 2nd container end -->
</section>
<!--/ Main container end -->

<section class="call-to-action">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">
				<h3>Join with BizCraft and Give Your Website a Brand New Look</h3>
				<a href="#" class="float-right btn btn-primary white">Purchase Now</a>
			</div>
		</div>
	</div>
</section>

@endsection