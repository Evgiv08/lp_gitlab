@extends('dashboard.layout.master')

@section('title', 'Команда')

@section('content')
    <div class="account-admin-content-block account-admin-staff">
        {{--Popup Window--}}
        <div class="popup m--admin-add-new-staff hide-popup">
            <div class="popup-content-block">
                <div class="popup-content-block-wrapper">
                    <div class="popup-step">
                        {{--Create new member of Staff--}}
                        <form class="main-form" method="POST" action="{{ route('staff.create') }}">
                            @csrf
                            <h3>Добавить пользователя</h3>

                            <label class="label-input">
                                <span>Имя и фамилия</span>
                                <input type="text" name="name" value="{{ old('name') }}" required>
                                <span class="error">Введите имя и фамилию</span>
                            </label>

                            <label class="label-input">
                                <span>Email</span>
                                <input type="email" name="email" value="{{ old('email') }}" required>
                                <span class="error"> Некорректный email. Попробуйте еще раз</span>
                            </label>

                            <label class="label-select">
                                <span>Роль в комманде</span>
                                <select name="role_id" id="">
                                    <option value="{{ config('constants.admin') }}">Администратор</option>
                                    <option value="{{ config('constants.accountant') }}">Бухгалтер</option>
                                </select>
                            </label>

                            <label class="label-input">
                                <span>Пароль</span>
                                <input type="password" name="password" required>
                                <span class="error">Неверный пароль. Введите еще раз</span>
                            </label>

                            <label class="label-input">
                                <span>Повторите пароль</span>
                                <input type="password" name="password_confirmation" required>
                                <span class="error">Неверный пароль. Введите еще раз</span>
                            </label>

                            <div class="button-wrapper">
                                <button type="submit" class="btn m--with-loader">
                                    <span>
                                        Сохранить
                                    </span>
                                    <span class="loader"></span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        {{--Popup Window end--}}

        {{--Table Content--}}
        <header>
            <h1>
                Команда
            </h1>

            <button type="button" class="account-admin-new-staff">Добавить пользователя</button>
        </header>

        <div class="account-admin-staff-wrapper">
            <table class="account-admin-table">
                <tr class="title">
                    <th>№</th>
                    <th>Пользователь</th>
                    <th>Роль</th>
                    <th>Действия</th>
                </tr>

                @forelse($staff as $employee)
                    <tr>
                        <td>{{ $employee->id }}</td>
                        <td>{{ $employee->name }} - {{ $employee->email }}</td>
                        <td>{{ $employee->role->title }}</td>
                        <td class="button-block">
                            <div class="popup m--admin-edit-staff hide-popup">
                                <div class="popup-content-block">
                                    <div class="popup-content-block-wrapper">
                                        <div class="popup-step">

                                            {{--Update Staff--}}
                                            <form class="main-form" method="POST"
                                                  action="{{ route('staff.update', $employee->id) }}"
                                            >
                                                @method('PATCH')
                                                @csrf
                                                <h3>Изменить профиль</h3>

                                                {{--<label class="label-input">--}}
                                                    {{--<span>Email</span>--}}
                                                    {{--<input type="email" name="email" value="{{ $employee->email }}"--}}
                                                           {{--disabled>--}}
                                                {{--</label>--}}

                                                <label class="label-select">
                                                    <span>Роль в комманде</span>
                                                    <select name="role_id" {{ $employee->role->title == __('app.admin') ? 'disabled' : ''}}>
                                                        <option value="{{ config('constants.admin') }}"
                                                                {{ $employee->role->title == __('app.admin') ? 'selected' : ''}}
                                                        >
                                                            {{ __('app.admin') }}
                                                        </option>

                                                        <option value="{{ config('constants.accountant') }}"
                                                                {{ $employee->role->title == __('app.accountant') ? 'selected' : ''}}>
                                                            {{ __('app.accountant') }}
                                                        </option>
                                                    </select>
                                                </label>

                                                <label class="label-input">
                                                    <span>Новый пароль</span>
                                                    <input type="password" name="password">
                                                    <span class="error">Неверный пароль. Введите еще раз</span>
                                                </label>

                                                <label class="label-input">
                                                    <span>Повторите пароль</span>
                                                    <input type="password" name="password_confirmation">
                                                    <span class="error">Неверный пароль. Введите еще раз</span>
                                                </label>

                                                <div class="button-wrapper">
                                                    <button type="submit" class="btn m--with-loader">
                                                        <span>
                                                            Сохранить
                                                        </span>
                                                        <span class="loader"></span>
                                                    </button>
                                                </div>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <button class="admin-edit-staff">
                                @include('dashboard.elements.edit')
                            </button>

                            {{--Delete Staff--}}
                            <a href="{{ route('staff.destroy', $employee->id)}}"
                               onclick="event.preventDefault();
                                       document.getElementById('delete-staff-{{ $employee->id }}').submit();">
                                @include('dashboard.elements.delete')
                            </a>

                            <form id="delete-staff-{{ $employee->id }}" action="{{ route('staff.destroy', $employee->id)}}"
                                  method="POST">
                                @method('DELETE')
                                @csrf
                            </form>
                        </td>
                    </tr>
                @empty
                    <tr><td colspan="4">Комманды нет...</td></tr>
                @endforelse
            </table>
        </div>
    </div>
@endsection
