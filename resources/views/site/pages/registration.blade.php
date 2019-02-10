@extends('site.layout.master')


@section('content')
<div class="registration-block">
  <div class="registration-block-wrapper container">
      <h1>
          регистрация пользователя
      </h1>

      <div class="social-registration">
          <h3>
              Вы можете войти через соцсети
          </h3>

          <div class="button-social-block">
              <div class="button-registration m--facebook">
                <img src="{{ asset('img/login-facebook.jpg') }}" alt="">
              </div>

              <div class="button-registration m--google">
                <img src="{{ asset('img/login-google.jpg') }}" alt="">
              </div>
          </div>
      </div>

      <div class="block-line"></div>

      <div class="registration-block-main-form">
          <h3>
              или зарегистрироваться через email
          </h3>

          <form action="{{ route('user.register') }}" method="post" class="main-form m--registration">
              @csrf
              <div class="input-wrapper">
                  <label class="label-input">
                      <span>Имя:</span>
                      <input type="text" required="" placeholder="Василий" name="name" value="{{ old('name') }}">
                      <span class="error"> Поле не заполнено</span>
                  </label>

                  <label class="label-input">
                      <span>Фамилия (опционально):</span>
                      <input type="text" placeholder="Васильев" name="surname" value="{{ old('surname') }}">
                  </label>
              </div>

              <div class="input-wrapper">
                  <label class="label-input">
                      <span>Ваша почта:</span>
                      <input type="email" required="" placeholder="vasiliy@lifespulse.com"  name="email" value="{{ old
                      ('email') }}">
                      <span class="error"> Некорректный email. Попробуйте еще раз</span>
                  </label>

                  <label class="label-input">
                      <span>Ваш номер телефона (опционально):</span>
                      <input type="tel" placeholder="+38  (096) 33 33 333" name="phone" value="{{ old
                      ('phone') }}">
                      <span class="info">Ваш номер телефона - конфиденциальная информация. Он не будет доступен другим пользователям</span>
                      <span class="error"> Неправильный ввод номера. Попробуйте еще раз</span>
                  </label>
              </div>

              <label class="label-input m--password">
                  <span>Пароль:</span>
                  <input type="password" required="" placeholder="Введите пароль" name="password">
                  <span class="info">Пароль должен состоять из букв и цифер, содержать минимум 6 знаков, 3 из которых уникальные</span>
                  <span class="error"> Пароль должен состоять из букв и цифер, содержать минимум 6 знаков, 3 из которых уникальные</span>
              </label>

              <label class="label-input m--password">
                  <span>Повторите пароль:</span>
                  <input type="password" required="" placeholder="Введите пароль" name="password_confirmation">
                  <span class="error"> Пароли не совпадают. Повторите еще раз</span>
              </label>

              <label class="label-checkbox">

                  <input type="checkbox" name="confirm">
                  <span>
                      <span>
                            Я соглашаюсь с <a href="/"> Политикой конфиденциальности</a> и <a href="/">Правилами пользования сайтом</a>
                      </span>
                  </span>
              </label>

              <div class="button-wrapper">
                  <button class="btn m--with-loader" type="submit">

                      <span>создать профиль</span>

                      <span class="loader"></span>

                  </button>
              </div>
          </form>
      </div>

      <div class="bottom-info-block">
          <div>
             <span> Есть вопросы?</span> <a href="mailto:support@info.com">support@info.com</a>
          </div>

          <div>
              <a href="/">Уже есть аккаунт?</a>
          </div>
      </div>
  </div>
</div>
@endsection
