@extends('site.layout.master')

@section('content')
<div class="new-campaign-block">
      <div class="new-campaign-block-wrapper container">
          <h1>
              новая публикация
          </h1>

          <form action="{{ route('charity.store') }}" method="POST" class="main-form new-campaign-form"
                enctype="multipart/form-data">
            @csrf
              <div class="header-block">
                  <label class="label-input">
                      <span>Укажите цель сбора средств:</span>
                      <textarea name="purpose" required>{{ old('purpose')}}</textarea>
                      <span class="info">Вы можете ввести не меньше 80 и не больше 130 знаков, включая пробелы</span>
                      <span class="error">some error</span>
                  </label>

                  <label class="label-input label-number">
                      <span>Укажите сумму сбора</span>
                      <span class="currency">ГРН</span>
                      <input placeholder="100 000" name="sum" type="number" value="{{ old('sum')}}" required>
                      <!--<span class="info">Вы можете ввести не меньше 80 и не больше 130 знаков, включая пробелы</span>-->
                      <span class="error"> Неправильный ввод номера. Попробуйте еще раз</span>
                  </label>
              </div>

              <div class="block-line"></div>

              <label class="label-input">
                  <span>Ваше ФИО</span>
                  <input name="client_name"
                         value="{{ auth('client')->user()->name .' '. auth('client')->user()->surname }}"
                         type="text" required
                  >
                  <input type="hidden" name="client_id" value="{{ auth('client')->user()->id }}">
                  <!--<span class="info">Вы можете ввести не меньше 80 и не больше 130 знаков, включая пробелы</span>-->
                  <span class="error"> Неправильный ввод номера. Попробуйте еще раз</span>
              </label>

              <div class="bank-details">
                  <label class="label-input">
                      <span>Номер счета</span>
                      <input placeholder="Номер счета в Украинском банке" name="account_number" type="number"
                             value="{{ old('account_number') }}" required>
                      <!--<span class="info">Вы можете ввести не меньше 80 и не больше 130 знаков, включая пробелы</span>-->
                      <span class="error"> Неправильный ввод номера. Попробуйте еще раз</span>
                  </label>
                  <label class="label-input">
                      <span>Полное название банка</span>
                      <input placeholder="АО КБ «ПРИВАТБАНК»" name="bank_title" type="text" value="{{ old
                      ('bank_title')}}" required>
                      <!--<span class="info">Вы можете ввести не меньше 80 и не больше 130 знаков, включая пробелы</span>-->
                      <span class="error"> Неправильный ввод номера. Попробуйте еще раз</span>
                  </label>
                  <label class="label-input">
                      <span>МФО банка</span>
                      <input placeholder="305299" name="mfo" type="number" value="{{ old('mfo') }}" required>
                      <!--<span class="info">Вы можете ввести не меньше 80 и не больше 130 знаков, включая пробелы</span>-->
                      <span class="error"> Неправильный ввод номера. Попробуйте еще раз</span>
                  </label>
              </div>

              <div class="phone-inn">
                  <label class="label-input">
                      <span>Ваш номер телефона</span>
                      <input type="tel" placeholder="+38  (096) 33 33 333" name="phone" value="{{ old('phone') }}" required>
                      <!--<span class="info">Ваш номер телефона - конфиденциальная информация. Он не будет доступен другим пользователям</span>-->
                      <span class="error"> Неправильный ввод номера. Попробуйте еще раз</span>
                  </label>

                  <label class="label-input">
                      <span>Идентификационный код</span>
                      <input placeholder="0987654321" name="inn" type="number" value="{{ old('inn') }}" required>
                      <!--<span class="info">Вы можете ввести не меньше 80 и не больше 130 знаков, включая пробелы</span>-->
                      <span class="error"> Неправильный ввод номера. Попробуйте еще раз</span>
                  </label>
              </div>

              <div class="block-line"></div>

              <div class="to-whom-campaign">
                  <div class="radio-wrapper">
                      <label class="label-radio">
                          <input type="radio" name="to-whom" checked="" value="self">
                          <span>Я собираю деньги для себя</span>
                      </label>

                      <label class="label-radio">
                          <input type="radio" name="to-whom" value="notself">
                          <span>Я собираю деньги не для себя</span>
                      </label>
                  </div>
                  <label class="label-input" id="another-recipient" style="display: none;">
                      <span>Для кого собираются средства?</span>
                      <input placeholder="Василий Васильев Васильевич" name="full_name" type="text" value="{{ old
                      ('full_name') }}">
                      <!--<span class="info">Вы можете ввести не меньше 80 и не больше 130 знаков, включая пробелы</span>-->
                      <span class="error"> Неправильный ввод номера. Попробуйте еще раз</span>
                  </label>
              </div>

              <div class="address-birth">
                  <label class="label-input">
                      <span>Населенный пункт</span>
                      <input placeholder="c. Григорьевка" name="locality" type="text" value="{{ old('locality') }}" required>
                      <!--<span class="info">Вы можете ввести не меньше 80 и не больше 130 знаков, включая пробелы</span>-->
                      <span class="error"> Неправильный ввод номера. Попробуйте еще раз</span>
                  </label>

                  <label class="label-input">
                      <span>Адрес</span>
                      <input placeholder="ул. Бунина, 17, кв. 12" name="address" type="text" value="{{ old('address')
                      }}" required>
                      <!--<span class="info">Вы можете ввести не меньше 80 и не больше 130 знаков, включая пробелы</span>-->
                      <span class="error"> Неправильный ввод номера. Попробуйте еще раз</span>
                  </label>

                  <label class="label-input">
                      <span>Дата рождения</span>
                      <input placeholder="13.07.2012" name="birth_date" type="date" value="{{ old('birth_date') }}" required>
                      <!--<span class="info">Вы можете ввести не меньше 80 и не больше 130 знаков, включая пробелы</span>-->
                      <span class="error"> Неправильный ввод номера. Попробуйте еще раз</span>
                  </label>
              </div>

              <div class="campaign-duration">

                  <span class="title">
                      На какой срок Вы хотите разместить публикацию?
                  </span>

                  <div class="campaign-duration-wrapper">
                      <label class="label-radio">
                          <input type="radio" name="term" value="14" checked="">
                          <span>2 недели</span>
                      </label>

                      <label class="label-radio">
                          <input type="radio" name="term" value="28">
                          <span>4 недели</span>
                      </label>

                      <label class="label-radio">
                          <input type="radio" name="term" value="56">
                          <span>8 недель</span>
                      </label>

                      <label class="label-radio">
                          <input type="radio" name="term" value="168">
                          <span>8-24 недели</span>
                      </label>
                  </div>
              </div>

              <div class="block-line"></div>

              <label class="label-select">
                  <span> Категория заболевания</span>
                  <select name="category_id">
                      @if ($categories->count())
                          @foreach($categories as $category)
                              <option value="{{ $category->id }}">{{ $category->title }}</option>
                          @endforeach
                      @endif
                  </select>
              </label>

              <label class="label-input label-textarea">
                  <span>Опишите свою ситуацию</span>
                  <textarea placeholder="Опишите свою ситуацию" name="about" required>{{ old('about') }}</textarea>
              </label>

              <div class="block-line"></div>

              <div class="document-block">
                  <h3>
                      Загрузите фотографию для вашего сбора
                  </h3>

                  <h5>
                      Она будет доступна всем пользователям сайта.
                  </h5>

                  <label class="label-file">
                      <span class="btn btn-transparent">ВЫБРАТЬ</span>
                      <input type="file" name="img" required>
                  </label>

              </div>

              <div class="block-line"></div>

              <div class="document-block">
                  <h3>
                      Загрузите необходимые документы
                  </h3>

                  <h5>
                      Загруженные документы необходимы для подтверждения указанной информации нашими модераторами.
                      Ваши данные не будут доступны другим пользователям.
                  </h5>

                  <h6>
                      Фото / скан Вашего паспорта
                  </h6>
                  <label class="label-file">
                      <span class="btn btn-transparent">ВЫБРАТЬ</span>
                      <input type="file" name="document[client_passport]" required>
                  </label>

                  <div id="another-recipient-foto" style="display: none;">
                      <h6>Фото / скан паспорта реципиента (больного)</h6>

                      <label class="label-file">
                          <span class="btn btn-transparent">ВЫБРАТЬ</span>
                          <input type="file" name="document[passport]">
                      </label>
                  </div>


                  <h6>Фото / скан больничных документов (выписки, заключения врачей)</h6>

                  <label class="label-file">
                      <span class="btn btn-transparent">ВЫБРАТЬ</span>
                      <input type="file" name="document[]" multiple>
                  </label>
              </div>

              <label class="label-checkbox">

                  <input type="checkbox" required>
                  <span>
                          <span>
                                Я соглашаюсь с <a href="/"> Политикой конфиденциальности</a> и <a href="/">Правилами пользования сайтом</a>
                          </span>
                      </span>
              </label>

              <div class="button-wrapper">
                  <button type="submit" class="btn">
                      Отправить
                  </button>
              </div>

          </form>
      </div>
</div>
@endsection
