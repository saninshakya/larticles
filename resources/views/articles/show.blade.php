@extends('layouts.app')

@section('content')

<a href="/articles" class="btn btn-success">Go Back</a>
<h1>{{ $article->title }}</h1>
<div>
	{{ $article->body }}
</div>
<hr>
<small>Written on article created at {{ $article->created_at }}</small>

<hr>
<a href="/articles/{{ $article->id }}/edit" class="btn btn-primary">Edit</a>

{!! Form::open(['action' => ['ArticleController@destroy', $article->id], 'method' =>'POST', 'class' =>'pull-right']) !!}
	{{ Form::hidden('_method', 'DELETE') }}
	{{ Form::submit('Delete', ['class' => 'btn btn-danger']) }}
{!! Form::close() !!}
@endsection
