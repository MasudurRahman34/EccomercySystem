@if (Session::has('success'))
	<div class="alert alert-success">
		<p>{{Session::get('success')}}</p>
	</div>
@endif

@if (Session::has('sticky_error'))
	<div class="alert alert-success">
		<p>{{Session::get('sticky_error')}}</p>
	</div>
@endif