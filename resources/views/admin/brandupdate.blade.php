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
                    		<h4>Brand Update</h4>
                  		</div>
                  		<div class="card-body">
	                    	
                    		<div class="row">
                    			<div class="col-xl-12 col-lg-6">
                    				<span id="message"></span>
                    			</div>
	                    		<div class="col-xl-12 col-lg-6" id="reload">
	                    			<form action="{{route('admin-brand-update',$data['id'])}}" class="dropzone" method="post" id="geniusform" style="padding: 10px;" enctype="multipart/form-data" >			 {{csrf_field()}} 

	                    				<div class="form-group col-12 row" >
					                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Brand Name</label>
					                      	<div class="col-sm-12 col-md-7">
	                      						<input type="text" class="form-control" name="name" placeholder="Input Name" value="{{$data['name']}}" required>
	                      					</div>
					                    </div>
					                    <div class="form-group col-12 row" >
					                    	<div class="ol-12 col-md-3 col-lg-3"></div>
					                    	<div class="col-sm-12 col-md-7">
						                    	<img src="{{asset('asset/upload/brand/'.$data['image'])}}"  id="img">
						                    </div>
					                    </div>
		                      			<div class="form-group col-12 row" >
		                      				<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image</label>
		                      				<div class="col-sm-12 col-md-7">
						                      	<input type="file" class="form-control" name="image">
						                    </div>
					                    </div>
					                    <div class="form-group col-12" >
					                    	<button class="btn btn-primary mr-1 geniusSubmit-btn" type="submit" >Save</button>
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