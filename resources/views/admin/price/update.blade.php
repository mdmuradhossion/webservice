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
                    		<h4>Price Create</h4>
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
			                    		<div class="col-xl-12 col-lg-12" >
			                    			<form action="{{route('admin-price-update',$price['id'])}}" method="POST" id="geniusform">
			                    				{{csrf_field()}}

			                    				<div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Service Item</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<select class="form-control" name="ser_item_id"  required>
							                        		<option value="">Please Select</option>
							                        		@foreach($data as $row)
							                        		
							                        		<option value="{{$row->id}}" <?php print ($row->id == $price['ser_item_id'])?'selected':'' ?> >{{$row->item_name}}</option>
							                        		@endforeach
							                        	</select>
							                      	</div>
							                    </div>

				                    			<div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Basic</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<input type="text" class="form-control" name="basic" value="{{$price['basic']}}" required>
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Standard</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<input type="text" class="form-control" name="standard" value="{{$price['standard']}}" required>
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Professional</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<input type="text" class="form-control" name="professional" value="{{$price['professional']}}" required>
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