@extends('dashboard.layout.master')

@section('title', 'Сбор')

@section('content')
    <div class="popup hide-popup m--view-campaign">
        <div class="popup-content-block">
            <div class="popup-content-block-wrapper">

                <div class="popup-step m--campaign-back hide-step">

                    <form class="main-form" action="">
                        <label class="label-input">
                            <span>Введите сообщение: </span>
                            <textarea placeholder="Введите сообщение здесь 1"></textarea>
                        </label>
                        <div class="button-wrapper">
                            <button type="submit" class="btn m--with-loader">
                                <span>
                                     Отправить
                                </span>
                                <span class="loader"></span>
                            </button>
                        </div>

                    </form>
                </div>
                <div class="popup-step m--campaign-publish hide-step">

                    <form class="main-form" action="">
                        <label class="label-input">
                            <span>Введите сообщение: </span>
                            <textarea placeholder="Введите сообщение здесь 2"></textarea>
                        </label>
                        <div class="button-wrapper">
                            <button type="submit" class="btn m--with-loader">
                                <span>
                                     Отправить
                                </span>
                                <span class="loader"></span>
                            </button>
                        </div>

                    </form>
                </div>
                <div class="popup-step m--campaign-delete hide-step">

                    <form class="main-form" action="">
                        <label class="label-input">
                            <span>Введите сообщение: </span>
                            <textarea placeholder="Введите сообщение здесь 3"></textarea>
                        </label>
                        <div class="button-wrapper">
                            <button type="submit" class="btn m--with-loader">
                                <span>
                                     Отправить
                                </span>
                                <span class="loader"></span>
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="account-admin-content-block account-admin-campaign">

        <header>
            <h1>
                Просмотреть публикацию
            </h1>
        </header>
        <div class="account-admin-campaign-wrapper">
            <form action="" class="main-form new-campaign-form view-campaign">
                <label class="label-input">
                    <span>Цель сбора средств:</span>
                    <textarea disabled>Острое нарушение мозгового кровообращения по ишемическому типу в басейне левой внутренней сонной артерии внутренней сонной артерии</textarea>
                </label>

                <div class="text-block">
                    <div>
                        <span>Сумма сбора: </span>
                        <span>100 000 грн</span>
                    </div>
                    <div>
                        <span>Дата создания сбора: </span>
                        <span>21.03.2018</span>
                    </div>
                    <div>
                        <span>Дата окончания сбора: </span>
                        <span>21.03.2018</span>
                    </div>
                </div>
                <div class="text-wrapper">
                    <div class="text-block">
                        <div class="text-item">
                            <span>Пользователь: </span>
                            <span>Василий Васильев Васильевич</span>
                        </div>
                        <div class="text-item">
                            <span>Название банка</span>
                            <span>АО КБ «ПРИВАТБАНК»</span>
                        </div>
                        <div class="text-item">
                            <span>Номер счета: </span>
                            <span>4242 4242 4242 4242</span>
                        </div>
                        <div class="text-item">
                            <span>МФО: </span>
                            <span>434312</span>
                        </div>
                        <div class="text-item">
                            <span>ИНН: </span>
                            <span>0987654321</span>
                        </div>
                        <div class="text-item">
                            <span>email: </span>
                            <span>user@gmail.com</span>
                        </div>
                    </div>

                    <div class="text-block">
                        <div class="text-item">
                            <span>Пациент: </span>
                            <span>Василий Васильев Васильевич</span>
                        </div>
                        <div class="text-item">
                            <span>Дата рождения: </span>
                            <span>08.08.2018</span>
                        </div>

                        <div class="text-item">
                            <span>Населенный пункт: </span>
                            <span>Одесса</span>
                        </div>
                        <div class="text-item">
                            <span>Адрес: </span>
                            <span>Канатная 22, кв. 22</span>
                        </div>
                        <div class="text-item">
                            <span>Номер телефона: </span>
                            <span>+38 (096) 33 33 333</span>
                        </div>
                    </div>
                </div>

                <label class="label-select">
                    <span> Категория заболевания</span>
                    <select disabled>
                        <option value="">Сердечно-сосудистые заболевания</option>
                        <option value="">два</option>
                        <option value="">три</option>
                        <option value="">четыре</option>
                        <option value="">пять</option>
                        <option value="">шесть</option>
                        <option value="">семь</option>
                        <option value="">восемь</option>
                    </select>
                </label>

                <div class="main-foto">
                    <h3>
                        Фото обложки
                    </h3>
                    <img src="../../../dist/img/card1.jpg" alt="">
                </div>

                <label class="label-input label-textarea">
                    <span>Основной текст заявки</span>
                    <textarea disabled>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus aliquam animi assumenda atque autem blanditiis dolorem dolores esse, explicabo, facilis laboriosam libero maiores minus molestiae nam non, odit quisquam quo quod ratione repudiandae sed tempore vero. Accusamus alias architecto atque aut beatae culpa cum delectus deleniti deserunt dolor eligendi et, excepturi exercitationem facere incidunt inventore ipsam laboriosam libero minima molestias nulla odio quam quisquam, repellat similique, sint suscipit veritatis. Consequatur corporis deserunt dicta eius facilis ipsa itaque nisi veritatis. A at autem excepturi, illo, itaque natus nisi optio perspiciatis porro quo quod reiciendis sed totam, vel veritatis. Aliquid architecto aspernatur debitis deserunt dolore eius esse eum excepturi fugiat magnam nam nesciunt nisi provident, qui, quos reprehenderit sapiente vero. Aut beatae, consequatur deleniti dicta enim, labore libero minima molestias neque officiis praesentium quidem tenetur? Aliquam amet, asperiores, aut, consequatur cum debitis doloribus dolorum eius ex harum ipsa iure iusto laborum magnam molestias nostrum obcaecati officia perferendis quis reiciendis reprehenderit sequi tempora ut vel voluptate. Enim nesciunt perspiciatis repudiandae sapiente suscipit. Ab ad aliquid ipsum magnam porro ut vero! Alias, aperiam commodi consectetur ea eligendi modi molestias nam, perferendis quos rerum sequi sunt, tempore totam ut voluptatem. Ad architecto assumenda blanditiis culpa cum cupiditate deserunt dicta eaque eum exercitationem expedita facilis id incidunt ipsa iste, itaque iusto laborum mollitia nemo nulla obcaecati officia omnis possimus quibusdam quisquam quos saepe sed sequi suscipit tempora tempore vel velit voluptatum. Asperiores assumenda commodi consectetur consequuntur exercitationem, in iure laborum, minima mollitia porro quibusdam quidem velit voluptatibus. Aliquid at atque blanditiis commodi facere, in necessitatibus nostrum porro quod sint tempora vero voluptatum! Dolore doloribus eum fuga provident vero! Aliquam modi quo reiciendis tempora ullam ut voluptatibus. Alias architecto blanditiis dicta, dolore dolores ex excepturi facere harum minima molestiae natus numquam odit, quos recusandae reiciendis repellendus, voluptatibus!
                        </textarea>
                </label>

                <div class="link-block">
                    <h3>
                        Документы:
                    </h3>

                    <div class="link-block-wrapper">
                        <a href="/">
                            <span>Img паспорта автора заявки:</span>

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488.85 488.85" width="512"
                                 height="512">
                                <path d="M244.425 98.725c-93.4 0-178.1 51.1-240.6 134.1-5.1 6.8-5.1 16.3 0 23.1 62.5 83.1 147.2 134.2 240.6 134.2s178.1-51.1 240.6-134.1c5.1-6.8 5.1-16.3 0-23.1-62.5-83.1-147.2-134.2-240.6-134.2zm6.7 248.3c-62 3.9-113.2-47.2-109.3-109.3 3.2-51.2 44.7-92.7 95.9-95.9 62-3.9 113.2 47.2 109.3 109.3-3.3 51.1-44.8 92.6-95.9 95.9zm-3.1-47.4c-33.4 2.1-61-25.4-58.8-58.8 1.7-27.6 24.1-49.9 51.7-51.7 33.4-2.1 61 25.4 58.8 58.8-1.8 27.7-24.2 50-51.7 51.7z"
                                      data-original="#000000" class="active-path" data-old_color="#000000"
                                      fill="#363636"/>
                            </svg>
                        </a>
                        <a href="/">
                            <span>Img паспорта реципиента (больного):</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488.85 488.85" width="512"
                                 height="512">
                                <path d="M244.425 98.725c-93.4 0-178.1 51.1-240.6 134.1-5.1 6.8-5.1 16.3 0 23.1 62.5 83.1 147.2 134.2 240.6 134.2s178.1-51.1 240.6-134.1c5.1-6.8 5.1-16.3 0-23.1-62.5-83.1-147.2-134.2-240.6-134.2zm6.7 248.3c-62 3.9-113.2-47.2-109.3-109.3 3.2-51.2 44.7-92.7 95.9-95.9 62-3.9 113.2 47.2 109.3 109.3-3.3 51.1-44.8 92.6-95.9 95.9zm-3.1-47.4c-33.4 2.1-61-25.4-58.8-58.8 1.7-27.6 24.1-49.9 51.7-51.7 33.4-2.1 61 25.4 58.8 58.8-1.8 27.7-24.2 50-51.7 51.7z"
                                      data-original="#000000" class="active-path" data-old_color="#000000"
                                      fill="#363636"/>
                            </svg>
                        </a>
                        <a href="/">
                            <span>Img больничных документов:</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488.85 488.85" width="512"
                                 height="512">
                                <path d="M244.425 98.725c-93.4 0-178.1 51.1-240.6 134.1-5.1 6.8-5.1 16.3 0 23.1 62.5 83.1 147.2 134.2 240.6 134.2s178.1-51.1 240.6-134.1c5.1-6.8 5.1-16.3 0-23.1-62.5-83.1-147.2-134.2-240.6-134.2zm6.7 248.3c-62 3.9-113.2-47.2-109.3-109.3 3.2-51.2 44.7-92.7 95.9-95.9 62-3.9 113.2 47.2 109.3 109.3-3.3 51.1-44.8 92.6-95.9 95.9zm-3.1-47.4c-33.4 2.1-61-25.4-58.8-58.8 1.7-27.6 24.1-49.9 51.7-51.7 33.4-2.1 61 25.4 58.8 58.8-1.8 27.7-24.2 50-51.7 51.7z"
                                      data-original="#000000" class="active-path" data-old_color="#000000"
                                      fill="#363636"/>
                            </svg>
                        </a>
                    </div>

                </div>

                <div class="button-wrapper hide">
                    <button type="submit" class="btn">Сохранить</button>
                </div>

            </form>

            <div class="button-block">
                <button class="btn btn-transparent campaign-back">
                    на доработку
                </button>
                <button class="btn campaign-publish">
                    Опубликовать
                </button>
                <button class="btn btn-transparent campaign-delete">
                    Отклонить
                </button>
                <button class="btn btn-transparent campaign-edit">
                    редактировать
                </button>
            </div>
        </div>

    </div>
@endsection
