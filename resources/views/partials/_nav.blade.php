<div>
    <nav class="navbar navbar-expand-md navbar-light navbar-laravel shadow-sm bg-primary">
        <div class="container">
            <a class="navbar-brand" href="{{ url('/') }}">
                {{-- config('app.name', 'Vicarswood') --}}
                <img src="{{ asset('images/LogoVegasHandle.png') }}" class="w-20 h-12" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <!-- Left Side Of Navbar -->
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item ml-md-4">
                        <a class="nav-link" href="{{ route('products.index') }}">{{ __('Products') }}</a>
                    </li>
                    <li class="nav-item ml-md-4">
                        <a class="nav-link" href="{{ url('/about') }}">{{ __('About') }}</a>
                    </li>
                </ul>

                <!-- Right Side Of Navbar -->
                <ul class="navbar-nav ml-auto">
                    <!-- Authentication Links -->
                    @guest
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                <span class="caret">
                                    Lang
                                </span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('locale', "en") }}" id="en">
                                    English
                                </a>
                                <a class="dropdown-item" href="{{ route('locale', "es") }}" id="es">
                                    Espanol
                                </a>
                            </div>
                        </li>
                        <li class="nav-item mr-4">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                        <li class="nav-item mr-4">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                        <li class="nav-item mr-4">
                            <a class="nav-link" href="{{ route('cart.index') }}"><i class="fas fa-shopping-cart"></i> {{ __('Cart') }}
                                @if (!Cart::isEmpty())
                                    <span class="badge badge-pill badge-light">{{ Cart::getContent()->count() }}</span>
                                @endif
                            </a>
            
                        </li>
                    @else
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                @if(session()->has('lang')) {{ session()->get('lang') }} @else Language @endif<span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('locale', "en") }}" id="en">
                                    English
                                </a>
                                <a class="dropdown-item" href="{{ route('locale', "es") }}" id="es">
                                    Espanol
                                </a>
                            </div>
                        </li>
                        <li class="nav-item mr-4">
                            <a class="nav-link" href="{{ route('cart.index') }}"><i class="fas fa-shopping-cart"></i> {{ __('Cart') }}
                                @php
                                \Cart::session(auth()->user()->id);
                                @endphp
                                @if (!Cart::isEmpty())
                                    <span class="badge badge-pill badge-light">{{ Cart::getContent()->count() }}</span>
                                @endif
                            </a>
                        </li>
                        <li class="nav-item dropdown">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

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
</div>