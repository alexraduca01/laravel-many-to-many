<header class="bg-dark py-2 text-white" style="height: 100px;">
    <div class="d-flex justify-content-between px-3 align-items-center">
        <div class="d-flex align-items-center gap-3">
            <img class="rounded-circle d-none d-md-flex" style="height: 80px; width: 80px;" src="{{ asset('img/logo.png') }}" alt="logo">
        </div>
        <div>
            <form action="" class="d-flex gap-2">
                <input class="form-control" style="width: 400px;" type="text" name="search" id="search" placeholder="Search">
                <button class="btn btn-success">Search</button>
            </form>
        </div>
        <ul class="navbar-nav ml-auto d-flex justify-content-between flex-row gap-3">
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
                @if (Route::has('register'))
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                </li>
                @endif
            @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle fs-4" href="#" role="button" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ Auth::user()->name }}
                    </a>
                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ url('admin') }}">{{__('Dashboard')}}</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                            document.getElementById('logout-form').submit();">
                            {{ __('Logout') }}
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
            @endguest
        </ul>
    </div>

</header>


