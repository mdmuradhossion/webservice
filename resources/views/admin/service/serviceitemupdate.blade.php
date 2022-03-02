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
                    		<h4>Service Item Update</h4>
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
			                    		<div class="col-xl-12 col-lg-12" id="reload">
			                    			<form action="{{route('admin-serviceitem-update',$data['id'])}}" method="POST" id="geniusform" enctype="multipart/form-data" >
			                    				{{csrf_field()}}
			                    				<div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Service</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<select class="form-control" name="ser_id" required>
							                        		
							                        		<?php echo Helper::getListInOption($data['ser_id'], 'id','name', 'services');?>
							                        	</select>
							                      	</div>
							                    </div>

				                    			<div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<input type="text" class="form-control" name="item_name" value="{{$data['item_name']}}" required>
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image one</label>
							                      	<div class="col-sm-12 col-md-7">
							                      		<?php $image = (!empty($data['image']))?$data['image']:'noimage.png';?><img src="{{asset('asset/upload/images/service/'.$image)}}"  width="100%" height="100" >
							                        	<input type="file" class="form-control" name="image" >
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image two</label>
							                      	<div class="col-sm-12 col-md-7">
							                      		<?php $image1 = (!empty($data['image1']))?$data['image1']:'noimage.png';?><img src="{{asset('asset/upload/images/service/'.$image1)}}" width="100%" height="100">
							                        	<input type="file" class="form-control" name="image1" >
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image three</label>
							                      	<div class="col-sm-12 col-md-7">
							                      		<?php $image2 = (!empty($data['image2']))?$data['image2']:'noimage.png';?><img src="{{asset('asset/upload/images/service/'.$image2)}}" width="100%" height="100">
							                        	<input type="file" class="form-control" name="image2" >
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Image four</label>
							                      	<div class="col-sm-12 col-md-7">
							                      		<?php $image3 = (!empty($data['image3']))?$data['image3']:'noimage.png';?><img src="{{asset('asset/upload/images/service/'.$image3)}}" width="100%" height="100">
							                        	<input type="file" class="form-control" name="image3" >
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<button type="submit" class="btn btn-primary geniusSubmit-btn">Create</button>
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