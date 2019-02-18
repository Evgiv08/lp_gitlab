<div class="popup hide-popup">
    <div class="popup-content-block">
        <div class="popup-content-block-wrapper">

            <div class="popup-step m--login">

                <form class="main-form" action="{{ route('client.login') }}" method="post">
                    @csrf
                    <label class="label-input">
                        <span>Ваша почта:</span>
                        <input type="email" name="email" value="{{ old('email') }}" required>
                        <span class="error"> Некорректный email. Попробуйте еще раз</span>
                    </label>

                    <div class="label-password-top-block">
                        <span>Пароль:</span>
                        <button class="forgot-password" type="button">
                            Забыли пароль?
                        </button>
                    </div>

                    <label class="label-input">
                        <input type="password" name="password"  required>
                        <span class="error">Неверный пароль. Введите еще раз</span>
                    </label>

                    <label class="label-checkbox">

                        <input type="checkbox" name="remember">
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

                <a href="{{ route('client.create_form') }}" class="no-account">
                    Нет аккаунта?
                </a>

                <div class="block-line"></div>
                <div class="social-login-block">
                    <h4>
                        или можете войти через соцсети
                    </h4>

                    <div class="link-wrapper">
                        <a href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M460.8 0H51.2C23 0 0 23 0 51.2v409.6C0 489 23 512 51.2 512h409.6c28.2 0 51.2-23 51.2-51.2V51.2C512 23 489 0 460.8 0zm-25.6 51.2V128H384c-15.4 0-25.6 10.2-25.6 25.6v51.2h76.8v76.8h-76.8v179.2h-76.8V281.6h-51.2v-76.8h51.2v-64c0-48.6 41-89.6 89.6-89.6h64z"/>
                            </svg>
                        </a>
                        <a href="/">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                <path d="M235.5 176.6c0-25.6-15.4-76.8-53.8-76.8-15.4 0-33.3 10.2-33.3 43.5 0 30.7 15.4 74.2 51.2 74.2.1.1 35.9-2.5 35.9-40.9zm-15.3 125.5h-7.7c-7.7 0-30.7 2.6-46.1 7.7-17.9 5.1-38.4 17.9-38.4 43.5 0 28.2 25.6 56.3 76.8 56.3 38.4 0 61.4-25.6 61.4-51.2 0-17.9-12.8-30.7-46-56.3zM460.8 0H51.2C23 0 0 23 0 51.2v409.6C0 489 23 512 51.2 512h409.6c28.2 0 51.2-23 51.2-51.2V51.2C512 23 489 0 460.8 0zm-279 440.3c-71.7 0-105-41-105-76.8 0-12.8 2.6-41 38.4-61.4 20.5-12.8 46.1-20.5 79.4-23-5.1-5.1-7.7-12.8-7.7-25.6 0-5.1 0-7.7 2.6-12.8h-10.2c-51.2 0-81.9-38.4-81.9-76.8 0-43.5 33.3-92.2 105-92.2h107.5l-7.7 7.7-17.9 17.9-2.6 2.6h-17.9c10.2 10.2 23 28.2 23 56.3 0 35.8-17.9 53.8-41 69.1-5.1 2.6-10.2 10.2-10.2 17.9s5.1 12.8 10.2 15.4c2.6 2.6 7.7 5.1 12.8 7.7 20.5 15.4 48.6 33.3 48.6 74.2 0 46.1-33.3 99.8-125.4 99.8zM435.2 256H384v51.2h-25.6V256h-51.2v-25.6h51.2v-51.2H384v51.2h51.2V256z" fill="#e96b17"/>
                            </svg>
                        </a>
                    </div>
                </div>
            </div>

            <div class="popup-step m--restore-password hide-step">
                <button type="button" class="button-back">
                    назад
                </button>

                <h6>
                    Введите email, который Вы указывали при регистрации:
                </h6>

                <form class="main-form" action="">
                    <label class="label-input"><input type="text">
                        <span class="error">Некорректный email. Попробуйте еще раз</span>
                    </label>

                    <div class="button-wrapper">
                        <button class="btn m--with-loader" type="submit">
                            <span>отправить</span>
                            <span class="loader"></span>
                        </button>
                    </div>
                </form>
            </div>

            <div class="popup-step m--thanks hide-step"></div>
        </div>
    </div>
</div>
