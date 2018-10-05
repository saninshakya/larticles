@extends('layouts.app')

@section('content')

	<h1>Edit Article</h1>
	{!! Form::open(['action' => ['ArticleController@update', $article->id], 'method' => 'POST']) !!}
		<div class="form-group">
			{{ Form::label('title', 'Title') }}	
			{{ Form::text('title', $article->title,['class' => 'form-control', 'placeholder' => 'Enter Title']) }}
		</div>		
		<div class="form-group">
			{{ Form::label('body', 'Body') }}	
			{{ Form::textarea('body', $article->body,['class' => 'form-control', 'placeholder' => 'Enter body']) }}
		</div>
		{{ Form::hidden('_method', 'PUT') }}
		{{ Form::submit('Submit', ['class' => 'btn btn-primary']) }}
	{!! Form::close() !!}
@endsection