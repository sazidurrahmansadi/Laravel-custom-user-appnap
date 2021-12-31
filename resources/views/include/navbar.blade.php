<nav class="navbar navbar-expand-lg navbar-light bg-white">
    <div class="container">
        <!-- Brand -->
        <a class="navbar-brand" href="/">
            <img alt="Image placeholder" src="{{ asset('assets/img/logo.png') }}" id="navbar-logo">
        </a>
        <!-- Toggler -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarCollapse"
            aria-controls="navbarCollapse" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <!-- Collapse -->
        <div class="collapse navbar-collapse" id="navbarCollapse">
            @auth
                <ul class="navbar-nav mt-4 mt-lg-0 ml-auto">
                    <li class="nav-item ">
                        {{-- <a class="nav-link" href="{{ url('/') }}">Homepage</a> --}}
                        <a href="{{ route('welcome') }}"
                            class="{{ \Request::route()->getName() == 'welcome' ? 'nav-link active' : 'nav-link' }}">Homepage</a>
                    </li>
                    <li class="nav-item dropdown dropdown-animate" data-toggle="hover">
                        <a class="nav-link" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                            aria-expanded="false">{{ Auth::user()->name }}</a>
                        <div class="dropdown-menu dropdown-menu-single">
                            <a href="{{ route('home') }}" class="dropdown-item">Dashboard</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                    document.getElementById('logout-form').submit();"> {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </li>
                </ul>
                <!-- Button -->
            @else
                <ul class="navbar-nav mt-4 mt-lg-0 ml-auto"> </ul>
                <div class="text-center text-md-left ">
                    <a href="{{ route('register') }}" class="btn btn-primary btn-sm btn-icon">
                        <span class="btn-inner--text">Sign Up</span>
                    </a>
                    <a href="{{ route('login') }}" class="btn btn-neutral btn-sm btn-icon d-lg-inline-block">Sign In</a>
                </div>
            @endauth
            <!-- Mobile button -->
            <!-- <div class="d-lg-none text-center">
                <a href="#" class="btn btn-block btn-sm btn-warning">See more details</a>
            </div> -->
        </div>
    </div>
</nav>
