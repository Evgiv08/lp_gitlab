@extends('dashboard.layout.master')

@section('title', 'Войти')

@section('content')
    <div class="admin-login-block">
    <div class="admin-login-block-wrapper container">
        <div class="popup-content-block">
            <div class="popup-content-block-wrapper">

                <h1>ВХОД</h1>

                <div class="popup-step m--login">

                    <form class="main-form" action="">
                        <label class="label-input">
                            <span>Ваша почта:</span>
                            <input type="email" required>
                            <span class="error"> Некорректный email. Попробуйте еще раз</span>
                        </label>
                        <div class="label-password-top-block">
                            <span>Пароль:</span>
                        </div>
                        <label class="label-input">
                            <input type="password" required>
                            <span class="error">Неверный пароль. Введите еще раз</span>
                        </label>
                        <label class="label-checkbox">

                            <input type="checkbox">
                            <span>
                             Запомнить меня
                        </span>
                        </label>

                        <div class="button-wrapper">
                            <button type="submit" class="btn m--with-loader">
                                <span>
                                     войти
                                </span>
                                <span class="loader"></span>
                            </button>
                        </div>

                    </form>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection
