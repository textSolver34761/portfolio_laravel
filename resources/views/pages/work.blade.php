@extends('layouts.app')
@section('content')
<title>{{$title}}</title>
        <h1 class="text-center">This is my work:</h1>
        <br>
        <br>
<div id="carouselBen" class="carousel slide" data-ride="carousel">
          
    <div class="carousel-inner text-center" role="listbox">
        <div class="carousel-item active"> 
            <h2>{{$laravel['name']}}</h2>
            <img class="d-block w-100 img-fluid" src="{{asset('Caroussel/laravel.png')}}" height="150" width="150">
            <p>{{$laravel['description']}}</p>
            <span class="label label-default">{{$laravel['name']}}</span>
        </div>

        <div class="carousel-item">
                <h2>{{$chatbot['name']}}</h2>
                <img class="d-block w-100 img-fluid" src="{{asset('Caroussel/chatbot.png')}}" height="150" width="150">
                <p>{{$chatbot['description']}}</p>
                <span class="label label-default">{{$chatbot['name']}}</span>
        </div>

        <div class="carousel-item">
                <h2>{{$iot['name']}}</h2>
                <img class="d-block w-100 img-fluid" src="{{asset('Caroussel/iot.png')}}" height="150" width="150">
                <p>{{$iot['description']}}</p>
                <span class="label label-default">{{$iot['name']}}</span>
        </div>

        <div class="carousel-item">
                <h2>{{$natif['name']}}</h2>
                <img class="d-block w-100 img-fluid" src="{{asset('Caroussel/php.png')}}" height="150" width="150">
                <p>{{$natif['description']}}</p>
                <span class="label label-default">{{$natif['name']}}</span>
        </div>

    </div>

    <a class="carousel-control-prev" href="#carouselBen" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#carouselBen" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div> 
@endsection