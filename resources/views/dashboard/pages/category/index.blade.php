@extends('dashboard.layout.master')

@section('title', 'Категории')

@section('content')
    <div class="account-admin-content-block account-admin-categories">

        <div class="popup m--admin-add-new-category hide-popup">
            <div class="popup-content-block">
                <div class="popup-content-block-wrapper">
                    <div class="popup-step">
                        <form class="main-form" method="POST" action="{{ route('category.store') }}">
                            <h3>Добавить категорию</h3>
                            @csrf
                            <label class="label-input">
                                <span>Название категории</span>
                                <input type="text" name="title" required>
                                <span class="error">Введите название категории</span>
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

        <header>
            <h1>
                Категории
            </h1>

            <button type="button" class="account-admin-new-category">Добавить категорию</button>
        </header>
        <div class="account-admin-staff-wrapper">
            <table class="account-admin-table">
                <tr class="title">
                    <th>№</th>
                    <th>Категории</th>
                    <th>Сборы</th>
                    <th>Действия</th>
                </tr>

                @foreach($categories as $category)
                    <tr>
                        <td>{{$category->id}}</td>
                        <td>{{$category->title}}</td>
                        <td>321</td>
                        <td class="button-block">
                            <div class="popup m--admin-edit-category hide-popup">
                                <div class="popup-content-block">
                                    <div class="popup-content-block-wrapper">
                                        <div class="popup-step">

                                            <form class="main-form" method="POST" action="{{ route('category.update', $category->id) }}">
                                                <h3>Изменить название категории</h3>
                                                @method('PATCH')
                                                @csrf
                                                <label class="label-input">
                                                    <span>Название категории</span>
                                                    <input type="text" name="title" value="{{ $category->title }}" required>
                                                    <span class="error">Введите название категории</span>
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


                            <button class="admin-edit-category">
                                <svg aria-hidden="true" data-prefix="fas" data-icon="pen-square"
                                     class="svg-inline--fa fa-pen-square fa-w-14" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 448 512">
                                    <path d="M400 480H48c-26.5 0-48-21.5-48-48V80c0-26.5 21.5-48 48-48h352c26.5 0 48 21.5 48 48v352c0 26.5-21.5 48-48 48zM238.1 177.9L102.4 313.6l-6.3 57.1c-.8 7.6 5.6 14.1 13.3 13.3l57.1-6.3L302.2 242c2.3-2.3 2.3-6.1 0-8.5L246.7 178c-2.5-2.4-6.3-2.4-8.6-.1zM345 165.1L314.9 135c-9.4-9.4-24.6-9.4-33.9 0l-23.1 23.1c-2.3 2.3-2.3 6.1 0 8.5l55.5 55.5c2.3 2.3 6.1 2.3 8.5 0L345 199c9.3-9.3 9.3-24.5 0-33.9z"/>
                                </svg>
                            </button>

                            <a href="{{ route('category.destroy', $category->id)}}"
                                    onclick="event.preventDefault();
                                    document.getElementById('delete-category-{{ $category->id }}').submit();
                                    ">
                                <svg aria-hidden="true" data-prefix="fas" data-icon="ban"
                                     class="svg-inline--fa fa-ban fa-w-16" xmlns="http://www.w3.org/2000/svg"
                                     viewBox="0 0 512 512">
                                    <path d="M256 8C119.034 8 8 119.033 8 256s111.034 248 248 248 248-111.034 248-248S392.967 8 256 8zm130.108 117.892c65.448 65.448 70 165.481 20.677 235.637L150.47 105.216c70.204-49.356 170.226-44.735 235.638 20.676zM125.892 386.108c-65.448-65.448-70-165.481-20.677-235.637L361.53 406.784c-70.203 49.356-170.226 44.736-235.638-20.676z"/>
                                </svg>
                            </a>
                            <form id="delete-category-{{ $category->id }}" action="{{ route('category.destroy', $category->id)}}"
                                  method="POST">
                                @method('DELETE')
                                @csrf
                            </form>
                        </td>
                    </tr>
                @endforeach

            </table>
        </div>

    </div>
@endsection
