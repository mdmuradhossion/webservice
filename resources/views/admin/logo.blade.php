@extends('layouts.admin')

@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
      	<div class="section-body">
       		<div class="row">
              	<div class="col-12">
                	<div class="card">
                  		<div class="card-header row">
                  			<div class="col-xl-12 col-lg-6">
	                    		<h4>Logo Upload</h4>
	                    	</div>
                    		<div class="col-xl-12 col-lg-6">
                				<span id="message"></span>
                			</div>
                  		</div>
                  		<div class="card-body" id="reload">
	                    	
                    		<div class="row" >
                    			
	                    		<div class="col-xl-4 col-lg-6"></div>
	                    		<div class="col-xl-4 col-lg-6" >
	                    			<form action="{{route('admin-logo-action')}}" class="dropzone" method="post" id="geniusform" style="padding: 10px;" enctype="multipart/form-data" >			 {{csrf_field()}}    		
		                      			<div class="form-group col-12" >
		                      				<?php $image = (!empty($data->logo))?$data->logo:'noimage.png';?>
		                      				<div id="logo">
							                <img src="{{asset('asset/upload/images/'.$image)}}" style="width: 100%;" id="img">	
							                </div>           	
		                      			</div>
		                      			<div class="form-group col-12" >
					                      	<input type="file" class="custom-file-input" name="logo" id="customFile" required>
					                      	<label class="custom-file-label" for="customFile">Choose file</label>
					                    </div>
					                    <div class="form-group col-12" >
					                    	<button class="btn btn-primary mr-1 geniusSubmit-btn" type="submit" >Save</button>
					                    </div>
					                    
					                </form>
				                </div>
				                <div class="col-xl-4 col-lg-6"></div>
				            </div>
	                    	
                  		</div>
                	</div>
              	</div>
            </div>

      	</div>
    </section>
</div>
@endsection