<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
  @include ('partials.css')
	
</head>
<body>
  <div class="wrapper">
    @include('partials.navbar')

  </div>

@yield('content')
@include ('partials.footer')
@include ('partials.script')
</body>
</html>