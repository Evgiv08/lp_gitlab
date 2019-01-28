<header class="main-header m--account-admin">
    <div class="main-header-wrapper">
        <div class="logo-side">
            <a href="/">
                <img src="{{ asset('img/img-logo.png') }}" alt="">
            </a>
        </div>
        <div class="button-block">
            @if (Auth::check())
                <span>{{Auth::user()->name}}</span>
                <a href="{{ route('logout') }}">Выйти</a>
            @else
                <a href="{{ route('logout') }}">Войти</a>
            @endif
        </div>
    </div>
</header>
