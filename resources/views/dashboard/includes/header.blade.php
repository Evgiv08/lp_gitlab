<header class="main-header m--account-admin">
    <div class="main-header-wrapper">
        <div class="logo-side">
            <a href="/">
                <img src="{{ asset('img/img-logo.png') }}" alt="">
            </a>
        </div>
        <div class="button-block">
            @auth('staff')
                <span>{{ Auth::guard('staff')->user()->email }}</span>

                <a class="dropdown-item" href="{{ route('staff_logout') }}"
                   onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                    Выйти
                </a>
                
                <form id="logout-form" action="{{ route('staff_logout') }}" method="POST" style="display: none;">
                    @csrf
                </form>
            @endauth
        </div>
    </div>
</header>
