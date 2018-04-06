@extends('layouts.app')
@section('content')
<br>
<br>
<br>
<title></title>

<h1 class="text-center">This is my work</h1>
        
<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
          
    <ol class="carousel-indicators">
        <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        <li data-target="#carouselExampleIndicators" data-slide-to="3"></li>
    </ol>
        @foreach($paquets as $paquet)
            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active"> 
                        <img class="d-block w-100 img-fluid" src="{{$paquet['URL']}}" height="150" width="150">
                        <h5>{{$paquet['name']}}</h5>
                        <p>{{$paquet['description']}}</p>
                        <p>{{$paquet['name']}}</p>
                </div>
                <!--div class="carousel-item">
                    <img class="d-block w-100 img-fluid" src="{{$paquet->URL}}" height="150" width="150">
                    <h5>{{$paquet->name}}</h5>
                    <p>{{$paquet->description}}</p>
                    <p>{{$paquet->name}}</p>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-fluid" src="{{$paquet->URL}}" height="150" width="150">
                    <h5>{{$paquet->name}}</h5>
                    <p>{{$paquet->description}}</p>
                    <p>{{$paquet->name}}</p>
                </div>
                <div class="carousel-item">
                    <img class="d-block w-100 img-fluid" src="{{$paquet->URL}}" height="150" width="150">
                    <h5>{{$paquet->name}}</h5>
                    <p>{{$paquet->description}}</p>
                    <p>{{$paquet->name}}</p>
                </div-->
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