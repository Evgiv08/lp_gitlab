<div class="account-admin-side-menu">
    <ul class="account-admin-side-menu-list">
        <li class="active">
            <a href="">Сборы</a>
            <ul>
                <li class="{{ Request::is('dashboard/new*') ? 'active' : '' }}">
                    <a href="{{ route('new.charity.index')}}">
                        <span>
                            Новые
                        </span>
                        <span class="account-admin-side-menu-count">
                            31
                        </span>
                    </a>
                </li>

                <li class="{{ Request::is('dashboard/active*') ? 'active' : '' }}">
                    <a href="{{ route('active.charity.index')}}">Активные</a>
                </li>

                <li class="{{ Request::is('dashboard/completed*') ? 'active' : '' }}">
                    <a href="{{ route('completed.charity.index')}}">Завершенные </a>
                </li>
            </ul>
        </li>

        <li class="{{ Request::is('dashboard/category*') ? 'active' : '' }}">
            <a href="{{ route('category.index')}}">Категория</a>
        </li>

        <li class="{{ Request::is('dashboard/appeals*') ? 'active' : '' }}">
            <a href="{{ route('appeals')}}">
                <span>
                    Жалобы
                </span>
                <span class="account-admin-side-menu-count">
                    31
                </span>
            </a>
        </li>

        <li class="{{ Request::is('dashboard/ban*') ? 'active' : '' }}">
            <a href="{{ route('ban.charity.index')}}">Бан</a>
        </li>

        <li class="{{ Request::is('dashboard/users*') ? 'active' : '' }}">
            <a href="{{ route('users')}}">Пользователи</a>
        </li>

        @if(auth('staff')->user()->role == __('app.Admin'))
            <li class="{{ Request::is('dashboard/staff*') ? 'active' : '' }}">
                <a href="{{ route('staff.index')}}">Команда</a>
            </li>
        @endif
    </ul>
</div>
