<nav class="navbar navbar-expand-md navbar-dark bg-dark navbar-fixed-top">
    <div class="container">
        <a class="navbar-brand" href="/">Benjamin Pradon's portfolio</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
            </ul>
            <li class="nav-item">
                <a class="nav-link text-white" href="/about">About</a>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Contact</a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="/contact">Contact me</a>
                    <a class="dropdown-item" href="https://landbot.io/u/H-27113-GJVK3FFB9B71354C/index.html">Chat with me</a>
                </div>
            </li>

            <li class="nav-item">
                  <a class="nav-link text-white" href="/articles">Blog</a>
            </li>
            
            <li class="nav-item">
                  <a class="nav-link text-white" href="/work">My work</a>
            </li>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto">
                <!-- Authentication Links -->
                @guest
                    <li><a class="nav-link text-white" href="{{ route('login') }}">{{ __('Login') }}</a></li>
                    <li><a class="nav-link text-white" href="{{ route('register') }}">{{ __('Register') }}</a></li>
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->first_name.' '.Auth::user()->name }}<span class="caret"></span>
                        </a>

                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item fa fa-btn fa-sign-out" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>
                            <a href="#" class="fa fa-btn fa-user text-black"> User Profile </a> <br>
                            <a href="{{route('tags.index')}}" class="fa fa-hashtag text-center">Tags</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </div>
                    </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>