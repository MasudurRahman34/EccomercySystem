@extends('admin.layouts.master')

@section('content')

<div class="main-panel">
       <div class="content-wrapper">
         <div class="card">
          <div class="card-header">
            Add category
            <div class="card-body">
               @include('admin.partials.messages')
             <form action="{{ route('admin.category.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                
                <div class="form-group">
                  <label for="exampleFormControlInput1">Name</label>
                  <input type="text" name="name" class="form-control"  placeholder="Title">
                </div>
                 <div class="form-group">
                  <label for="exampleFormControlTextarea1">Description</label>
                  <textarea class="form-control" name="description"  rows="3"></textarea>
                </div>
                
                <div class="form-group">
                  <label for="exampleFormControlInput1">Select Parent Catagory</label>
                  <select name="parent_id" class="form-control">
                    <option value="">primary catagory</option>
                    @foreach ($category as $category)
                    <option value="{{$category->id}}">{{$category->name}}</option>
                      {{-- expr --}}
                    @endforeach
                  </select>
                </div>
                 <div class="row">
                  <div class="col-md-4 form-group">
                  <input type="file" name="image" class="form-control">
                </div>
              </div>
               
                <button type="submit" class="btn btn-success btn-lg">Add Category</button>
                
            
                </form>
              </div>
          </div>
           
         </div>
       </div>
        <!-- content-wrapper ends -->
        <!-- partial:partials/_footer.html -->
        <!-- partial -->
      </div>

@endsection
