@extends('layouts.app')

@section('content')
<br>
<br>
<br>
    <h1>Create article</h1>
    {!! Form::open(['action' => 'ArticlesController@store', 'method' => 'post'] ) !!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title','',['class'=> 'form-control','placeholder'=> 'Title'])}}
    </div>

    <div class="form-group">
            {{Form::label('description','Description')}}
            {{Form::text('description','',['class'=> 'form-control','placeholder'=> 'Description'])}}
    </div>

    <div class="form-group">
            {{Form::label('content','Content')}}
            {{Form::textarea('content','',['class'=> 'form-control','placeholder'=> 'Content'])}}
    </div>
    {{Form::submit('submit',['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
