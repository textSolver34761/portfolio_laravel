@extends('layouts.app')
@section('content')
<title></title>

<div class="jumbotron">
<h1 class="text-center">Welcome on my personal website</h1>
<br>
    <div class="content">
        <a class="header">Hi, I'm Benjamin Pradon</a>
        <div class="description">
            <img src="{{asset('Avatar/PhotoID.jpg')}}" height="150" width="150">
            <p>
                This is my personal website. <br>
                I am a web developer. If you want to know more about me, you'll find more information <a href="/about"> here</a>.<br>
                Feel free to <a href="/contact">contact me</a> or to chat with <a href="https://landbot.io/u/H-27113-GJVK3FFB9B71354C/index.html"> me. </a><br>
                Finnally, I give some tips on how to build a chatbot.<br>
                If you want to have a closer look, feel free to <a href="/register">register </a> and have a look at my <a href="/articles">blog, </a> or you can have a look at my <a href="/work">work</a>.
            </p>
        </div>
    </div>
</div>
@endsection