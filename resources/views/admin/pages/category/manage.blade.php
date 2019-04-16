@extends('admin.layouts.master')

@section('content')

<div class="main-panel">
       <div class="content-wrapper">
         <div class="card">
          <div class="card-header">
            Manage catagory
             @include('admin.partials.messages')
            <div class="card-body">
             {{-- <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }} --}}
              <div class="table-responsive-sm">
                <table class="table table-bordered table-hover">
                  <thead>
                    <tr class="table-success">
                      <th>Serial</th>
                      <th>Name</th>
                      <th>Parent Name</th>
                      <th>Image</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    
                      @php
                        $i=1;
                      @endphp
                      @foreach ($catagory as $catagory)
                      <tr>
                      <td>{{$i}}</td>
                      <td>{{$catagory->name}}</td>
                      <td>

                      @if ($catagory->parent_id==null)
                        primary catagory
                       @else
                        {{$catagory->parent->name}}
                        
                      @endif
                      </td>
                      
                      <td><img src="{!! asset('images/category/'.$catagory->image) !!}"></td>
                      
                      <td><a href="{{ route('admin.category.edit', $catagory->id) }}" class="btn btn-warning">Edit</a> <a href="" class="btn btn-danger">Delete</a></td>
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
       </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <!-- partial -->
      </div>

@endsection
