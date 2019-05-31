@extends('layouts.master')
<!-- sidebar -->
@section('content') 
  

  <div class="container margin-top-20">
    
      <div class="row">
         
        <div class="col-md-12">
          <div class="widget">
            <h3>All Product</h3>
            <div class="row">
            @foreach ($products as $product)
              <div class="col-md-4">
                  <div class="card" >
                     <a href="{!! route('product.show', $product->slug) !!}">
                    @php
                      $i=1;
                    @endphp
                      @foreach ($product->images as $image)
                        @if ($i>0)
                      
                        <img class="fetured-img" src="{{asset('images/product/'.$image->image)}}" alt="Card image" height="42" width="42">
                      @endif
                        @php  $i--  @endphp
                      @endforeach
                    <div class="card-body">
                     <h4 class="card-title">{{$product->name}}</h4>
                      <h5>{{$product->title}}</h5>
                     
                     </a>
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

