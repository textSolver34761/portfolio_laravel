@extends('layouts.app')
@section('content')
<title></title>
<div class="row">
    <div class="col-md-8">
        <h1>Tags</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Name</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tags as $tag)
                    <tr>
                        <th>{{$tag->id}}</th>
                        <th><a href="{{ route('tags.show', $tag->id) }}">{{$tag->name}}</a></th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    
    <div class="col-md-3">
        <div class="well">
            {!!Form::open(['route'=>'tags.store','method'=>'POST'])!!}
                <h2>New tag</h2>
                {{Form::label('name','Name:')}}
                {{Form::text('name',null,['class' => 'form-control'])}}
                {{Form::submit('Create new tag',['class'=>'btn btn-primary btn-block btn-h1-spacing'])}}
            {!!Form::close()!!}
        </div>
    </div>
</div>
@endsection