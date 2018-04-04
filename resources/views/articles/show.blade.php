@extends('layouts.app')

@section('content')
<br>
<br>
<br>
    <a href="/articles" class="btn btn-default">Go back</a>
    @if(!Auth::guest())
        <a href="/articles/{{$articles->id}}/edit" class="btn btn-default">Edit</a>
        {!!Form::open(['action'=>['ArticlesController@destroy',$articles->id],'method' => 'post', 'class' => 'pull-right'])!!}
            {{Form::hidden('_method','delete')}}
            {{Form::submit('Delete',['class'=> 'btn btn-danger'])}}
        {!!Form::close()!!}
    @endif
    <h1>{{$articles->title}}</h1>
    <small> written on {{$articles->created_at }}</small>
    <br>
    <br>
    <div>
        {!!$articles ->content!!}
    </div>
@endsection
