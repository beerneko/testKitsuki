<style>
.nav>li>a {
    padding: 10px 15px !important;
}
</style>
<nav class="navbar navbar-fixed-top navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        {{-- <a class="navbar-brand" href="/"><H1>{{config('app.name'),'TripToKitsuki'}}</H1></a> --}}
        <a href="/" class="navbar-left">
            <img src="/images/logo.png" height="50px">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="/">&nbsp;  &nbsp; Home<span class="sr-only">(current)</span></a>
            </li>
            {{-- <li class="nav-item">
                <a class="nav-link" href="/about"> &nbsp;  &nbsp; About</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="/youcanlist"> &nbsp;  &nbsp; Things you can do</a>
            </li> --}}
            <li class="nav-item">
                <a class="nav-link" href="/askme"> &nbsp;  &nbsp; Ask Me</a>
            </li>
            <li class="nav-item">
                    <a class="nav-link" href="/posts"> &nbsp;  &nbsp; Blog</a>
                </li>
            </ul>

            <!-- Right Side Of Navbar -->
            <!-- Authentication Links -->
            <ul class="nav navbar-nav navbar-right mr-auto">
                @guest
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                    </li>
                    {{-- <li class="nav-item">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li> --}}
                @else
                    <li class="nav-item dropdown">
                        <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                &nbsp;&nbsp;  {{ Auth::user()->name }} 
                            {{-- <span class="caret"></span> --}}
                        </a>

                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                            &nbsp;  &nbsp;<a href="/home">Dashboard</a>
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
