 
 @foreach (App\catagory::orderBy('name', 'asc')->where('parent_id', NULL)->get() as $parent)
  <a href="#main-{{$parent->id}}" class="list-group-item list-group-item-action" data-toggle="collapse"><img src="{{ asset('images/category/'.$parent->image) }}" width="50px">{{$parent->name}}
  </a>
  <div class="collapse show" id="main-{{$parent->id}}">
  	<div class="child-rows">
	  	@foreach (App\catagory::orderBy('name', 'asc')->where('parent_id', $parent->id)->get() as $child)
		<a href="#main-{{$parent->id}}" class="list-group-item list-group-item-action" ><img src="{{ asset('images/category/'.$child->image) }}" width="30px">{{$parent->name}}
	  	</a>
  		
  	</div>

  	@endforeach 
  </div>
  @endforeach 
 
    