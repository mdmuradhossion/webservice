@extends('layouts.admin')

@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
      	<div class="section-body">
       		<div class="row">
              	<div class="col-12">
                	<div class="card">
                  		<div class="card-header row" >
                  			<div class="col-xl-12 col-lg-6">
	                    		<h4>Sliders Upload</h4>
	                    	</div>
                    		<div class="col-xl-12 col-lg-6">
                				<span id="message"></span>
                			</div>
                  		</div>
                  		<div class="card-body" id="reload">
	                    	
                    		<div class="row">                   			
                    			
	                    		<div class="col-xl-6 col-lg-6" style="padding:10px;">
	                    			<form action="{{route('admin-logo-action')}}" class="dropzone" method="post" id="geniusform" style="padding: 5px; " enctype="multipart/form-data" >			 {{csrf_field()}}

		                      			<div class="form-group col-12">
		                      				<label>Slider 1</label><br>
		                      				<?php $image = (!empty($data->slider_1))?$data->slider_1:'noimage.png';?>
							                <img src="{{asset('asset/upload/images/'.$image)}}" style="width: 70%;height: 100px;">	           	
		                      			</div>
		                      			<div class="form-group col-12" >
					                      	<input type="file" class="custom-file-input" name="slider_1" id="customFile" >
					                      	<label class="custom-file-label" for="customFile">Choose file</label>
					                    </div>

					                    <div class="form-group col-12 ">
		                      				<label>Title</label>
							                <input type="text" class="form-control" name="title" value="{{$data->title}}">          	
		                      			</div>

		                      			<div class="form-group col-12 ">
		                      				<label >Text</label>
							                <input type="text" class="form-control" name="text" value="{{$data->text}}">          	
		                      			</div>

		                      			<div class="form-group col-12 ">
		                      				<label>Icon</label>
							                <input type="text" class="form-control" name="icon" value="{{$data->icon}}">          	
		                      			</div>

		                      			<div class="form-group col-12 ">
		                      				<label >Icon Title</label>
							                <input type="text" class="form-control" name="icon_title" value="{{$data->icon_title}}">          	
		                      			</div>

					                    <div class="form-group col-12" >
					                    	<button class="btn btn-primary mr-1 geniusSubmit-btn" type="submit" >Save</button>
					                    </div>
					                    
					                </form>
				                </div>

				                <div class="col-xl-6 col-lg-6" style="padding:10px;">
	                    			<form action="{{route('admin-logo-action')}}" class="dropzone" method="post" id="geniusform" style="padding: 5px; " enctype="multipart/form-data" >			 {{csrf_field()}}

		                      			<div class="form-group col-12">
		                      				<label>Slider 1</label><br>
		                      				<?php $image = (!empty($data->slider_2))?$data->slider_2:'noimage.png';?>
							                <img src="{{asset('asset/upload/images/'.$image)}}" style="width: 70%;height: 100px;">	           	
		                      			</div>
		                      			<div class="form-group col-12" >
					                      	<input type="file" class="custom-file-input" name="slider_2" id="customFile">
					                      	<label class="custom-file-label" for="customFile">Choose file</label>
					                    </div>

					                    <div class="form-group col-12 ">
		                      				<label>Title</label>
							                <input type="text" class="form-control" name="title2" value="{{$data->title2}}">          	
		                      			</div>

		                      			<div class="form-group col-12 ">
		                      				<label>Text</label>
							                <input type="text" class="form-control" name="text2" value="{{$data->text2}}">
		                      			</div>

		                      			<div class="form-group col-12 ">
		                      				<label>Icon</label>
							                <input type="text" class="form-control" name="icon2" value="{{$data->icon2}}">          	
		                      			</div>

		                      			<div class="form-group col-12 ">
		                      				<label >Icon Title</label>
							                <input type="text" class="form-control" name="icon_title2" value="{{$data->icon_title2}}">          	
		                      			</div>

					                    <div class="form-group col-12" >
					                    	<button class="btn btn-primary mr-1 geniusSubmit-btn" type="submit" >Save</button>
					                    </div>
					                    
					                </form>
				                </div>

				                <div class="col-xl-6 col-lg-6" style="padding:10px;">
	                    			<form action="{{route('admin-logo-action')}}" class="dropzone" method="post" id="geniusform" style="padding: 5px; " enctype="multipart/form-data" >			 {{csrf_field()}}

		                      			<div class="form-group col-12">
		                      				<label>Slider 1</label><br>
		                      				<?php $image = (!empty($data->slider_3))?$data->slider_3:'noimage.png';?>
							                <img src="{{asset('asset/upload/images/'.$image)}}" style="width: 70%;height: 100px;">	           	
		                      			</div>
		                      			<div class="form-group col-12" >
					                      	<input type="file" class="custom-file-input" name="slider_3" id="customFile">
					                      	<label class="custom-file-label" for="customFile">Choose file</label>
					                    </div>

					                    <div class="form-group col-12 ">
		                      				<label >Title</label>
							                <input type="text" class="form-control" name="title3" value="{{$data->title3}}">   	
		                      			</div>

		                      			<div class="form-group col-12 ">
		                      				<label>Text</label>
							                <input type="text" class="form-control" name="text3" value="{{$data->text3}}">          	
		                      			</div>

		                      			<div class="form-group col-12 ">
		                      				<label>Icon</label>
							                <input type="text" class="form-control" name="icon3" value="{{$data->icon3}}">          	
		                      			</div>

		                      			<div class="form-group col-12 ">
		                      				<label >Icon Title</label>
							                <input type="text" class="form-control" name="icon_title3" value="{{$data->icon_title3}}">          	
		                      			</div>

					                    <div class="form-group col-12" >
					                    	<button class="btn btn-primary mr-1 geniusSubmit-btn" type="submit" >Save</button>
					                    </div>
					                    
					                </form>
				                </div>

				                <div class="col-xl-6 col-lg-6" style="padding:10px;">
	                    			<form action="{{route('admin-logo-action')}}" class="dropzone" method="post" id="geniusform" style="padding: 5px; " enctype="multipart/form-data" >			 {{csrf_field()}}

		                      			<div class="form-group col-12">
		                      				<label>Slider 1</label><br>
		                      				<?php $image = (!empty($data->slider_4))?$data->slider_4:'noimage.png';?>
							                <img src="{{asset('asset/upload/images/'.$image)}}" style="width: 70%;height: 100px;">	           	
		                      			</div>
		                      			<div class="form-group col-12" >
					                      	<input type="file" class="custom-file-input" name="slider_4" id="customFile">
					                      	<label class="custom-file-label" for="customFile">Choose file</label>
					                    </div>

					                    <div class="form-group col-12">
		                      				<label>Title</label>
							                <input type="text" class="form-control" name="title4" value="{{$data->title4}}">
		                      			</div>

		                      			<div class="form-group col-12 ">
		                      				<label>Text</label>
							                <input type="text" class="form-control" name="text4" value="{{$data->text4}}">          	
		                      			</div>

		                      			<div class="form-group col-12 ">
		                      				<label>Icon</label>
							                <input type="text" class="form-control" name="icon4" value="{{$data->icon4}}">          	
		                      			</div>

		                      			<div class="form-group col-12 ">
		                      				<label >Icon Title</label>
							                <input type="text" class="form-control" name="icon_title4" value="{{$data->icon_title4}}">          	
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