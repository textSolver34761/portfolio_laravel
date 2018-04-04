@extends('layouts.app')

@section('content')
<br>
<br>
<br>
    <a href="/articles" class="btn btn-default">Go back</a>
    <h1>{{$articles->title}}</h1>
    <small> written on {{$articles->created_at }}</small>
    <br>
    <br>
    <div>
        {!!$articles ->content!!}
    </div>
@endsection
