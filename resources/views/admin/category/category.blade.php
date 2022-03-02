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
                    			<h4>Portfolios Category</h4>
                    		</div>
                    		<div class="col-4">
                  				<a href="{{route('category-create')}}" class="btn btn-primary" style="float: right;"> Add Category</a>
                  			</div>
                  			
                  		</div>
                  		<div class="card-body">	                   	
                    		<div class="row">
                    			<div class="col-xl-12 col-lg-6">
                    				<span id="message"></span>
                    			</div>
	                    		<div class="col-xl-12 col-lg-12" id="reload">
	                    			<div class="row">
		                    			<div class="table-responsive" >
					                      	<table class="table table-striped" id="table-1">
						                        <thead>
						                          	<tr>
						                            	<th class="text-center"> #</th>
						                            	<th>Name</th>
						                            	<th>Slug</th>
						                            	<th>Status</th>
						                            	<th>Action</th>
						                          	</tr>
						                        </thead>
						                        <tbody>
						                        	<?php $i='1';?>
						                        	@foreach($data as $row)	
						                          	<tr>
						                            	<td>{{$i++}}</td>
						                            	<td>{{$row->name}}</td>
						                            	<td>{{$row->slug}}</td>
						                            	<td><?php echo (!empty($row->status == 1))?'<span class="badge badge-success">Active</span> ':'<span class="badge badge-warning">Inactive</span>';?>
						                            	</td>
						                            	<td><a href="{{route('admin-category-edit',$row->id)}}" class="btn btn-icon  btn-primary"><i class="far fa-edit" title="Edit"></i></a>
						                            		<a href="#" class="btn btn-icon  btn-danger" onclick="_delete('{{route('admin-category-destroy',$row->id)}}')" title="Delete" ><i class="fas fa-times"></i></a></td>
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