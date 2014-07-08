@extends('master')

@section('styles')
	@parent
	{{ HTML::style('code-prettify/src/prettify.css') }}
@stop

@section('container')
 <pre class="prettyprint linenums">{{ htmlentities($snippet->snippet) }}</pre>
@stop

@section('nav')
	<a href="{{ URL::action('snippet.edit', $snippet->id) }}" class="btn btn-warning">Fork</a>
	<a href="{{ URL::action('snippet.create') }}" class="btn btn-info">Create New</a>
@stop

@section('scripts')
	@parent
	{{ HTML::script('code-prettify/src/prettify.js') }}
	<script type="text/javascript">prettyPrint();</script>
@stop