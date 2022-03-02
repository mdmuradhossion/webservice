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
                    		<h4>Header update</h4>
                  		</div>
                  		<div class="card-body">	                    	
                    		<div class="row">
                    			<div class="col-xl-12 col-lg-6">
                    				<span id="message"></span>
                    			</div>
	                    		<div class="col-xl-12 col-lg-12">
	                    			<div class="row">
			                    		<div class="col-xl-12 col-lg-12" id="reload" >
			                    			<form action="{{route('admin-header-action')}}" method="POST" id="geniusform" enctype="multipart/form-data">
			                    				{{csrf_field()}}	

				                    			<div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<input type="text" class="form-control" name="sitetitle" value="{{$data['sitetitle']}}"  required>
							                        	
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta titel</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<input type="text" class="form-control" name="metatitel" value="{{$data['metatitel']}}">
							                        	
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta keywords</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<input type="text" class="form-control" name="metakeywords" value="{{$data['metakeywords']}}">    	
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta author</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<input type="text" class="form-control" name="metaauthor" value="{{$data['metaauthor']}}">    	
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Meta description</label>
							                      	<div class="col-sm-12 col-md-7"> 
							                        	<textarea name="metadescription" style="width: 100%;" rows="4">{{$data['metadescription']}}</textarea>   	
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3"></label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<center><img src="{{asset('asset/upload/images/'.$data['favicon'])}}"></center>   	
							                      	</div>
							                    </div>
							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Favicon</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<input type="file" class="form-control" name="favicon" >    	
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