@extends('layouts.app')
@section('content')
<br>
<br>
<br>
<title>{{$title}}</title>
        <h1 class="text-center">This is my work:</h1>
        <br>
        <br>
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
    @foreach($projects as $project)
        <div class="carousel-inner text-center" role="listbox">
            <div class="carousel-item active">
                <h2>{{$project->name}}</h2>
                <img class="img-fluid" src="{{asset('Caroussel/laravel.png')}}" height="150" width="150">
                <p>{{$project->description}}</p>
                <!--TAGS-->
            </div>

            <div class="carousel-item">
                    <h2>{{$project->name}}</h2>
                    <img class="img-fluid" src="{{asset('Caroussel/chatbot.png')}}" height="150" width="150">
                    <p>{{$project->description}}</p>
                    <!--TAGS-->
            </div>

            <div class="carousel-item">
                    <h2>{{$project->name}}</h2>
                    <img class="img-fluid" src="{{asset('Caroussel/iot.png')}}" height="150" width="150">
                    <p>{{$project->description}}</p>
                    <!--TAGS-->
            </div>

            <div class="carousel-item">
                    <h2>{{$project->name}}</h2>
                    <img class="img-fluid" src="{{asset('Caroussel/php.png')}}" height="150" width="150">
                    <p>{{$project->description}}</p>
                    <!--TAGS-->
            </div>
        </div>
    @endforeach

    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="sr-only">Previous</span>
    </a>

    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="sr-only">Next</span>
    </a>
</div> 
@endsection

