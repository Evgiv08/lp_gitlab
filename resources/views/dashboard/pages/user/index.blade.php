@extends('dashboard.layout.master')

@section('title', 'Пользователи')

@section('content')
    <div class="account-admin-content-block account-admin-appeal">

    <header>
        <h1>
            Пользователи
        </h1>
    </header>

    <div class="account-admin-appeal-wrapper">
        <table class="account-admin-table">
            <tr class="title">
                <th>№</th>
                <th>Пользователь</th>
                <th>Почта</th>
                <th>Заявки</th>
                <th>Пожертвовал</th>
                <th>Собрал</th>
                <th>Действия</th>
            </tr>
            <tr>
                <td>1</td>
                <td>Камишанченко Оксана</td>
                <td>
                    aezak@mi
                </td>
                <td>
                    {{--<a href="{{ route('active.charity.show') }}">2112</a><br>--}}
                    {{--<a href="{{ route('new_show') }}">12</a><br>--}}
                    {{--<a href="{{ route('ban_show') }}">786</a>--}}
                </td>
                <td>
                    2 000$
                </td>
                <td>
                    150$
                </td>
                <td class="button-block">
                    <a href="">
                        <svg aria-hidden="true" data-prefix="fas" data-icon="ban"
                             class="svg-inline--fa fa-ban fa-w-16" xmlns="http://www.w3.org/2000/svg"
                             viewBox="0 0 512 512">
                            <path d="M256 8C119.034 8 8 119.033 8 256s111.034 248 248 248 248-111.034 248-248S392.967 8 256 8zm130.108 117.892c65.448 65.448 70 165.481 20.677 235.637L150.47 105.216c70.204-49.356 170.226-44.735 235.638 20.676zM125.892 386.108c-65.448-65.448-70-165.481-20.677-235.637L361.53 406.784c-70.203 49.356-170.226 44.736-235.638-20.676z"/>
                        </svg>
                    </a>
                </td>
            </tr>

        </table>
    </div>

</div>
@endsection
