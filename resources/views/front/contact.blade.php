@extends('layouts.front')

@section('content')

<div id="banner-area">
	<img src="{{asset('asset/front/images/banner/banner1.jpg')}}" alt="" />
	<div class="parallax-overlay"></div>
	<!-- Subpage title start -->
	<div class="banner-title-content">
		<div class="text-center">
			<h2>Contact Us</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="#">Home</a></li>
					<li class="breadcrumb-item text-white" aria-current="page">Contact Us</li>
				</ol>
			</nav>
		</div>
	</div><!-- Subpage title end -->
</div><!-- Banner area end -->

<!-- Main container start -->
<section id="main-container">
	<div class="container">
		<!-- Map start here -->
		<!-- <div class="map" id="map_canvas" data-latitude="51.507351" data-longitude="-0.127758"
			data-marker="images/marker.png"></div> -->
		<div class="map" ><iframe src="{{$data['map']}}" width="100%" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe></div>
		<!--/ Map end here -->

		<div class="gap-40"></div>

		<div class="row">
			<div class="col-md-7">
				<form id="contact-form" action="#" method="post" role="form">
					<div class="row">
						<div class="col-md-4">
							<div class="form-group">
								<label>Name</label>
								<input class="form-control" name="name" id="name" placeholder="" type="text" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Email</label>
								<input class="form-control" name="email" id="email" placeholder="" type="email" required>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Subject</label>
								<input class="form-control" name="subject" id="subject" placeholder="" required>
							</div>
						</div>
					</div>
					<div class="form-group">
						<label>Message</label>
						<textarea class="form-control" name="message" id="message" placeholder="" rows="10" required></textarea>
					</div>
					<div class="text-right"><br>
						<button class="btn btn-primary solid blank" type="submit">Send Message</button>
					</div>
				</form>
			</div>
			<div class="col-md-5">
				<div class="contact-info">
					<h3>Contact Details</h3>
					<p>{{$data['details']}}</p>
					<br>
					<p><i class="fa fa-home info"></i> {{$data['address']}}</p>
					<p><i class="fa fa-phone info"></i> {{$data['phone']}}</p>
					<p><i class="fa fa-envelope-o info"></i> {{$data['email']}}</p>
					<!-- <p><i class="fa fa-globe info"></i> www.bizcraft.com</p> -->
				</div>
			</div>
		</div>
	</div>
	<!--/ container end -->
</section>
<!--/ Main container end -->

@endsection