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
                    		<h4>Why Choose Us</h4>
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
			                    			<form action="{{route('admin-chooseus-update')}}" method="POST" id="geniusform">
			                    				{{csrf_field()}}

				                    			<div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<input type="text" class="form-control" name="title"  value="{{$data['title']}}" required>
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Sub Title</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<input type="text" class="form-control" name="subtitle" value="{{$data['subtitle']}}" >
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<textarea name="description" rows="4" style="width: 100%;">{{$data['description']}}</textarea>
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Contant Title One</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<input type="text" class="form-control" name="title1" value="{{$data['title1']}}">
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Contant Description One</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<textarea name="title1des" rows="4" style="width: 100%;">{{$data['title1des']}}</textarea>
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Contant Icon One</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<input type="text" class="form-control" name="icon1" value="{{$data['icon1']}}">
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Contant Title Two</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<input type="text" class="form-control" name="title2" value="{{$data['title2']}}">
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Contant Description Two</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<textarea name="title2des" rows="4" style="width: 100%;">{{$data['title2des']}}</textarea>
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Contant Icon Two</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<input type="text" class="form-control" name="icon2" value="{{$data['icon2']}}">
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Contant Title Three</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<input type="text" class="form-control" name="title3" value="{{$data['title3']}}">
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Contant Description Three</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<textarea name="title3des" rows="4" style="width: 100%;">{{$data['title3des']}}</textarea>
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Contant Icon Three</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<input type="text" class="form-control" name="icon3" value="{{$data['icon3']}}">
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4" >
				                      				<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Banner Image View</label>
				                      				<div class="col-sm-12 col-md-7">
					                      				<div id="logo">
										                	<img src="{{asset('asset/upload/choose/'.$data['image'])}}"  height="100" id="img">	
										                </div> 
										            </div>
							                    </div>

							                    <div class="form-group row mb-4" >
				                      				<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Banner Image</label>
				                      				<div class="col-sm-12 col-md-7">	
								                      	<input type="file" class="form-control" name="image" >
								                      	
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