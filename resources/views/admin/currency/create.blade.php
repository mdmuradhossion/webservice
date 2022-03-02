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
                    		<h4>Currency Create</h4>
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
			                    			<form action="{{route('admin-currency-store')}}" method="POST" id="geniusform">
			                    				{{csrf_field()}}
			                    				

				                    			<div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<input type="text" class="form-control" name="title"  required>
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Country</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<select class="form-control" name="code"  required>
							                        		@foreach($data as $row)
							                        		<option value="{{$row->code}}" >{{$row->currency_name}}</option>
							                        		@endforeach
							                        	</select>
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Symbol Left</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<input type="text" class="form-control" name="symbol_left" >
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Symbol Right</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<input type="text" class="form-control" name="symbol_right" >
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">status</label>
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