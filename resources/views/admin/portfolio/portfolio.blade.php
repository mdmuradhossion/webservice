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
                    		<h4>Portfolios Create</h4>
                  		</div>
                  		<div class="card-body">
	                    	
                    		<div class="row">
                    			<div class="col-xl-12" >
                    				<span id="message"></span>
                    			</div>
	                    		<div class="col-xl-12" id="reload">
	                    			<form action="{{route('admin-portfolio-action')}}"  method="post" id="geniusform" style="padding: 10px;" enctype="multipart/form-data" >			 {{csrf_field()}} 

	                    				<div class="form-group col-12 row" >
	                    					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Portfolio Name</label>
	                    					<div class="col-sm-12 col-md-7">
	                      						<input type="text" class="form-control" name="name" placeholder="Input Name" required>
	                      					</div>
	                    				</div>
	                    				<div class="form-group col-12 row" >
	                    					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Category</label>
	                    					<div class="col-sm-12 col-md-7">
                      							<select class="form-control" name="slug" required>
                      								<option value="">Please Select</option>
                      								@foreach($data as $row)
                      								<option value="{{$row->slug}}">{{$row->name}}</option>
                      								@endforeach
                      							</select>
                      						</div>
	                    				</div> 
	                    				<div class="form-group col-12 row" >
	                    					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Technology</label>
	                    					<div class="col-sm-12 col-md-7">
                      							<input type="text" class="form-control" name="technology" placeholder="Input technology" >
                      						</div>
	                    				</div> 
	                    				<div class="form-group col-12 row" >
	                    					<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Description</label>
	                    					<div class="col-sm-12 col-md-7">
                      							<textarea class="md-textarea" name="description" id="form16" rows="8" style="width: 100%;"></textarea>
                      						</div>
	                    				</div>  		
		                      			<div class="form-group col-12 row" >
		                      				<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Small image</label>
		                      				<div class="col-sm-12 col-md-7">	
						                      	<input type="file" class="form-control" name="image" id="" required>
						                      	
						                    </div>
					                    </div>
		                      			<div class="form-group col-12 row" >
		                      				<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Big image</label>
		                      				<div class="col-sm-12 col-md-7">
						                      	<input type="file" class="form-control" name="full_image" id="customFile" required>
						                     </div>
					                    </div>

					                    <div class="form-group col-12" style="text-align: center;">
					                    	<button class="btn btn-primary mr-1 geniusSubmit-btn" type="submit" >Create</button>
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