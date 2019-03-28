<header class="main-header">
    <div class="main-header-wrapper">
        <div class="logo-side">
            <a href="/">
                <img src="{{ asset('img/img-logo.png') }}" alt="">
            </a>
        </div>

        <div class="navigation-side">
            <ul class="navigation">
                <li>
                    <a href="/">
                        О нас
                    </a>
                </li>

                <li>
                    <a href="/faq">
                        F.A.Q.
                    </a>
                </li>

                <li>
                    <a href="/">
                        Успешные сборы
                    </a>
                </li>

                <li>
                    <a href="{{ route('search') }}">
                        Начать помогать
                    </a>
                </li>

                <li>
                    @if (auth('client')->check())
                        <a href="{{ route('charity.create') }}">
                            Подать заявку
                        </a>
                    @endif
                </li>
            </ul>

            <div class="button-block">
                <button class="header-search">
                    <a href="{{ route('search') }}">
                        <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                            <style type="text/css">
                                .st0 {
                                    fill: #E5E5E5;
                                }
                            </style>
                            <g>
                                <path class="st0" d="M495.6,466.4L373.8,339.6c31.3-37.2,48.5-84.1,48.5-132.9C422.3,92.7,329.5,0,215.6,0S8.8,92.7,8.8,206.7s92.7,206.7,206.7,206.7c42.8,0,83.6-12.9,118.4-37.4l122.8,127.7c5.1,5.3,12,8.3,19.4,8.3c7,0,13.6-2.7,18.7-7.5C505.6,494.2,506,477.1,495.6,466.4z M215.6,53.9c84.3,0,152.8,68.5,152.8,152.8s-68.5,152.8-152.8,152.8S62.8,291,62.8,206.7S131.3,53.9,215.6,53.9z"/>
                            </g>
                        </svg>
                    </a>
                </button>

                @if (auth('client')->check())
                    <ul class="navigation">
                        <li>
                            <a href="{{ route('client.show', auth('client')->user()->id) }}">
                                {{ auth('client')->user()->name}}
                            </a>
                        </li>

                        <li>
                            <a href="{{ route('client.logout')}}" onclick="event.preventDefault();
                             document.getElementById('logout').submit();">Выйти
                            </a>
                        </li>
                    </ul>

                    <form id="logout" action="{{ route('client.logout')}}" method="POST">
                        @csrf
                    </form>
                @else
                <button class="header-login-popup">
                    Вход | Регистрация
                    </button>
                @endif
            </div>
        </div>
    </div>
</header>
