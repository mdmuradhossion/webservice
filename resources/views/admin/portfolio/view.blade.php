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
                  			
                  			<div class="col-12">
                  				<h4>Portfolios View</h4>
                  			</div>
                    		
                  		</div>
                  		<div class="card-body">
	                    	
                    		<div class="row">
                    			<div class="col-6">
                    				<table class="table table-striped" style="text-transform: capitalize;">
                    					<tr>
                    						<td>Name:</td>
                    						<td>{{$data['name']}}</td>
                    					</tr>
                              <tr>
                                <td>Category:</td>
                                <td>{{Helper::get_data_by_id('name','categories','slug',$data['slug'])}}</td>
                              </tr>
                    					<tr>
                    						<td>Technology:</td>
                    						<td>{{$data['technology']}}</td>
                    					</tr>
                    					<tr>
                    						<td>Description:</td>
                    						<td>{{$data['description']}}</td>
                    					</tr>
                    				</table>
                    			</div>
                    			<div class="col-6">
                    				<div class="col-12" style="padding: 20px;">
                    					<img alt="image" src="{{asset('asset/upload/portfolio/'.$data['image'])}}" width="260">
                    				</div>
                    				<div class="col-12" style="padding: 20px;">
                    					<img alt="image" src="{{asset('asset/upload/portfolio/'.$data['full_image'])}}" width="400">
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