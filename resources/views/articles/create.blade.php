@extends('layouts.app')

@section('content')
    <h1>Create an article</h1>
    {!! Form::open(['action' => 'ArticlesController@store', 'method'=>'post','files' => true]) !!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title','',['class'=> 'form-control','placeholder'=> 'Title'])}}
    </div>

    <div class="form-group">
        {{Form::label('description','Description')}}
        {{Form::text('description','',['class'=> 'form-control','placeholder'=> 'Description'])}}
    </div>

    {{Form::label('tags', 'Tags:')}}
    <select class="form-control select2-multi" name="tags[]" multiple="multiple">
        @foreach($tags as $tag)
            <option value='{{$tag->id}}'>{{$tag->name}}</option>
        @endforeach
    </select>

    <div class="form-group">
        {{Form::label('content','Content')}}
        {{Form::textarea('content', '' ,['class'=> 'form-control','placeholder'=> 'Content'])}}
    </div>

    {{Form::submit('submit',['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
