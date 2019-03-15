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
                        @include('dashboard.elements.delete')
                    </a>
                </td>
            </tr>

        </table>
    </div>

</div>
@endsection
