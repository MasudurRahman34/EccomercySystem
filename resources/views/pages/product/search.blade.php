@extends('layouts.master')
<!-- sidebar -->
@section('content') 
  

  <div class="container margin-top-20">
    
      <div class="row">
          <div class="col-md-4 backgound">
           <div class="list-group">
            @include ('partials.psidebar')
          </div>
        </div>
        <div class="col-md-8">
          <div class="widget">
            <h3>Search Product <span class="badge badge-primary">{{ $search }}</span></h3>
            <div class="row">
            @foreach ($products as $product)
              <div class="col-md-3">
                  <div class="card" >
                    @php
                      $i=1;
                    @endphp
                      @foreach ($product->images as $image)
                        @if ($i>0)
                      
                        <img class="card-img-top fetured-img" src="{{asset('images/product/'.$image->image)}}" alt="Card image" height="42" width="42">
                      @endif
                        @php  $i--  @endphp
                      @endforeach
                    <div class="card-body">
                      <a href="{!! route('product.show', $product->slug) !!}"><h4 class="card-title">{{$product->title}}</h4></a>
                      <p class="card-text">Price-{{$product->price}}</p>
                      <a href="#" class="btn btn-outline-success" style="color: ;">Add to cart</a>
                    </div>
                </div>
              </div>
              @endforeach
             
            </div>
          </div>
        </div>
      </div>
  </div> <!-- //end container -->



@endsection

