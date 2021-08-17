@extends('frontend/front_template')

@section('content')


<div class="bg-white p-2">
	<div class="col-md-12">
		<div class="row m-0">

			@foreach($alldata as $data)
				<div class="card  col-xl-2 col-md-3  mb-3 shadow p-0 menu-card" >
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
@endsection
