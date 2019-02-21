@extends('dashboard.layout.master')

@section('title', 'Просмотр новой заявки')

@section('content')

    <div class="popup hide-popup m--view-campaign">
        <div class="popup-content-block">
            <div class="popup-content-block-wrapper">

                <div class="popup-step m--campaign-back hide-step">

                    <form class="main-form" method="POST" action="{{ route('new.charity.return', $charity->slug) }}">
                        @csrf
                        <label class="label-input">
                            <span>Введите сообщение: </span>
                            <textarea placeholder="Введите причину возврата сбора на доработку"></textarea>
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

                    <form class="main-form" method="POST" action="{{ route('new.charity.publish', $charity->slug)
                    }}">
                        @csrf
                        <label class="label-input">
                            <span>Введите сообщение: </span>
                            <textarea placeholder="Введите сообщение о публикации сбора"></textarea>
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

                    <form class="main-form" method="POST" action="{{ route('new.charity.delete', $charity->slug) }}">
                        @csrf
                        <label class="label-input">
                            <span>Введите сообщение: </span>
                            <textarea placeholder="Введите сообщение с причиной удаления нового сбора"></textarea>
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
                Просмотр новой заявки на сбор
            </h1>
        </header>
        <div class="account-admin-campaign-wrapper">
            <form class="main-form new-campaign-form view-campaign" method="POST" action="{{ route('new.charity.edit', $charity->slug) }}">
                @csrf
                <label class="label-input">
                    <span>Цель сбора средств:</span>
                    <textarea name="purpose" disabled>{{ $charity->purpose }}</textarea>
                </label>

                <div class="text-block">
                    <div>
                        <span>Сумма сбора: </span>
                        <span>{{ $charity->sum }}</span>
                    </div>
                </div>
                <div class="text-wrapper">
                    <div class="text-block">
                        <div class="text-item">
                            <span>Пользователь: </span>
                            <span>{{ $charity->client->name . ' ' . $charity->client->surname }}</span>
                        </div>
                        <div class="text-item">
                            <span>Название банка:</span>
                            <span>{{ $charity->banks_info->bank_title }}</span>
                        </div>
                        <div class="text-item">
                            <span>Номер счета: </span>
                            <span>{{ $charity->banks_info->account_number }}</span>
                        </div>
                        <div class="text-item">
                            <span>МФО: </span>
                            <span>{{ $charity->banks_info->mfo }}</span>
                        </div>
                        <div class="text-item">
                            <span>ИНН: </span>
                            <span>{{ $charity->banks_info->inn }}</span>
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
                    <select name="category_id">
                        @if ($categories->count())
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}" {{ $category->id == $charity->category->id
                                ? 'selected' : null}}>
                                    {{$category->title }}
                                </option>
                            @endforeach
                        @endif
                    </select>
                </label>

                <div class="main-foto">
                    <h3>
                        Фото обложки
                    </h3>
                    <img src="{{ asset('storage/'. $charity->img_path)}}" alt="{{ $charity->full_name }}" title="{{
        $charity->full_name }}">
                </div>

                <label class="label-input label-textarea">
                    <span>Основной текст заявки</span>
                    <textarea name="about" disabled>{{ $charity->about }}</textarea>
                </label>

                <div class="link-block">
                    <h3>
                        Документы:
                    </h3>

                    <div class="link-block-wrapper">

                        <a href="{{ asset('storage/'. $charity->documents()->where('title', 'client_passport')->first
                        ()->file_path
                      )}}" download>

                            <span>Img паспорта автора заявки:</span>

                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488.85 488.85" width="512"
                                 height="512">
                                <path d="M244.425 98.725c-93.4 0-178.1 51.1-240.6 134.1-5.1 6.8-5.1 16.3 0 23.1 62.5 83.1 147.2 134.2 240.6 134.2s178.1-51.1 240.6-134.1c5.1-6.8 5.1-16.3 0-23.1-62.5-83.1-147.2-134.2-240.6-134.2zm6.7 248.3c-62 3.9-113.2-47.2-109.3-109.3 3.2-51.2 44.7-92.7 95.9-95.9 62-3.9 113.2 47.2 109.3 109.3-3.3 51.1-44.8 92.6-95.9 95.9zm-3.1-47.4c-33.4 2.1-61-25.4-58.8-58.8 1.7-27.6 24.1-49.9 51.7-51.7 33.4-2.1 61 25.4 58.8 58.8-1.8 27.7-24.2 50-51.7 51.7z"
                                      data-original="#000000" class="active-path" data-old_color="#000000"
                                      fill="#363636"/>
                            </svg>
                        </a>

                        @if($charity->documents()->where('title', 'passport')->first() !== null)

                            <a href="{{ asset('storage/'. $charity->documents()->where('title', 'passport')->first
                        ()->file_path
                      )}}" download>
                                <span>Img паспорта реципиента (больного):</span>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488.85 488.85" width="512"
                                     height="512">
                                    <path d="M244.425 98.725c-93.4 0-178.1 51.1-240.6 134.1-5.1 6.8-5.1 16.3 0 23.1 62.5 83.1 147.2 134.2 240.6 134.2s178.1-51.1 240.6-134.1c5.1-6.8 5.1-16.3 0-23.1-62.5-83.1-147.2-134.2-240.6-134.2zm6.7 248.3c-62 3.9-113.2-47.2-109.3-109.3 3.2-51.2 44.7-92.7 95.9-95.9 62-3.9 113.2 47.2 109.3 109.3-3.3 51.1-44.8 92.6-95.9 95.9zm-3.1-47.4c-33.4 2.1-61-25.4-58.8-58.8 1.7-27.6 24.1-49.9 51.7-51.7 33.4-2.1 61 25.4 58.8 58.8-1.8 27.7-24.2 50-51.7 51.7z"
                                          data-original="#000000" class="active-path" data-old_color="#000000"
                                          fill="#363636"/>
                                </svg>
                            </a>

                        @endif

                        <span>Img больничных документов</span>
                        @forelse( $charity->documents()->where([['title', '!=', 'passport'], ['title',
                        '!=',
                        'client_passport']])->get() as
                        $document )
                            <a href="{{ asset('storage/'. $document->file_path)}}" download>
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 488.85 488.85" width="512"
                                     height="512">
                                    <path d="M244.425 98.725c-93.4 0-178.1 51.1-240.6 134.1-5.1 6.8-5.1 16.3 0 23.1 62.5 83.1 147.2 134.2 240.6 134.2s178.1-51.1 240.6-134.1c5.1-6.8 5.1-16.3 0-23.1-62.5-83.1-147.2-134.2-240.6-134.2zm6.7 248.3c-62 3.9-113.2-47.2-109.3-109.3 3.2-51.2 44.7-92.7 95.9-95.9 62-3.9 113.2 47.2 109.3 109.3-3.3 51.1-44.8 92.6-95.9 95.9zm-3.1-47.4c-33.4 2.1-61-25.4-58.8-58.8 1.7-27.6 24.1-49.9 51.7-51.7 33.4-2.1 61 25.4 58.8 58.8-1.8 27.7-24.2 50-51.7 51.7z"
                                          data-original="#000000" class="active-path" data-old_color="#000000"
                                          fill="#363636"/>
                                </svg>
                            </a>
                        @empty
                            Больничные документы не найдены.
                        @endforelse

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
