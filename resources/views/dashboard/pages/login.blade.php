@extends('dashboard.layout.master')

@section('title', 'Войти')

@section('content')
    <div class="admin-login-block">
        <div class="admin-login-block-wrapper container">
            <div class="popup-content-block">
                <div class="popup-content-block-wrapper">

                    <h1>ВХОД</h1>

                    <div class="popup-step m--login">
                        <form class="main-form" method="POST" action="{{ route('staff.login')}}">
                            @csrf

                            <label class="label-input">
                                <span>Ваша почта:</span>
                                <input type="email" name="email" value="{{ old('email') }}" required
                                    placeholder="admin@admin.com"
                                >
                                {{-- Display errors --}}
                                @if ($errors->has('email'))
                                    <span class="error" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </label>

                            <div class="label-password-top-block">
                                <span>Пароль:</span>
                            </div>
                            <label class="label-input">
                                <input type="password" name="password" required
                                    placeholder="adminpass"
                                >
                                {{-- Display errors --}}
                                @if ($errors->has('password'))
                                    <span class="error" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
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
