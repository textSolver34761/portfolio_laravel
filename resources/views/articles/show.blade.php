@extends('layouts.app')

@section('content')
    <a href="/articles" class="btn btn-primary">Go back</a>
    @if(!Auth::guest())
        @if(Auth::user()->role == 1)
            <a href="/articles/{{$articles->id}}/edit" class="btn btn-primary">Edit</a>
            {!!Form::open(['action'=>['ArticlesController@destroy',$articles->id],'method' => 'post', 'class' => 'pull-right'])!!}
                {{Form::hidden('_method','delete')}}
                {{Form::submit('Delete',['class'=> 'btn btn-danger'])}}
            {!!Form::close()!!}
        @endif
    @endif
    <h1>{{$articles->title}}</h1>
    <small> written on {{$articles->created_at }}</small>
    <div class="tag"> <br>
        @foreach($articles->tags as $tag)
            <span class="label label-primary">{{$tag->name}}</span>
        @endforeach
    </div>
    <br>
    <br>
    <div>
        {!!$articles ->content!!}
    </div>
@endsection
