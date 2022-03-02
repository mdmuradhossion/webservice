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
                    		<h4>Service Update</h4>
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
			                    		<div class="col-xl-12 col-lg-12">
			                    			<form action="{{route('admin-service-update',$data['id'])}}" method="POST" id="geniusform">
			                    				{{csrf_field()}}
				                    			<div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<input type="text" class="form-control" name="name" value="{{$data['name']}}"  required>
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Icon</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<input type="text" class="form-control" name="icon" value="{{$data['icon']}}" required>
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
            </div>

      	</div>
    </section>
</div>


@endsection