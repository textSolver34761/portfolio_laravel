@extends('layouts.app')
@section('content')
<br>
<br>
<br>
<title></title>
    <div class="form-group">
        {{Form::model($tag,['route' => ['tags.update', $tag->id], 'method' => 'PUT'])}}
            {{ Form::label('name', 'new name') }}
            {{ Form::text('name', null, ['class' => 'form-control' ]) }}
            {{Form::submit('Save changes', ['class' => 'btn btn-success', 'style' => 'margin-top:20px;'])}}
        {{Form::close()}}
    </div>
@endsection