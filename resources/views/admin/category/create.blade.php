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
                    		<h4>Portfolios Category Create</h4>
                  		</div>
                  		<div class="card-body">	                    	
                    		<div class="row">
                    			<div class="col-xl-12 col-lg-6">
                    				<span id="message"></span>
                    			</div>
	                    		<div class="col-xl-12 col-lg-12">
	                    			<div class="row">
			                    		<div class="col-xl-12 col-lg-12" id="reload" >
			                    			<form action="{{route('admin-category-store')}}" method="POST" id="geniusform">
			                    				{{csrf_field()}}	

				                    			<div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Name</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<input type="text" onload="convertToSlug(this.value)" onkeyup="convertToSlug(this.value)" class="form-control" name="name"  required>
							                        	
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Slug</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<input type="text" class="form-control" name="slug" id="slug-text"  >
							                        	
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<select class="form-control" name="status" required>
							                        		<option value="1" >Active</option>
							                        		<option value="0" >Inactive</option>
							                        	</select>
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