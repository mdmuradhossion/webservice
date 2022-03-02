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
                    		<h4>Currency Update</h4>
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
			                    		<div class="col-xl-12 col-lg-12"  >
			                    			<form action="{{route('admin-currency-update',$currency['id'])}}" method="POST" id="geniusform">
			                    				{{csrf_field()}}
			                    				

				                    			<div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Title</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<input type="text" class="form-control" name="title" value="{{$currency['title']}}"  required>
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Country</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<select class="form-control" name="code"  required>
							                        		@foreach($data as $row)
							                        		<?php $sel = ($row->code == $currency['code'])?'selected':''; ?>
							                        		<option value="{{$row->code}}" {{$sel}}>{{$row->currency_name}}</option>
							                        		@endforeach
							                        	</select>
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Symbol Left</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<input type="text" class="form-control" name="symbol_left"  value="{{$currency['symbol_left']}}">
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Symbol Right</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<input type="text" class="form-control" name="symbol_right" value="{{$currency['symbol_right']}}">
							                      	</div>
							                    </div>

							                    <div class="form-group row mb-4">
							                      	<label class="col-form-label text-md-right col-12 col-md-3 col-lg-3">Status</label>
							                      	<div class="col-sm-12 col-md-7">
							                        	<select class="form-control" name="status" required>
							                        		
							                        		<option value="1" <?php echo ($currency['status'] == '1' )?'selected':'' ; ?> >Active</option>
							                        		<option value="0" <?php echo  ($currency['status'] == '0' )?'selected':'' ; ?>>Inactive</option>
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