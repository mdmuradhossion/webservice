@extends('layouts.admin')

@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
         <div class="section-body">
            <div class="row">
              	<div class="col-12 col-md-4 col-lg-4">
	                <div class="pricing">
	                  	<div class="pricing-title">
	                    	Basic
	                  	</div>
	                 	<div class="pricing-padding">
		                    <div class="pricing-price">
		                      <div>${{$data['basic']}}</div>
		                      <div>per service</div>
		                    </div>
		                    <!-- <div class="pricing-details">
			                     <div class="pricing-item">
			                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
			                        <div class="pricing-item-label">1 user agent</div>
			                    </div>
			                    <div class="pricing-item">
			                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
			                        <div class="pricing-item-label">Core features</div>
			                    </div>
			                    <div class="pricing-item">
			                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
			                        <div class="pricing-item-label">1GB storage</div>
			                    </div>
			                    <div class="pricing-item">
			                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
			                        <div class="pricing-item-label">2 Custom domain</div>
			                    </div>
			                    <div class="pricing-item">
			                        <div class="pricing-item-icon bg-danger text-white"><i class="fas fa-times"></i></div>
			                        <div class="pricing-item-label">Live Support</div>
			                    </div>
		                    </div> -->
	                  	</div>
		                <!-- <div class="pricing-cta">
		                    <a href="#">Subscribe <i class="fas fa-arrow-right"></i></a>
		                </div> -->
	                </div>
              	</div>
	            
	            <div class="col-12 col-md-4 col-lg-4">
	                <div class="pricing">
	                  	<div class="pricing-title">
	                    	Standard
	                  	</div>
	                 	<div class="pricing-padding">
		                    <div class="pricing-price">
		                      <div>${{$data['standard']}}</div>
		                      <div>per service</div>
		                    </div>
		                    <!-- <div class="pricing-details">
			                     <div class="pricing-item">
			                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
			                        <div class="pricing-item-label">1 user agent</div>
			                    </div>
			                    <div class="pricing-item">
			                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
			                        <div class="pricing-item-label">Core features</div>
			                    </div>
			                    <div class="pricing-item">
			                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
			                        <div class="pricing-item-label">1GB storage</div>
			                    </div>
			                    <div class="pricing-item">
			                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
			                        <div class="pricing-item-label">2 Custom domain</div>
			                    </div>
			                    <div class="pricing-item">
			                        <div class="pricing-item-icon bg-danger text-white"><i class="fas fa-times"></i></div>
			                        <div class="pricing-item-label">Live Support</div>
			                    </div>
		                    </div> -->
	                  	</div>
		                <!-- <div class="pricing-cta">
		                    <a href="#">Subscribe <i class="fas fa-arrow-right"></i></a>
		                </div> -->
	                </div>
              	</div>

              	<div class="col-12 col-md-4 col-lg-4">
	                <div class="pricing">
	                  	<div class="pricing-title">
	                    	Professional
	                  	</div>
	                 	<div class="pricing-padding">
		                    <div class="pricing-price">
		                      <div>${{$data['professional']}}</div>
		                      <div>per service</div>
		                    </div>
		                    <!-- <div class="pricing-details">
			                     <div class="pricing-item">
			                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
			                        <div class="pricing-item-label">1 user agent</div>
			                    </div>
			                    <div class="pricing-item">
			                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
			                        <div class="pricing-item-label">Core features</div>
			                    </div>
			                    <div class="pricing-item">
			                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
			                        <div class="pricing-item-label">1GB storage</div>
			                    </div>
			                    <div class="pricing-item">
			                        <div class="pricing-item-icon"><i class="fas fa-check"></i></div>
			                        <div class="pricing-item-label">2 Custom domain</div>
			                    </div>
			                    <div class="pricing-item">
			                        <div class="pricing-item-icon bg-danger text-white"><i class="fas fa-times"></i></div>
			                        <div class="pricing-item-label">Live Support</div>
			                    </div>
		                    </div> -->
	                  	</div>
		                <!-- <div class="pricing-cta">
		                    <a href="#">Subscribe <i class="fas fa-arrow-right"></i></a>
		                </div> -->
	                </div>
              	</div>
	              
            </div>
        </div>
    </section>
</div>


@endsection