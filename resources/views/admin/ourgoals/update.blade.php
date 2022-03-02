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
                    		<h4>Our Goal Update</h4>
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
			                    			<form action="{{route('admin-ourgoal-update',$data['id'])}}" method="POST" id="geniusform">
			                    				{{csrf_field()}}

				                    			<div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<input type="text" class="form-control" name="title" required value="{{$data['title']}}" >
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<textarea name="description" rows="4" style="width: 100%;" required>{{$data['description']}}</textarea>
							                      	</div>
							                    </div>	            

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Icon</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<input type="text" class="form-control" name="icon" required value="{{$data['icon']}}">
							                      	</div>
							                    </div>	

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<select class="form-control" name="status">
							                        		@php echo ($data['status'] == '1' )?'selected':'' ; @endphp
							                        		<option value="1" @php echo ($data['status'] == '1' )?'selected':'' ; @endphp >Active</option>
							                        		<option value="0" @php echo ($data['status'] == '0' )?'selected':'' ; @endphp>Inactive</option>
							                        	</select>
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