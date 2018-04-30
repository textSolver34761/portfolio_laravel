@extends('layouts.app')

@section('content')
    <h1 class="text-center"> Welcome to my blog ! </h1>
    @if(!Auth::guest())
        @if(Auth::user()->role == 1)
            <a href="/articles/create" class="btn btn-primary">Create Article </a>
        @endif
    @endif
        @if(count($articles) >0 )
            @foreach($articles as $article)
                <div class="jumbotron">
                    <h3>{{$article->title}}</h3>
                    <description>
                        <a href="/articles/{{$article->id}}"> {{$article ->description}} </a>
                    </description> <br>
                    <small> written on {{$article ->created_at}} </small>
                    <div class="tag"> <br>
                        @foreach($article->tags as $tag)
                            <span class="label label-primary">{{$tag->name}}</span>
                        @endforeach
                    </div>
                </div>
            @endforeach
            {{$articles->links()}}
        @else
        <p> No articles found </p>
        @endif
@endsection
