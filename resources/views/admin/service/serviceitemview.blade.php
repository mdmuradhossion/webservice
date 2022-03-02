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
                  			<div class="col-8">
                    			<h4>Service Item View</h4>
                    		</div>
                  		</div>
                  		<div class="card-body">	                    	
                    		<div class="row">
                    			<div class="col-xl-12 col-lg-6">
                    				<span id="message"></span>
                    			</div>
	                    		<div class="col-xl-12 col-lg-12">
	                    			<div class="row">
		                    			<div class="table-responsive">
					                      	<table class="table table-striped">
					                      		<tr>
					                      			<td>Name</td>
					                      			<td>{{Helper::get_data_by_id('name','services','id',$data['ser_id'])}}</td>
					                      		</tr>
					                      		<tr>
					                      			<td>Icon</td>
					                      			<td>{{$data['item_name']}}</td>
					                      		</tr>
					                      		<tr>
					                      			<td>Image One</td>
					                      			<td><?php $image = (!empty($data['image']))?$data['image']:'noimage.png';?><img src="{{asset('asset/upload/images/service/'.$image)}}" width="400"></td>
					                      		</tr>
					                      		<tr>
					                      			<td>Image Two</td>
					                      			<td><?php $image1 = (!empty($data['image1']))?$data['image1']:'noimage.png';?><img src="{{asset('asset/upload/images/service/'.$image1)}}" width="400"></td>
					                      		</tr>
					                      		<tr>
					                      			<td>Image Three</td>
					                      			<td><?php $image2 = (!empty($data['image2']))?$data['image2']:'noimage.png';?><img src="{{asset('asset/upload/images/service/'.$image2)}}" width="400"></td>
					                      		</tr>
					                      		<tr>
					                      			<td>Image Four</td>
					                      			<td><?php $image3 = (!empty($data['image3']))?$data['image3']:'noimage.png';?><img src="{{asset('asset/upload/images/service/'.$image3)}}" width="400"></td>
					                      		</tr>
					                      	</table>
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