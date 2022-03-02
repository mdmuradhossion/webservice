@extends('layouts.front')

@section('content')
<div id="banner-area">
	<img src="{{asset('asset/front/images/banner/banner1.jpg')}}" alt="" />
	<div class="parallax-overlay"></div>
	<!-- Subpage title start -->
	<div class="banner-title-content">
		<div class="text-center">
			<h2>404 Page</h2>
			<nav aria-label="breadcrumb">
				<ol class="breadcrumb justify-content-center">
					<li class="breadcrumb-item"><a href="{{url('/')}}">Home</a></li>
					<li class="breadcrumb-item text-white" aria-current="page">404 Page</li>
				</ol>
			</nav>
		</div>
	</div><!-- Subpage title end -->
</div><!-- Banner area end -->

<!-- Main container start -->
<section id="main-container">
	<div class="container">
		<div class="error-page text-center">
			<div class="error-code">
				<strong>404</strong>
			</div>
			<div class="error-message">
				<h3>Oops... Page Not Found!</h3>
			</div>
			<div class="error-body">
				Try using the button below to go to main page of the site <br />
				<a href="{{url('/')}}" class="btn btn-primary solid blank"><i class="fa fa-arrow-circle-left">&nbsp;</i> Go to
					Home</a>
			</div>
		</div>
	</div>
</section>
<!--/ Main container end -->
@endsection