@extends('admin.layouts.master')

@section('content')

<div class="main-panel">
       <div class="content-wrapper">
         <div class="card">
          <div class="card-header">
            Manage Product
            <div class="card-body">
             {{-- <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }} --}}

                <table class="table table-dark table-striped">
                  <thead>
                    <tr>
                      <th>Serial</th>
                      <th>Title</th>
                      <th>Price</th>
                      <th>Quantity</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                      @php
                        $i=1;
                      @endphp
                      @foreach ($products as $product)
                      <tr>
                      <td>{{$i}}</td>
                      <td>{{$product->title}}</td>
                      <td>{{$product->price}}</td>
                      <td>{{$product->quantity}}</td>
                      
                      <td><a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-warning">Edit</a> <a href="" class="btn btn-danger">Delete</a></td>
                       </tr>
                    @php
                      $i++
                    @endphp
                      @endforeach

                   
                  </tbody>
                </table>   
              </div>
          </div>  
         </div>
       </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <!-- partial -->
      </div>

@endsection
