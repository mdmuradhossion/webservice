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
                    		<h4>Footer</h4>
                  		</div>
                  		<div class="card-body">	                    	
                    		<div class="row">
                    			<div class="col-xl-12 col-lg-6">
                    				<span id="message"></span>
                    			</div>
	                    		<div class="col-xl-12 col-lg-12">
	                    			<center><h6>General</h6></center>
	                    			<form action="{{route('admin-footer-update')}}" method="POST" id="geniusform">
	                    				{{csrf_field()}}
		                    			<div class="form-group row mb-4">
					                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Email</label>
					                      	<div class="col-sm-12 col-md-7">
					                        	<input type="email" class="form-control" name="email" value="{{$data['email']}}" required>
					                      	</div>
					                    </div>

					                    <div class="form-group row mb-4">
					                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Phone</label>
					                      	<div class="col-sm-12 col-md-7">
					                        	<input type="text" class="form-control" name="phone" value="{{$data['phone']}}" required>
					                      	</div>
					                    </div>

					                    <div class="form-group row mb-4">
					                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Address</label>
					                      	<div class="col-sm-12 col-md-7">
					                        	<!-- <input type="text" class="form-control" > -->
					                        	<textarea name="address" class="address" id="address" rows="4" style="width: 100%;" required>{{$data['address']}}</textarea>

					                      	</div>
					                    </div>

					                    <div class="form-group row mb-4">
					                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
					                      	<div class="col-sm-12 col-md-7">
					                        	<textarea name="description" id="description" rows="4" style="width: 100%;" required>{{$data['description']}}</textarea>
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
    </section>
</div>


@endsection