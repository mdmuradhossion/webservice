@extends('layouts.admin')

@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
      	<div class="section-body">
       		<div class="row">
              	<div class="col-12">
                	<div class="card">
                  		<div class="card-header">
                    		<h4>Contact Us</h4>
                  		</div>
                  		<div class="card-body">	                    	
                    		<div class="row">
                    			<div class="col-xl-12 col-lg-6">
                    				<span id="message"></span>
                    			</div>
	                    		<div class="col-xl-12 col-lg-12">
	                    			<div class="row">
		                    			<div class="col-xl-12 col-lg-6">
		                    				<span id="message"></span>
		                    			</div>
			                    		<div class="col-xl-12 col-lg-12" id="reload" >
			                    			<form action="{{route('admin-contact-update')}}" method="POST" id="geniusform">
			                    				{{csrf_field()}}

				                    			<div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Phone</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<input type="text" class="form-control" name="phone" value="{{$data['phone']}}"  required>
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<input type="email" class="form-control" name="email" value="{{$data['email']}}">
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Address</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<textarea name="address" rows="4" style="width: 100%;">{{$data['address']}}</textarea>
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Details</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<textarea name="details" rows="4" style="width: 100%;">{{$data['details']}}</textarea>
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Map</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<input type="text" class="form-control" name="map" value="{{$data['map']}}">
							                      	</div>
							                    </div>

							                    
							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<button type="submit" class="btn btn-primary geniusSubmit-btn">Update</button>
							                      	</div>
							                    </div>
						                    </form>
						                </div>
						            </div>
				                </div>				                
				            </div>
	                    	
                  		</div>
                	</div>
              	</div>
            </div>

      	</div>
    </section>
</div>


@endsection