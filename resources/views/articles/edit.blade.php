@extends('layouts.app')

@section('content')
<br>
<br>
<br>
    <h1>Edit the article</h1>
    {!! Form::open(['action' => ['ArticlesController@update', $articles->id], 'method' => 'post'] ) !!}
    <div class="form-group">
        {{Form::label('title','Title')}}
        {{Form::text('title',$articles->title,['class'=> 'form-control','placeholder'=> 'Title'])}}
    </div>

    <div class="form-group">
            {{Form::label('description','Description')}}
            {{Form::text('description',$articles->description,['class'=> 'form-control','placeholder'=> 'Description'])}}
    </div>

    <div class="form-group">
            {{Form::label('content','Content')}}
            {{Form::textarea('content',$articles->content,['id'=>'article-ckeditor', 'class'=> 'form-control','placeholder'=> 'Content'])}}
    </div>
    {{Form::hidden('_method','PUT')}}
    {{Form::submit('submit',['class'=> 'btn btn-primary'])}}
    {!! Form::close() !!}
@endsection
