@extends('layouts.app')

@section('content')
<br>
<br>
<br>
    <!--div class="jumbotron text-center">        
        <h1 class="center"> Welcome to my blog ! </h1>
        <h2 class="center"> Tips, tutorials and more on chatbots, artificials intelligence </h2>
        <p><a class="btn btn-primary btn-lg" href="route{{('login')}}" role="button">Login</a> <a class="btn btn-primary btn-lg" href="route{{('register')}}" role="button">Register</a></p>
    </div-->
    <h1 class="text-center"> Welcome to my blog ! </h1>
    @if(!Auth::guest())
        @if(Auth::user()->role == 1)
            <a href="/articles/create" class="btn btn-default">Create Article </a>
        @endif
    @endif
        @if(count($articles) >0 )
            @foreach($articles as $article)
                <div class="well jumbotron">
                    <h3>{{$article ->title}}</h3>
                    <description> <a href="/articles/{{$article->id}}"> {{$article ->description}} </a> </description> <br>
                    <small> written on {{$article ->created_at}} </small>
                    @endforeach
                    @foreach($tags as $tag)
                        <p>{{$tag->name}}</p>
                    @endforeach
                </div>
                <br>
            {{$articles->links()}}
        @else
        <p> No articles found </p>
        @endif
@endsection
