
@guest
    <button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse main-menu-item justify-content-center"
        id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
           
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                    role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Events
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ url('/events') }}">Events</a>
                    <a class="dropdown-item" href="{{ url('/create_event') }}">Create Event</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="{{ url('/blog/show') }}" id="navbarDropdown"
                    role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                   Explore Travel Blog
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ url('/blog/show') }}">Travel Blog</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown_1"
                    role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Hotels & Restaurants
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                    <a class="dropdown-item" href="{{url('/hotel/show')}}">Hotels</a>
                    <a class="dropdown-item" href="{{url('/hotel/create')}}">Create</a>
                   
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown_1"
                    role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Top Places
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                    <a class="dropdown-item" href="{{url('/top_place')}}">top place</a>
                    <a class="dropdown-item" href="{{url('/tour_details')}}">tour details</a>
                    <a class="dropdown-item" href="{{url('/elements')}}">Elements</a>
                </div>
            </li>
            <li class="nav-item">
               <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
            </li>
     
            @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
            @endif
            <li class="nav-item">
                <a class="nav-link" href="{{url('/contact')}}">Contact</a>
            </li>
        </ul>
    </div>


@else
<button class="navbar-toggler" type="button" data-toggle="collapse"
        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
        aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
</button>

    <div class="collapse navbar-collapse main-menu-item justify-content-center"
        id="navbarSupportedContent">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ url('/') }}">Home</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                    role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Events
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ url('/events') }}">Events</a>
                    <a class="dropdown-item" href="{{ url('/create_event') }}">Create Event</a>
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown"
                    role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Explore Travel Blog
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="{{ url('/blog/show') }}">Travel Blog</a>
                    <a class="dropdown-item" href="{{ url('/blog/create') }}">Create Blog</a>
                    

                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown_1"
                    role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Hotels & Restaurants
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                    <a class="dropdown-item" href="{{url('/hotel/show')}}">Hotels</a>
                    <a class="dropdown-item" href="{{url('/hotel/create')}}">Create Hotels</a>
                   
                </div>
            </li>

            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown_1"
                    role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    Top Places
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown_1">
                    <a class="dropdown-item" href="{{url('/top_place')}}">top place</a>
                    <a class="dropdown-item" href="{{url('/tour_details')}}">tour details</a>
                    <a class="dropdown-item" href="{{url('/elements')}}">Elements</a>
                </div>
            </li>
           


    <li class="nav-item dropdown">
            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                {{ Auth::user()->name }} <span class="caret"></span>
            </a>
    
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                <a class="dropdown-item" style="color:black" href="{{ route('logout') }}"
                onclick="event.preventDefault();
                                document.getElementById('logout-form').submit();">
                    {{ __('Logout') }}
                </a>
                <a class="dropdown-item"  href="/profile/{{Auth::user()->id}}"
                >
                    {{ __(Auth::user()->name) }}
                </a>

                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            </div>
        </li>
    </ul>
@endguest