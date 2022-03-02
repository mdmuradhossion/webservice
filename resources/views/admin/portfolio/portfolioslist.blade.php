@extends('layouts.admin')

@section('content')
<!-- Main Content -->
<div class="main-content">
    <section class="section">
      	<div class="section-body">
       		<div class="row">
              	<div class="col-12">
                	<div class="card">
                  		<div class="card-header row">
                  			
                  			<div class="col-8">
                  				<h4>Portfolios List</h4>
                  			</div>
                  			<div class="col-4">
                  				<a href="{{route('admin-portfolios')}}" class="btn btn-primary" style="float: right;"> Add Portfolios</a>
                  			</div>
                    		
                  		</div>
                  		<div class="card-body">
	                    	
                    		<div class="row">
                    			<div class="table-responsive " id="reload">
			                      	<table class="table table-striped" id="table-1">
				                        <thead>
				                          	<tr>
				                            	<th class="text-center"> #</th>
				                            	<th>Name</th>
				                            	<th width="400">Description</th>
				                            	<th>Image</th>
				                            	<th>Action</th>
				                          	</tr>
				                        </thead>
				                        <tbody>
				                        	<?php $i='1';?>
				                        	@foreach($data as $row)	
				                          	<tr>
				                            	<td>{{$i++}}</td>
				                            	<td>{{$row->name}}</td>
				                            	<td>{{$row->description}}</td>
				                            	<td>
				                            		<?php $image = (!empty($row->image)) ? $row->image :'noimage.png';?>
				                              		<img alt="image" src="{{asset('asset/upload/portfolio/'.$image)}}" width="45">
				                              		<?php $imagebig = (!empty($row->full_image)) ? $row->full_image :'noimage.png';?>
				                              		<img alt="image" src="{{asset('asset/upload/portfolio/'.$imagebig)}}" width="65">
				                            	</td>
				                            	<td>
				                            		<a href="{{route('admin-portfolio-view',$row->id)}}" class="btn btn-icon  btn-info"><i class="fas fa-eye" title="View"></i></a>
				                            		<a href="{{route('admin-portfolio-edit',$row->id)}}" class="btn btn-icon  btn-primary"><i class="far fa-edit" title="Edit"></i></a>
				                            		<a href="#" class="btn btn-icon  btn-danger" title="Delete" onclick="_delete('{{route('admin-portfolios-destroy',$row->id)}}')"><i class="fas fa-times"></i></a>

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
    </section>
</div>

@endsection