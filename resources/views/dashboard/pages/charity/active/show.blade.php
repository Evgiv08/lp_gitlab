@extends('dashboard.layout.master')

@section('title', 'Просмотр сборa')

@section('content')
    <div class="popup hide-popup m--view-campaign">
        <div class="popup-content-block">
            <div class="popup-content-block-wrapper">
                {{--delete form goes to ban --}}
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
                Просмотр активного сбора
            </h1>
        </header>
        <div class="account-admin-campaign-wrapper">
            <form action="" class="main-form new-campaign-form view-campaign">
                <label class="label-input">
                    <span>Цель сбора средств:</span>
                    <textarea disabled>{{ $charity->purpose }}</textarea>
                </label>

                <div class="text-block">
                    <div>
                        <span>Сумма сбора: </span>
                        <span>{{ $charity->sum }}</span>
                    </div>
                    <div>
                        <span>Дата создания сбора: </span>
                        <span>{{ $charity->start_date }}</span>
                    </div>
                    <div>
                        <span>Дата окончания сбора: </span>
                        <span>{{ $charity->finish_date }}</span>
                    </div>
                </div>
                <div class="text-wrapper">
                    <div class="text-block">
                        <div class="text-item">
                            <span>Пользователь: </span>
                            <span>{{ $charity->client->name . ' ' . $charity->client->surname }}</span>
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
                            <span>{{ $charity->client->email }}</span>
                        </div>
                    </div>

                    <div class="text-block">
                        <div class="text-item">
                            <span>Пациент: </span>
                            <span>{{ $charity->full_name }}</span>
                        </div>
                        <div class="text-item">
                            <span>Дата рождения: </span>
                            <span>{{ $charity->birth_date }}</span>
                        </div>

                        <div class="text-item">
                            <span>Населенный пункт: </span>
                            <span>{{ $charity->locality }}</span>
                        </div>
                        <div class="text-item">
                            <span>Адрес: </span>
                            <span>{{ $charity->address }}</span>
                        </div>
                        <div class="text-item">
                            <span>Номер телефона: </span>
                            <span>{{ $charity->phone }}</span>
                        </div>
                    </div>
                </div>

                <label class="label-select">
                    <span> Категория заболевания</span>
                    <select disabled>
                        <option value="">{{ $charity->category->title }}</option>
                    </select>
                </label>

                <div class="main-foto">
                    <h3>
                        Фото обложки
                    </h3>
                    <img src="{{ asset('img/card1.jpg') }}" alt="">
                </div>

                <label class="label-input label-textarea">
                    <span>Основной текст заявки</span>
                    <textarea disabled>{{ $charity->about }}</textarea>
                </label>

                <div class="link-block">
                    <h3>
                        Документы:
                    </h3>

                    <div class="link-block-wrapper">
                        <a href="">
                            <span>Img паспорта автора заявки:</span>

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488.85 488.85" width="512"
                                 height="512">
                                <path d="M244.425 98.725c-93.4 0-178.1 51.1-240.6 134.1-5.1 6.8-5.1 16.3 0 23.1 62.5 83.1 147.2 134.2 240.6 134.2s178.1-51.1 240.6-134.1c5.1-6.8 5.1-16.3 0-23.1-62.5-83.1-147.2-134.2-240.6-134.2zm6.7 248.3c-62 3.9-113.2-47.2-109.3-109.3 3.2-51.2 44.7-92.7 95.9-95.9 62-3.9 113.2 47.2 109.3 109.3-3.3 51.1-44.8 92.6-95.9 95.9zm-3.1-47.4c-33.4 2.1-61-25.4-58.8-58.8 1.7-27.6 24.1-49.9 51.7-51.7 33.4-2.1 61 25.4 58.8 58.8-1.8 27.7-24.2 50-51.7 51.7z"
                                      data-original="#000000" class="active-path" data-old_color="#000000"
                                      fill="#363636"/>
                            </svg>
                        </a>
                        <a href="">
                            <span>Img паспорта реципиента (больного):</span>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488.85 488.85" width="512"
                                 height="512">
                                <path d="M244.425 98.725c-93.4 0-178.1 51.1-240.6 134.1-5.1 6.8-5.1 16.3 0 23.1 62.5 83.1 147.2 134.2 240.6 134.2s178.1-51.1 240.6-134.1c5.1-6.8 5.1-16.3 0-23.1-62.5-83.1-147.2-134.2-240.6-134.2zm6.7 248.3c-62 3.9-113.2-47.2-109.3-109.3 3.2-51.2 44.7-92.7 95.9-95.9 62-3.9 113.2 47.2 109.3 109.3-3.3 51.1-44.8 92.6-95.9 95.9zm-3.1-47.4c-33.4 2.1-61-25.4-58.8-58.8 1.7-27.6 24.1-49.9 51.7-51.7 33.4-2.1 61 25.4 58.8 58.8-1.8 27.7-24.2 50-51.7 51.7z"
                                      data-original="#000000" class="active-path" data-old_color="#000000"
                                      fill="#363636"/>
                            </svg>
                        </a>
                        <a href="">
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

            </form>

            <table class="account-admin-table">
                <tr class="title">
                    <th>№</th>
                    <th>Пользователь</th>
                    <th>Сообщение</th>
                    <th>Дата</th>
                    <th>Действия</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>Камишанченко Оксана</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam dolorum excepturi
                        magni! Ab assumenda at autem, iure laudantium neque nesciunt nihil nisi placeat quas quasi
                        qui sit temporibus velit.
                    </td>
                    <td>
                        27.12.19
                    </td>
                    <td class="button-block">
                        <div class="popup m--admin-show-appeal hide-popup">
                            <div class="popup-content-block">
                                <div class="popup-content-block-wrapper">
                                    <div class="popup-step">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad,
                                            blanditiis deleniti doloremque, earum expedita in ipsum laudantium nisi
                                            obcaecati odio pariatur perspiciatis quasi rem tenetur totam veritatis.
                                            Amet atque consectetur dolorum error et eveniet expedita explicabo
                                            facilis fuga id impedit itaque labore laborum minima nihil obcaecati
                                            omnis, porro praesentium quae quasi quibusdam quis similique soluta ut
                                            veniam? Blanditiis earum eligendi esse eum, explicabo inventore magni
                                            ratione sit unde voluptatum. A accusantium aliquid assumenda beatae
                                            corporis delectus deserunt esse facilis inventore ipsum iure laudantium
                                            natus nulla, odio officia pariatur perferendis provident, rem sit unde
                                            vel veniam voluptatibus. Animi delectus dolor et, expedita fugiat ipsam,
                                            itaque laborum modi odio quaerat quam quisquam repellendus saepe ullam
                                            vel velit vero voluptatem. Ab accusantium adipisci atque consectetur
                                            deleniti ducimus, excepturi facere fuga incidunt ipsum labore laudantium
                                            non nulla obcaecati, odio odit perspiciatis quaerat quod rerum
                                            temporibus tenetur totam veniam! At consequatur consequuntur cumque
                                            delectus dicta dolorem eligendi est et inventore molestias nam neque
                                            obcaecati odio quisquam quos repellendus saepe similique veniam, vero
                                            voluptate. Cum debitis ducimus ex numquam porro possimus praesentium
                                            quidem repudiandae rerum voluptatibus? Accusamus aperiam autem
                                            blanditiis debitis, ducimus eius et illum ipsum maiores molestias nihil,
                                            nisi placeat porro possimus quas quis sapiente temporibus ullam veniam
                                            vero! Accusantium beatae consequatur distinctio eos est explicabo itaque
                                            libero molestias non, quam repudiandae, tempora tempore temporibus?
                                            Deserunt ducimus facere harum id quasi quod vel! Ad adipisci alias
                                            aliquam asperiores aspernatur cupiditate deleniti dicta doloribus
                                            ducimus eos error, eum exercitationem expedita fugit illum ipsum magnam
                                            molestias nemo, nesciunt nisi nulla numquam possimus quae quia quisquam
                                            quod repellendus reprehenderit sed sit sunt tempora ullam vitae
                                            voluptate? A beatae corporis dolore eaque earum eius eveniet iure labore
                                            laborum non, praesentium quibusdam quis sapiente totam voluptates.
                                            Consequuntur dolorem eum, eveniet ex in quod saepe sint. At id maxime
                                            nam!</p>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <button class="admin-open-appeal">
                            <svg aria-hidden="true" data-prefix="fas" data-icon="pen-square"
                                 class="svg-inline--fa fa-pen-square fa-w-14" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 448 512">
                                <path d="M400 480H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48v352c0 26.5-21.5 48-48 48zM238.1 177.9L102.4 313.6l-6.3 57.1c-.8 7.6 5.6 14.1 13.3 13.3l57.1-6.3L302.2 242c2.3-2.3 2.3-6.1 0-8.5L246.7 178c-2.5-2.4-6.3-2.4-8.6-.1zM345 165.1L314.9 135c-9.4-9.4-24.6-9.4-33.9 0l-23.1 23.1c-2.3 2.3-2.3 6.1 0 8.5l55.5 55.5c2.3 2.3 6.1 2.3 8.5 0L345 199c9.3-9.3 9.3-24.5 0-33.9z"/>
                            </svg>
                        </button>
                        <a href="">
                            <svg aria-hidden="true" data-prefix="fas" data-icon="ban"
                                 class="svg-inline--fa fa-ban fa-w-16" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 512 512">
                                <path d="M256 8C119.034 8 8 119.033 8 256s111.034 248 248 248 248-111.034 248-248S392.967 8 256 8zm130.108 117.892c65.448 65.448 70 165.481 20.677 235.637L150.47 105.216c70.204-49.356 170.226-44.735 235.638 20.676zM125.892 386.108c-65.448-65.448-70-165.481-20.677-235.637L361.53 406.784c-70.203 49.356-170.226 44.736-235.638-20.676z"/>
                            </svg>
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>1</td>
                    <td>Камишанченко Оксана</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam dolorum excepturi
                        magni! Ab assumenda at autem, iure laudantium neque nesciunt nihil nisi placeat quas quasi
                        qui sit temporibus velit.
                    </td>
                    <td>
                        27.12.19
                    </td>
                    <td class="button-block">
                        <div class="popup m--admin-show-appeal hide-popup">
                            <div class="popup-content-block">
                                <div class="popup-content-block-wrapper">
                                    <div class="popup-step">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad,
                                            blanditiis deleniti doloremque, earum expedita in ipsum laudantium nisi
                                            obcaecati odio pariatur perspiciatis quasi rem tenetur totam veritatis.
                                            Amet atque consectetur dolorum error et eveniet expedita explicabo
                                            facilis fuga id impedit itaque labore laborum minima nihil obcaecati
                                            omnis, porro praesentium quae quasi quibusdam quis similique soluta ut
                                            veniam? Blanditiis earum eligendi esse eum, explicabo inventore magni
                                            ratione sit unde voluptatum. A accusantium aliquid assumenda beatae
                                            corporis delectus deserunt esse facilis inventore ipsum iure laudantium
                                            natus nulla, odio officia pariatur perferendis provident, rem sit unde
                                            vel veniam voluptatibus. Animi delectus dolor et, expedita fugiat ipsam,
                                            itaque laborum modi odio quaerat quam quisquam repellendus saepe ullam
                                            vel velit vero voluptatem. Ab accusantium adipisci atque consectetur
                                            deleniti ducimus, excepturi facere fuga incidunt ipsum labore laudantium
                                            non nulla obcaecati, odio odit perspiciatis quaerat quod rerum
                                            temporibus tenetur totam veniam! At consequatur consequuntur cumque
                                            delectus dicta dolorem eligendi est et inventore molestias nam neque
                                            obcaecati odio quisquam quos repellendus saepe similique veniam, vero
                                            voluptate. Cum debitis ducimus ex numquam porro possimus praesentium
                                            quidem repudiandae rerum voluptatibus? Accusamus aperiam autem
                                            blanditiis debitis, ducimus eius et illum ipsum maiores molestias nihil,
                                            nisi placeat porro possimus quas quis sapiente temporibus ullam veniam
                                            vero! Accusantium beatae consequatur distinctio eos est explicabo itaque
                                            libero molestias non, quam repudiandae, tempora tempore temporibus?
                                            Deserunt ducimus facere harum id quasi quod vel! Ad adipisci alias
                                            aliquam asperiores aspernatur cupiditate deleniti dicta doloribus
                                            ducimus eos error, eum exercitationem expedita fugit illum ipsum magnam
                                            molestias nemo, nesciunt nisi nulla numquam possimus quae quia quisquam
                                            quod repellendus reprehenderit sed sit sunt tempora ullam vitae
                                            voluptate? A beatae corporis dolore eaque earum eius eveniet iure labore
                                            laborum non, praesentium quibusdam quis sapiente totam voluptates.
                                            Consequuntur dolorem eum, eveniet ex in quod saepe sint. At id maxime
                                            nam!</p>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <button class="admin-open-appeal">
                            <svg aria-hidden="true" data-prefix="fas" data-icon="pen-square"
                                 class="svg-inline--fa fa-pen-square fa-w-14" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 448 512">
                                <path d="M400 480H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48v352c0 26.5-21.5 48-48 48zM238.1 177.9L102.4 313.6l-6.3 57.1c-.8 7.6 5.6 14.1 13.3 13.3l57.1-6.3L302.2 242c2.3-2.3 2.3-6.1 0-8.5L246.7 178c-2.5-2.4-6.3-2.4-8.6-.1zM345 165.1L314.9 135c-9.4-9.4-24.6-9.4-33.9 0l-23.1 23.1c-2.3 2.3-2.3 6.1 0 8.5l55.5 55.5c2.3 2.3 6.1 2.3 8.5 0L345 199c9.3-9.3 9.3-24.5 0-33.9z"/>
                            </svg>
                        </button>
                        <a href="">
                            <svg aria-hidden="true" data-prefix="fas" data-icon="ban"
                                 class="svg-inline--fa fa-ban fa-w-16" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 512 512">
                                <path d="M256 8C119.034 8 8 119.033 8 256s111.034 248 248 248 248-111.034 248-248S392.967 8 256 8zm130.108 117.892c65.448 65.448 70 165.481 20.677 235.637L150.47 105.216c70.204-49.356 170.226-44.735 235.638 20.676zM125.892 386.108c-65.448-65.448-70-165.481-20.677-235.637L361.53 406.784c-70.203 49.356-170.226 44.736-235.638-20.676z"/>
                            </svg>
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>1</td>
                    <td>Камишанченко Оксана</td>
                    <td>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam dolorum excepturi
                        magni! Ab assumenda at autem, iure laudantium neque nesciunt nihil nisi placeat quas quasi
                        qui sit temporibus velit.
                    </td>
                    <td>
                        27.12.19
                    </td>
                    <td class="button-block">
                        <div class="popup m--admin-show-appeal hide-popup">
                            <div class="popup-content-block">
                                <div class="popup-content-block-wrapper">
                                    <div class="popup-step">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ad,
                                            blanditiis deleniti doloremque, earum expedita in ipsum laudantium nisi
                                            obcaecati odio pariatur perspiciatis quasi rem tenetur totam veritatis.
                                            Amet atque consectetur dolorum error et eveniet expedita explicabo
                                            facilis fuga id impedit itaque labore laborum minima nihil obcaecati
                                            omnis, porro praesentium quae quasi quibusdam quis similique soluta ut
                                            veniam? Blanditiis earum eligendi esse eum, explicabo inventore magni
                                            ratione sit unde voluptatum. A accusantium aliquid assumenda beatae
                                            corporis delectus deserunt esse facilis inventore ipsum iure laudantium
                                            natus nulla, odio officia pariatur perferendis provident, rem sit unde
                                            vel veniam voluptatibus. Animi delectus dolor et, expedita fugiat ipsam,
                                            itaque laborum modi odio quaerat quam quisquam repellendus saepe ullam
                                            vel velit vero voluptatem. Ab accusantium adipisci atque consectetur
                                            deleniti ducimus, excepturi facere fuga incidunt ipsum labore laudantium
                                            non nulla obcaecati, odio odit perspiciatis quaerat quod rerum
                                            temporibus tenetur totam veniam! At consequatur consequuntur cumque
                                            delectus dicta dolorem eligendi est et inventore molestias nam neque
                                            obcaecati odio quisquam quos repellendus saepe similique veniam, vero
                                            voluptate. Cum debitis ducimus ex numquam porro possimus praesentium
                                            quidem repudiandae rerum voluptatibus? Accusamus aperiam autem
                                            blanditiis debitis, ducimus eius et illum ipsum maiores molestias nihil,
                                            nisi placeat porro possimus quas quis sapiente temporibus ullam veniam
                                            vero! Accusantium beatae consequatur distinctio eos est explicabo itaque
                                            libero molestias non, quam repudiandae, tempora tempore temporibus?
                                            Deserunt ducimus facere harum id quasi quod vel! Ad adipisci alias
                                            aliquam asperiores aspernatur cupiditate deleniti dicta doloribus
                                            ducimus eos error, eum exercitationem expedita fugit illum ipsum magnam
                                            molestias nemo, nesciunt nisi nulla numquam possimus quae quia quisquam
                                            quod repellendus reprehenderit sed sit sunt tempora ullam vitae
                                            voluptate? A beatae corporis dolore eaque earum eius eveniet iure labore
                                            laborum non, praesentium quibusdam quis sapiente totam voluptates.
                                            Consequuntur dolorem eum, eveniet ex in quod saepe sint. At id maxime
                                            nam!</p>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <button class="admin-open-appeal">
                            <svg aria-hidden="true" data-prefix="fas" data-icon="pen-square"
                                 class="svg-inline--fa fa-pen-square fa-w-14" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 448 512">
                                <path d="M400 480H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48v352c0 26.5-21.5 48-48 48zM238.1 177.9L102.4 313.6l-6.3 57.1c-.8 7.6 5.6 14.1 13.3 13.3l57.1-6.3L302.2 242c2.3-2.3 2.3-6.1 0-8.5L246.7 178c-2.5-2.4-6.3-2.4-8.6-.1zM345 165.1L314.9 135c-9.4-9.4-24.6-9.4-33.9 0l-23.1 23.1c-2.3 2.3-2.3 6.1 0 8.5l55.5 55.5c2.3 2.3 6.1 2.3 8.5 0L345 199c9.3-9.3 9.3-24.5 0-33.9z"/>
                            </svg>
                        </button>
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

            {{--delete button goes to ban--}}
            <div class="button-block">
                <button class="btn btn-transparent campaign-delete">
                    Забанить
                </button>
            </div>
        </div>

    </div>
@endsection
