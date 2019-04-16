@extends('layouts.master')
<!-- sidebar -->
@section('content') 
  

  <div class="container margin-top-20">
  <div class="row">
    <div class="col-md-4">
       <div class="list-group">
        <a href="#" class="list-group-item">First item</a>
        <a href="#" class="list-group-item">Second item</a>
        <a href="#" class="list-group-item">Third item</a>
        </div> 
    </div>
    <div class="col-md-8">
      <div class="widget">
        <h3>Fetured product</h3>
        <div class="row">
          <div class="col-md-3">
              <div class="card" >
                <img class="card-img-top fetured-img" src="{{asset('images/product/'.'galaxy.jpg')}}" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">Samsung</h4>
                  <p class="card-text">Price taka-5000</p>
                  <a href="#" class="btn btn-primary">Add to cart</a>
                </div>
            </div>
          </div>
            <div class="col-md-3">
              <div class="card" >
                <img class="card-img-top fetured-img" src="{{asset('images/product/'.'galaxy.jpg')}}" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">Samsung</h4>
                  <p class="card-text">Price taka-5000</p>
                  <a href="#" class="btn btn-primary">Add to cart</a>
                </div>
            </div>
          </div>
<div class="col-md-3">
              <div class="card" >
                <img class="card-img-top fetured-img" src="{{asset('images/product/'.'galaxy.jpg')}}" alt="Card image">
                <div class="card-body">
                  <h4 class="card-title">Samsung</h4>
                  <p class="card-text">Price taka-5000</p>
                  <a href="#" class="btn btn-primary">Add to cart</a>
                </div>
            </div>
          </div>


        </div>
      </div>
    </div>
  </div>

</div>



@endsection

