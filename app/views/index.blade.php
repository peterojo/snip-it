@extends('master')

@section('container')
	<div class="jumbotron">
	  <h1>Hi! Welcome to Snip It</h1>
	  <p>You can create code snippets and share with your friends.</p>
	  <p>Click the button below to start creating your own snippets now!</p>
	  <p><a class="btn btn-primary btn-lg" href="{{ URL::action('snippet.create') }}" role="button">Create Snippet</a></p>
	</div>
@stop