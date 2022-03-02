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
                    			<h4>Service View</h4>
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
					                      			<td>{{$data['name']}}</td>
					                      		</tr>
					                      		<tr>
					                      			<td>Icon</td>
					                      			<td>{{$data['icon']}}</td>
					                      		</tr>
					                      		<tr>
					                      			<td>Description</td>
					                      			<td>{{$data['description']}}</td>
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