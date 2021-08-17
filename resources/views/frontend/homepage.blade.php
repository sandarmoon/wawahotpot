@extends('frontend/front_template')

@section('content')

<div class="container-fluid">

		<div class="bg-white py-2 " id="curry-list">
			<div class="col-md-12 p-0">
				<div class="row m-0">

					@foreach($currys as $data)
						<div class="card shadow col-xl-2 col-md-3  mb-3 shadow p-0 menu-card" >
							<div>
								<img src="{{asset($data->photo)}}" class="card-img-top">
							</div>
							<div class="card-body text-center" style="padding: 5px;">
								<h4>{{$data->name}}</h4>
								<h4>Price: <span class="text-warning">{{$data->price}}K<span></h4>
								
							</div>
							<div class="card-footer bg-gradient-primary text-white addtocard" data-id="{{$data->id}}" data-name="{{$data->name}}" data-price="{{$data->price}}" data-photo="{{$data->photo}}" data-category="{{$data->category->name}}">
								<p class="text-center m-0"><a href="heo.html" onclick="return false;" class="text-white ">Add to Cart</a></p>
							</div>
						</div>

					@endforeach
					
				</div>
				
				
			</div>
		</div>

		<div class="bg-white py-2 d-none" id="meat-list">
			<div class="col-md-12 p-0">
				<div class="row m-0">

					@foreach($meats as $data)
						<div class="card shadow col-xl-2 col-md-3  mb-3 shadow p-0 menu-card" >
							<div>
								<img src="{{asset($data->photo)}}" class="card-img-top">
							</div>
							<div class="card-body text-center" style="padding: 5px;">
								<h4>{{$data->name}}</h4>
								<h4>Price: <span class="text-warning">{{$data->price}}K<span></h4>
								
							</div>
							<div class="card-footer bg-gradient-primary text-white addtocard" data-id="{{$data->id}}" data-name="{{$data->name}}" data-price="{{$data->price}}" data-photo="{{$data->photo}}" data-category="{{$data->category->name}}">
								<p class="text-center m-0"><a href="heo.html" onclick="return false;" class="text-white ">Add to Cart</a></p>
							</div>
						</div>

					@endforeach
					
				</div>
				
				
			</div>
		</div>

		<div class="bg-white py-2 d-none" id="seafood-list">
			<div class="col-md-12 p-0">
				<div class="row m-0">

					@foreach($seafoods as $data)
						<div class="card shadow col-xl-2 col-md-3  mb-3 shadow p-0 menu-card" >
							<div>
								<img src="{{asset($data->photo)}}" class="card-img-top">
							</div>
							<div class="card-body text-center" style="padding: 5px;">
								<h4>{{$data->name}}</h4>
								<h4>Price: <span class="text-warning">{{$data->price}}K<span></h4>
								
							</div>
							<div class="card-footer bg-gradient-primary text-white addtocard" data-id="{{$data->id}}" data-name="{{$data->name}}" data-price="{{$data->price}}" data-photo="{{$data->photo}}" data-category="{{$data->category->name}}">
								<p class="text-center m-0"><a href="heo.html" onclick="return false;" class="text-white ">Add to Cart</a></p>
							</div>
						</div>

					@endforeach
					
				</div>
				
				
			</div>
		</div>

		<div class="bg-white py-2 d-none" id="vegetable-list">
			<div class="col-md-12 p-0">
				<div class="row m-0">

					@foreach($vegetables as $data)
						<div class="card shadow  col-xl-2 col-md-3  mb-3 shadow p-0 menu-card" >
							<div>
								<img src="{{asset($data->photo)}}" class="card-img-top">
							</div>
							<div class="card-body text-center" style="padding: 5px;">
								<h4>{{$data->name}}</h4>
								<h4>Price: <span class="text-warning">{{$data->price}}K<span></h4>
								
							</div>
							<div class="card-footer bg-gradient-primary text-white addtocard" data-id="{{$data->id}}" data-name="{{$data->name}}" data-price="{{$data->price}}" data-photo="{{$data->photo}}" data-category="{{$data->category->name}}">
								<p class="text-center m-0"><a href="heo.html" onclick="return false;" class="text-white ">Add to Cart</a></p>
							</div>
						</div>

					@endforeach
					
				</div>
				
				
			</div>
		</div>
	
</div>


<!-- alert Model -->
<div class="col-md-4">
      
      <div class="modal fade" id="error-modal-notification" tabindex="-1" role="dialog" aria-labelledby="modal-notification" aria-hidden="true">
	    <div class="modal-dialog modal-danger modal-dialog-centered modal-" role="document">
	        <div class="modal-content bg-gradient-danger">
	        	
	            <div class="modal-header">
	                <h6 class="modal-title" id="modal-title-notification">Your attention is required</h6>
	                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
	                    <span aria-hidden="true">×</span>
	                </button>
	            </div>
	            
	            <div class="modal-body">
	            	
	                <div class="py-3 text-center">
	                    <i class="ni ni-bell-55 ni-3x"></i>
	                    <h4 class="heading mt-4">You should read this!</h4>
	                    <p>You haven't choose the Counter No from above Counter Selection!</p>
	                    <h2 class="text-white">Please Select Counter No Frist!</h2>
	                </div>
	                
	            </div>
	            
	            <div class="modal-footer">
	                <button type="button" class="btn btn-white">Ok, Got it</button>
	                <button type="button" class="btn btn-link text-white ml-auto" data-dismiss="modal">Close</button>
	            </div>
	            
	        </div>
	    </div>
	</div>

 </div>






@endsection
@section('script')
<script type="text/javascript">
		$(document).ready(function(){
		getCountMenu();

	
})
function getCountMenu(){
	$.get('/menus/count',function(response){
		console.log(typeof response);
		$.each(response.data,function(i,v){
			$(`.${v.name}-backend-count`).html(v.meats_count);
		})

		{{-- $.each(response.lastdate,function(i,v){
			let name=v[0].category.name;
			$(`.${name}-latestUpdate`).html(v[0].created_at);
		}) --}}
	})
}
</script>
@endsection
