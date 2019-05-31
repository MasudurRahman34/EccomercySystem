@extends('admin.layouts.master')

@section('content')

<div class="main-panel">
 <div class="content-wrapper">
  <a class="btn btn-success btn-lg" href="{{ route('admin.product.create') }}" style="margin:10px;">Add Product</a>
   <div class="card">
    <div class="card-header">
      Manage Product
      <div class="card-body">
             {{-- <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
              {{ csrf_field() }} --}}

              <table class="table table-striped">
                <thead>
                  <tr>
                    <th>Serial</th>
                    <th>Name</th>
                    <th>image</th>
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
                    <td>{{$product->name}}</td>
                        @php
                        $i=1;
                        @endphp

                    @foreach ($product->images as $image)
                    @if ($i>0)

                    <td><img class="fetured-img" src="{{asset('images/product/'.$image->image)}}" alt="Card image" height="42" width="42">
                      @endif
                      @php  $i--  @endphp
                      @endforeach
                      <td>{{$product->price}}</td>
                      <td>{{$product->quantity}}</td>
                      
                      <td><a href="{{ route('admin.product.edit', $product->id) }}" class="btn btn-warning">Edit</a> 
                        <a href="#deleteModal{{$product->id}}" data-toggle="modal" class="btn btn-danger btn-sm">
                          <i class="mdi mdi-alert-outline"></i>Delete</a>
                          <!-- delete Modal -->
                          <div class="modal fade" id="deleteModal{{$product->id}}"" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                              <div class="modal-content">
                                <div class="modal-header">
                                  <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                  </button>
                                </div>
                                <div class="modal-body">
                                  <form action="{{ route('admin.product.delete', $product->id) }}" method="post">
                                    {{csrf_field()}}
                                    <br>               Are You sure To Delete
                                  </div>
                                  <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-danger">Permanent Delete</button>
                                  </div>
                                </form>
                              </div>
                            </div>
                          </div>
                        </div>

                      </tr>

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
