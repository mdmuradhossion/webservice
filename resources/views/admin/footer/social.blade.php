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
                    		<h4>Social</h4>
                  		</div>
                  		<div class="card-body">	                    	
                    		<div class="row">
                    			<div class="col-xl-12 col-lg-6">
                    				<span id="message" ></span>
                    			</div>
	                    		<div class="col-xl-12 col-lg-12">
	                    			<form action="{{route('admin-footer-update-social')}}" method="POST" id="geniusform">
	                    				{{csrf_field()}}
		                    			<div class="form-group row mb-4">
					                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Twitter</label>
					                      	<div class="col-sm-12 col-md-7">
					                        	<input type="text" class="form-control" name="twitter" value="{{$data['twitter']}}" required>
					                      	</div>
					                      	<div class="col-sm-12 col-md-2">
					                      		<div class="pretty p-switch p-fill">
							                      	<input type="checkbox" name="is_twitter" value="1" {{$data["is_twitter"]==1?"checked":""}}>
							                      	<div class="state p-success">
							                        	<label>Active</label>
							                      	</div>
							                    </div>
					                      	</div>
					                    </div>

					                    <div class="form-group row mb-4">
					                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Facebook</label>
					                      	<div class="col-sm-12 col-md-7">
					                        	<input type="text" class="form-control" name="facebook" value="{{$data['facebook']}}" required>
					                      	</div>
					                      	<div class="col-sm-12 col-md-2">
					                      		<div class="pretty p-switch p-fill">
							                      	<input type="checkbox" name="is_facebook" value="1" {{$data["is_facebook"]==1?"checked":""}}>
							                      	<div class="state p-success">
							                        	<label>Active</label>
							                      	</div>
							                    </div>
					                      	</div>
					                    </div>

					                    <div class="form-group row mb-4">
					                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Linkedin</label>
					                      	<div class="col-sm-12 col-md-7">
					                        	<input type="text" class="form-control" name="linkedin" value="{{$data['linkedin']}}" required>

					                      	</div>
					                      	<div class="col-sm-12 col-md-2">
					                      		<div class="pretty p-switch p-fill">
							                      	<input type="checkbox" name="is_linkedin" value="1" {{$data["is_linkedin"]==1?"checked":""}}>
							                      	<div class="state p-success">
							                        	<label>Active</label>
							                      	</div>
							                    </div>
					                      	</div>
					                    </div>

					                    <div class="form-group row mb-4">
					                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Pinterest</label>
					                      	<div class="col-sm-12 col-md-7">
					                        	<input type="text" class="form-control" name="pinterest" value="{{$data['pinterest']}}" required>
					                      	</div>
					                      	<div class="col-sm-12 col-md-2">
					                      		<div class="pretty p-switch p-fill">
							                      	<input type="checkbox" name="is_pinterest" value="1" {{$data["is_pinterest"]==1?"checked":""}}>
							                      	<div class="state p-success">
							                        	<label>Active</label>
							                      	</div>
							                    </div>
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