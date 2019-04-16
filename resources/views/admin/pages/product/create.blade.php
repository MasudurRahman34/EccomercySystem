@extends('admin.layouts.master')

@section('content')

<div class="main-panel">
       <div class="content-wrapper">
         <div class="card">
          <div class="card-header">
            Add Product
            <div class="card-body">
             <form action="{{ route('admin.product.store') }}" method="post" enctype="multipart/form-data">
                {{ csrf_field() }}
                
                <div class="form-group">
                  <label for="exampleFormControlInput1">Title</label>
                  <input type="text" name="title" class="form-control"  placeholder="Title">
                </div>
                 <div class="form-group">
                  <label for="exampleFormControlTextarea1">Description</label>
                  <textarea class="form-control" name="description"  rows="3"></textarea>
                </div>
                 <div class="form-group">
                  <label for="exampleFormControlInput1">Price</label>
                  <input type="number" name="price" class="form-control"  placeholder="Price">
                </div>
                <div class="form-group">
                  <label for="exampleFormControlInput1">Quantity</label>
                  <input type="number" name="quantity" class="form-control" placeholder="quantity">
                </div>
                 <div class="row">
                  <div class="col-md-4 form-group">
                  <input type="file" name="image[]" class="form-control">
                </div>
               <div class="col-md-4">
                  <input type="file" name="image[]" class="form-control">
                </div>
                <div class="col-md-4">
                  <input type="file" name="image[]" class="form-control">
                </div>
                <div class="col-md-4">
                  <input type="file" name="image[]" class="form-control">
                </div>
                <div class="col-md-4">
                  <input type="file" name="image[]" class="form-control">
                </div>
              </div>
            
              {{--   <div class="form-group">
                  <label for="exampleFormControlSelect2">Example multiple select</label>
                  <select multiple class="form-control" id="exampleFormControlSelect2">
                    <option>1</option>
                    <option>2</option>
                    <option>3</option>
                    <option>4</option>
                    <option>5</option>
                  </select>
                </div> --}}
               
                <button type="submit" class="btn btn-success btn-lg">Add Product</button>
                
            
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
