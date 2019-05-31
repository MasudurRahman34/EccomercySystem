
@extends('layouts.master')
@section('tilte')

	{{$product->title}}
@endsection
<!-- sidebar -->
@section('content') 

<div class="container margin-top-20">
  <div class="row">
    <div class="col-md-4">
    	 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			  <div class="carousel-inner ">
			  	@php	$i=0; @endphp
			  	@foreach ($product->images as $image)
			  		
			    <div class="carousel-item {{$i==0 ? 'active':''}} " style="height: 300px">
			      <img class="d-block w-100" src="{{ asset('images/product/'.$image->image) }}" alt="First slide" style="width:100%;" height="300px;">
			    </div>
			    @php $i++ @endphp
			    @endforeach
			  </div>
			    	
			  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
			    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
			    <span class="sr-only">Previous</span>
			  </a>
			  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
			    <span class="carousel-control-next-icon" aria-hidden="true"></span>
			    <span class="sr-only" style="color: red;">Next</span>
			  </a>
			</div>
       
    </div>
    <div class="col-md-8">
      <div class="widget">
        <h3>{{$product->title}}</h3>
        <h3>{{$product->price}} Taka <span class="badge badge-primary">
        	{{$product->quantity<1 ? 'No Item Available' : $product->quantity.' item available'}}</span></h3>
        
        
       
      </div>
      <hr color="">
      <div class="product-description">
      	{{$product->description}}
      </div>
      </div>
      <div class="col-md-12"> </div>
    </div>
  </div>
</div>



@endsection

