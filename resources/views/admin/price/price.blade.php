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
                    			<h4>Service price</h4>
                    		</div>
                    		<div class="col-4">
                  				<a href="{{route('price-create')}}" class="btn btn-primary" style="float: right;"> Add Price</a>
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
						                            	<th>Service</th>
						                            	<th>Basic</th>
						                            	<th>Standard</th>
						                            	<th>Professional</th>
						                            	<th>Action</th>
						                          	</tr>
						                        </thead>
						                        <tbody>
						                        	<?php $i='1';?>
						                        	@foreach($data as $row)	
						                          	<tr>
						                            	<td>{{$i++}}</td>
						                            	<td>{{Helper::get_data_by_id('item_name','servicesitems','id',$row->ser_item_id)}}</td>
						                            	<td>${{$row->basic}}</td>
						                            	<td>${{$row->standard}}</td>
						                            	<td>${{$row->professional}}</td>
						                            	<td>
						                            		<a href="{{route('admin-price-view',$row->id)}}" class="btn btn-icon  btn-info"><i class="fas fa-eye" title="View"></i></a>
						                            		<a href="{{route('admin-price-edit',$row->id)}}" class="btn btn-icon  btn-primary"><i class="far fa-edit" title="Edit"></i></a>
						                            		<a href="#" class="btn btn-icon  btn-danger" title="Delete" onclick="_delete('{{route('admin-price-destroy',$row->id)}}')"><i class="fas fa-times"></i></a>

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