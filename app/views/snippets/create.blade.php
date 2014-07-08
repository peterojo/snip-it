@extends('master')

@section('container')
	{{ Form::open(array('url' => '/snippet')) }}
		{{ Form::textarea('snippet', $snippet, array('placeholder' => "Type your code here...")) }}
		<div class="btn-group nav">
			<a href="{{ URL::action('snippet.create') }}" class="btn btn-danger">Start Over</a>
			{{ Form::submit('Save', array('class'=>"btn btn-success")) }}
		</div>
	{{ Form::close() }}
@stop

@section('scripts')
	@parent
	{{ HTML::script(asset('js/jquery.textarea.js')) }}
	<script type="text/javascript">
	$(document).ready(function(){
		$('textarea').height($(window).height()-50);
		$('textarea').tabby();
	});
	</script>
@stop