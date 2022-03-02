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
                    		<h4>Portfolios Category Update</h4>
                  		</div>
                  		<div class="card-body">	                    	
                    		<div class="row">
                    			<div class="col-xl-12 col-lg-6">
                    				<span id="message"></span>
                    			</div>
	                    		<div class="col-xl-12 col-lg-12">
	                    			<div class="row">
			                    		<div class="col-xl-12 col-lg-12" id="reload" >
			                    			<form action="{{route('admin-category-update',$data['id'])}}" method="POST" id="geniusform">
			                    				{{csrf_field()}}	

				                    			<div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<input type="text" onload="convertToSlug(this.value)" onkeyup="convertToSlug(this.value)" class="form-control" name="name" value="{{$data['name']}}" required>
							                        	
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Slug</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<input type="text" class="form-control" name="slug" id="slug-text" value="{{$data['slug']}}" >
							                        	
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<select class="form-control" name="status" required>
							                        		<option value="1" <?php echo ($data['status'] == '1' )?'selected':'' ; ?>>Active</option>
							                        		<option value="0" <?php echo ($data['status'] == '0' )?'selected':'' ; ?>>Inactive</option>
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