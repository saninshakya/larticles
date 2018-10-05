@extends('layouts.app')

@section('content')
    <h1>Articles</h1>
    @if(!empty($articles))
        @foreach($articles as $article)
            <div class="well">
                <div class="row">
                    <div class="col-md-8 col-sm-8">
                        <h3><a href="/articles/{{$article->id}}">{{$article->title}}</a></h3>
                        <small>Written on {{$article->created_at}}</small>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p>No articles found</p>
    @endif
@endsection