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
                    			<h4>Service Item</h4>
                    		</div>
                    		<div class="col-4">
                  				<a href="{{route('admin-serviceitem-create')}}" class="btn btn-primary" style="float: right;"> Add Service Item</a>
                  			</div>
                  		</div>
                  		<div class="card-body">	                    	
                    		<div class="row">
                    			<div class="col-xl-12 col-lg-6">
                    				<span id="message"></span>
                    			</div>
	                    		<div class="col-xl-12 col-lg-12" id="reload">
	                    			<div class="row">
		                    			<div class="table-responsive">
					                      	<table class="table table-striped" id="table-1">
						                        <thead>
						                          	<tr>
						                            	<th class="text-center"> #</th>
						                            	<th>Service Name</th>
						                            	<th>Service Item Name</th>
						                            	<th>Image</th>
						                            	<th>Action</th>
						                          	</tr>
						                        </thead>
						                        <tbody>
						                        	<?php $i='1';?>
						                        	@foreach($data as $row)	
						                          	<tr>
						                            	<td>{{$i++}}</td>
						                            	<td>{{Helper::get_data_by_id('name','services','id',$row->ser_id)}}</td>
						                            	<td>{{$row->item_name}}</td>
						                            	<td>
						                            		<?php $image = (!empty($row->image))?$row->image:'noimage.png';?>
							                				<img src="{{asset('asset/upload/images/service/'.$image)}}" width="60">	

							                				<?php $image1 = (!empty($row->image1))?$row->image1:'noimage.png';?>
							                				<img src="{{asset('asset/upload/images/service/'.$image1)}}" width="60">	

							                				<?php $image2 = (!empty($row->image2))?$row->image2:'noimage.png';?>
							                				<img src="{{asset('asset/upload/images/service/'.$image2)}}" width="60">	

							                				<?php $image3 = (!empty($row->image3))?$row->image3:'noimage.png';?>
							                				<img src="{{asset('asset/upload/images/service/'.$image3)}}" width="60">	
						                            	</td>	         	
						                            	<td>
						                            		<a href="{{route('admin-service-item-view',$row->id)}}" class="btn btn-icon  btn-info"><i class="fas fa-eye" title="View"></i></a>
						                            		<a href="{{route('admin-serviceitem-edit',$row->id)}}" class="btn btn-icon  btn-primary"><i class="far fa-edit" title="Edit"></i></a>
						                            		<a href="#" class="btn btn-icon  btn-danger" title="Delete" onclick="_delete('{{route('admin-serviceitem-destroy',$row->id)}}')"><i class="fas fa-times"></i></a>

						                            	</td>
						                          	</tr>
						                          	@endforeach
						                         
						                        </tbody>
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