<html>
	<head>
		<title>Snip.It</title>
		
		@section('styles')
		{{ HTML::style('css/bootstrap.min.css') }}
		{{ HTML::style('css/main.css') }}
		@show
	</head>
	<body>
		<div class="container">
			@yield('container')

			<div class="btn-group nav">
				@yield('nav')	
			</div>
			
			@section('scripts')
				{{ HTML::script(asset('js/jquery.min.js')) }}
			@show
		</div>
	</body>
</html>