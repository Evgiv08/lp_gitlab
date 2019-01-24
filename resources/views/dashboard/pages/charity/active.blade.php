@extends('dashboard.layout.master')

@section('title', 'Активные сборы')

@section('content')
    <div class="account-admin-content-block account-admin-application">

        <header>
            <h1>
                Активные сборы
            </h1>
        </header>
        <div class="account-admin-application-wrapper">
            <table class="account-admin-table m--big-table">
                <tr class="title">
                    <th>
                            <span>
                                Автор
                            </span>

                        <div class="title-sort-block">
                            <a href="/">
                                <svg aria-hidden="true" data-prefix="fas" data-icon="arrow-up"
                                     class="svg-inline--fa fa-arrow-up fa-w-14" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 448 512">
                                    <path
                                        d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"/>
                                </svg>
                            </a>

                            <a href="/">
                                <svg aria-hidden="true" data-prefix="fas" data-icon="arrow-up"
                                     class="svg-inline--fa fa-arrow-up fa-w-14" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 448 512">
                                    <path
                                        d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"/>
                                </svg>
                            </a>
                        </div>
                    </th>
                    <th>
                            <span>
                                Дата создания
                            </span>
                        <div class="title-sort-block">
                            <a href="/">
                                <svg aria-hidden="true" data-prefix="fas" data-icon="arrow-up"
                                     class="svg-inline--fa fa-arrow-up fa-w-14" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 448 512">
                                    <path
                                        d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"/>
                                </svg>
                            </a>

                            <a href="/">
                                <svg aria-hidden="true" data-prefix="fas" data-icon="arrow-up"
                                     class="svg-inline--fa fa-arrow-up fa-w-14" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 448 512">
                                    <path
                                        d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"/>
                                </svg>
                            </a>
                        </div>
                    </th>
                    <th>
                            <span>
                                Осталось дней
                            </span>
                        <div class="title-sort-block">
                            <a href="/">
                                <svg aria-hidden="true" data-prefix="fas" data-icon="arrow-up"
                                     class="svg-inline--fa fa-arrow-up fa-w-14" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 448 512">
                                    <path
                                        d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"/>
                                </svg>
                            </a>

                            <a href="/">
                                <svg aria-hidden="true" data-prefix="fas" data-icon="arrow-up"
                                     class="svg-inline--fa fa-arrow-up fa-w-14" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 448 512">
                                    <path
                                        d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"/>
                                </svg>
                            </a>
                        </div>
                    </th>
                    <th>
                            <span>
                               Сумма
                            </span>
                        <div class="title-sort-block">
                            <a href="/">
                                <svg aria-hidden="true" data-prefix="fas" data-icon="arrow-up"
                                     class="svg-inline--fa fa-arrow-up fa-w-14" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 448 512">
                                    <path
                                        d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"/>
                                </svg>
                            </a>

                            <a href="/">
                                <svg aria-hidden="true" data-prefix="fas" data-icon="arrow-up"
                                     class="svg-inline--fa fa-arrow-up fa-w-14" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 448 512">
                                    <path
                                        d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"/>
                                </svg>
                            </a>
                        </div>
                    </th>
                    <th>
                            <span>
                               Собрано
                            </span>
                        <div class="title-sort-block">
                            <a href="/">
                                <svg aria-hidden="true" data-prefix="fas" data-icon="arrow-up"
                                     class="svg-inline--fa fa-arrow-up fa-w-14" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 448 512">
                                    <path
                                        d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"/>
                                </svg>
                            </a>

                            <a href="/">
                                <svg aria-hidden="true" data-prefix="fas" data-icon="arrow-up"
                                     class="svg-inline--fa fa-arrow-up fa-w-14" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 448 512">
                                    <path
                                        d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"/>
                                </svg>
                            </a>
                        </div>
                    </th>
                    <th>
                            <span>
                               Количество жалоб
                            </span>
                        <div class="title-sort-block">
                            <a href="/">
                                <svg aria-hidden="true" data-prefix="fas" data-icon="arrow-up"
                                     class="svg-inline--fa fa-arrow-up fa-w-14" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 448 512">
                                    <path
                                        d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"/>
                                </svg>
                            </a>

                            <a href="/">
                                <svg aria-hidden="true" data-prefix="fas" data-icon="arrow-up"
                                     class="svg-inline--fa fa-arrow-up fa-w-14" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 448 512">
                                    <path
                                        d="M34.9 289.5l-22.2-22.2c-9.4-9.4-9.4-24.6 0-33.9L207 39c9.4-9.4 24.6-9.4 33.9 0l194.3 194.3c9.4 9.4 9.4 24.6 0 33.9L413 289.4c-9.5 9.5-25 9.3-34.3-.4L264 168.6V456c0 13.3-10.7 24-24 24h-32c-13.3 0-24-10.7-24-24V168.6L69.2 289.1c-9.3 9.8-24.8 10-34.3.4z"/>
                                </svg>
                            </a>
                        </div>
                    </th>
                    <th>Действия</th>
                </tr>
                <tr>
                    <td>Камишанченко В.К.</td>
                    <td>12.01.18</td>
                    <td>10</td>
                    <td>80 000</td>
                    <td>10 000</td>
                    <td>0</td>
                    <td class="button-block">
                        <a title="просмотреть" href="{{ route('active_show') }}">
                            <svg aria-hidden="true" data-prefix="fas" data-icon="eye"
                                 class="svg-inline--fa fa-eye fa-w-18" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 576 512">
                                <path d="M569.354 231.631C512.969 135.949 407.81 72 288 72 168.14 72 63.004 135.994 6.646 231.631a47.999 47.999 0 0 0 0 48.739C63.031 376.051 168.19 440 288 440c119.86 0 224.996-63.994 281.354-159.631a47.997 47.997 0 0 0 0-48.738zM288 392c-75.162 0-136-60.827-136-136 0-75.162 60.826-136 136-136 75.162 0 136 60.826 136 136 0 75.162-60.826 136-136 136zm104-136c0 57.438-46.562 104-104 104s-104-46.562-104-104c0-17.708 4.431-34.379 12.236-48.973l-.001.032c0 23.651 19.173 42.823 42.824 42.823s42.824-19.173 42.824-42.823c0-23.651-19.173-42.824-42.824-42.824l-.032.001C253.621 156.431 270.292 152 288 152c57.438 0 104 46.562 104 104z"/>
                            </svg>
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>Камишанченко В.К.</td>
                    <td>12.01.18</td>
                    <td>10</td>
                    <td>80 000</td>
                    <td>10 000</td>
                    <td>0</td>
                    <td class="button-block">
                        <a title="просмотреть" href="{{ route('active_show') }}">
                            <svg aria-hidden="true" data-prefix="fas" data-icon="eye"
                                 class="svg-inline--fa fa-eye fa-w-18" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 576 512">
                                <path d="M569.354 231.631C512.969 135.949 407.81 72 288 72 168.14 72 63.004 135.994 6.646 231.631a47.999 47.999 0 0 0 0 48.739C63.031 376.051 168.19 440 288 440c119.86 0 224.996-63.994 281.354-159.631a47.997 47.997 0 0 0 0-48.738zM288 392c-75.162 0-136-60.827-136-136 0-75.162 60.826-136 136-136 75.162 0 136 60.826 136 136 0 75.162-60.826 136-136 136zm104-136c0 57.438-46.562 104-104 104s-104-46.562-104-104c0-17.708 4.431-34.379 12.236-48.973l-.001.032c0 23.651 19.173 42.823 42.824 42.823s42.824-19.173 42.824-42.823c0-23.651-19.173-42.824-42.824-42.824l-.032.001C253.621 156.431 270.292 152 288 152c57.438 0 104 46.562 104 104z"/>
                            </svg>
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>Камишанченко В.К.</td>
                    <td>12.01.18</td>
                    <td>10</td>
                    <td>80 000</td>
                    <td>10 000</td>
                    <td>0</td>
                    <td class="button-block">
                        <a title="просмотреть" href="{{ route('active_show') }}">
                            <svg aria-hidden="true" data-prefix="fas" data-icon="eye"
                                 class="svg-inline--fa fa-eye fa-w-18" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 576 512">
                                <path d="M569.354 231.631C512.969 135.949 407.81 72 288 72 168.14 72 63.004 135.994 6.646 231.631a47.999 47.999 0 0 0 0 48.739C63.031 376.051 168.19 440 288 440c119.86 0 224.996-63.994 281.354-159.631a47.997 47.997 0 0 0 0-48.738zM288 392c-75.162 0-136-60.827-136-136 0-75.162 60.826-136 136-136 75.162 0 136 60.826 136 136 0 75.162-60.826 136-136 136zm104-136c0 57.438-46.562 104-104 104s-104-46.562-104-104c0-17.708 4.431-34.379 12.236-48.973l-.001.032c0 23.651 19.173 42.823 42.824 42.823s42.824-19.173 42.824-42.823c0-23.651-19.173-42.824-42.824-42.824l-.032.001C253.621 156.431 270.292 152 288 152c57.438 0 104 46.562 104 104z"/>
                            </svg>
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>Камишанченко В.К.</td>
                    <td>12.01.18</td>
                    <td>10</td>
                    <td>80 000</td>
                    <td>10 000</td>
                    <td>0</td>
                    <td class="button-block">
                        <a title="просмотреть" href="{{ route('active_show') }}">
                            <svg aria-hidden="true" data-prefix="fas" data-icon="eye"
                                 class="svg-inline--fa fa-eye fa-w-18" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 576 512">
                                <path d="M569.354 231.631C512.969 135.949 407.81 72 288 72 168.14 72 63.004 135.994 6.646 231.631a47.999 47.999 0 0 0 0 48.739C63.031 376.051 168.19 440 288 440c119.86 0 224.996-63.994 281.354-159.631a47.997 47.997 0 0 0 0-48.738zM288 392c-75.162 0-136-60.827-136-136 0-75.162 60.826-136 136-136 75.162 0 136 60.826 136 136 0 75.162-60.826 136-136 136zm104-136c0 57.438-46.562 104-104 104s-104-46.562-104-104c0-17.708 4.431-34.379 12.236-48.973l-.001.032c0 23.651 19.173 42.823 42.824 42.823s42.824-19.173 42.824-42.823c0-23.651-19.173-42.824-42.824-42.824l-.032.001C253.621 156.431 270.292 152 288 152c57.438 0 104 46.562 104 104z"/>
                            </svg>
                        </a>
                    </td>
                </tr>

                <tr>
                    <td>Камишанченко В.К.</td>
                    <td>12.01.18</td>
                    <td>10</td>
                    <td>80 000</td>
                    <td>10 000</td>
                    <td>0</td>
                    <td class="button-block">
                        <a title="просмотреть" href="{{ route('active_show') }}">
                            <svg aria-hidden="true" data-prefix="fas" data-icon="eye"
                                 class="svg-inline--fa fa-eye fa-w-18" xmlns="http://www.w3.org/2000/svg"
                                 viewBox="0 0 576 512">
                                <path d="M569.354 231.631C512.969 135.949 407.81 72 288 72 168.14 72 63.004 135.994 6.646 231.631a47.999 47.999 0 0 0 0 48.739C63.031 376.051 168.19 440 288 440c119.86 0 224.996-63.994 281.354-159.631a47.997 47.997 0 0 0 0-48.738zM288 392c-75.162 0-136-60.827-136-136 0-75.162 60.826-136 136-136 75.162 0 136 60.826 136 136 0 75.162-60.826 136-136 136zm104-136c0 57.438-46.562 104-104 104s-104-46.562-104-104c0-17.708 4.431-34.379 12.236-48.973l-.001.032c0 23.651 19.173 42.823 42.824 42.823s42.824-19.173 42.824-42.823c0-23.651-19.173-42.824-42.824-42.824l-.032.001C253.621 156.431 270.292 152 288 152c57.438 0 104 46.562 104 104z"/>
                            </svg>
                        </a>
                    </td>
                </tr>


            </table>

            <div class="account-admin-pagination-wrapper">
                <div class="account-admin-pagination">
                    <a class="active" href="/">1</a>
                    <a href="/">2</a>
                    <a href="/">3</a>
                    <a href="/">...</a>
                    <a href="/">12</a>
                </div>
            </div>
        </div>

    </div>
@endsection
