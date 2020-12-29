<div style="background: #264192; color: white" class="py-2">
    <div class="container">
        <div class="row">
            <div class="col-md-12 d-flex justify-content-md-end justify-content-center">
                <a class="mx-2 text-white" href="tel:13056907132"><i class="fa fa-phone-alt mr-2"></i> +1 (305) 690-7132</a>
                <div class="border-left border-primary"></div>
                <a class="mx-2 text-white" href="https://www.facebook.com/MJAccountingandTaxesServicesLLC" target="_blank">
                    <i class="fab fa-facebook"></i>
                </a>
                <a class="mx-2 text-white" href="https://www.instagram.com/mjacctax" target="_blank">
                    <i class="fab fa-instagram"></i>
                </a>
            </div>
        </div>
    </div>
</div>

<nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('img/logo.png') }}" width="128">
            {{-- {{ config('app.name', 'MJ Accounting & Taxes Services LLC') }} --}}
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">
                @guest

                @else
                    <li class="nav-item">
                        <a class="nav-link rounded @if(Route::currentRouteName() == 'dashboard') bg-light border-bottom   @endif" href="{{ route('dashboard') }}" >{{ __('Dashboard') }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link rounded @if(Route::currentRouteName() == 'messages' || Route::currentRouteName() == 'message' ) bg-light border-bottom   @endif" href="{{ route('messages') }}" >{{ __('Messages') }}</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link rounded @if(Route::currentRouteName() == 'settings' || Route::currentRouteName() == 'settings' ) bg-light border-bottom   @endif" href="{{ route('settings') }}" >{{ __('Settings') }}</a>
                    </li>
                @endguest
            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="nav navbar-nav ml-auto text-uppercase font-weight-bold">
                <!-- Authentication Links -->
                @guest

                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">{{ __('Home') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">{{ __('About') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('services') }}">{{ __('Services') }}</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('contact') }}">{{ __('Contact') }}</a>
                    </li>

                    @if (Route::has('login'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                        </li>
                    @endif
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                            {{ Auth::user()->name }}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
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
    </div>
</nav>
