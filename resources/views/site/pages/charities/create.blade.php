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
                      {{-- Display errors --}}
                      @if ($errors->has('purpose'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('purpose') }}</strong>
                          </span>
                      @endif
                      <span class="error">some error</span>
                  </label>

                  <label class="label-input label-number">
                      <span>Укажите сумму сбора</span>
                      <span class="currency">ГРН</span>
                      <input placeholder="100 000" name="sum" type="number" value="{{ old('sum')}}" required>
                      {{-- Display errors --}}
                      @if ($errors->has('sum'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('sum') }}</strong>
                          </span>
                      @endif
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
                  <span class="error"> Неправильный ввод номера. Попробуйте еще раз</span>
              </label>

              <div class="bank-details">
                  <label class="label-input">
                      <span>Номер счета</span>
                      <input placeholder="Номер счета в Украинском банке" name="account_number" type="number"
                             value="{{ old('account_number') }}" required>
                      {{-- Display errors --}}
                      @if ($errors->has('account_number'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('account_number') }}</strong>
                          </span>
                      @endif
                      <span class="error"> Неправильный ввод номера. Попробуйте еще раз</span>
                  </label>

                  <label class="label-input">
                      <span>Полное название банка</span>
                      <input placeholder="АО КБ «ПРИВАТБАНК»" name="bank_title" type="text" value="{{ old
                      ('bank_title')}}" required>
                      {{-- Display errors --}}
                      @if ($errors->has('bank_title'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('bank_title') }}</strong>
                          </span>
                      @endif
                      <span class="error"> Неправильный ввод номера. Попробуйте еще раз</span>
                  </label>

                  <label class="label-input">
                      <span>МФО банка</span>
                      <input placeholder="305299" name="mfo" type="number" value="{{ old('mfo') }}" required>
                      {{-- Display errors --}}
                      @if ($errors->has('mfo'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('mfo') }}</strong>
                          </span>
                      @endif
                      <span class="error"> Неправильный ввод номера. Попробуйте еще раз</span>
                  </label>
              </div>

              <div class="phone-inn">
                  <label class="label-input">
                      <span>Ваш номер телефона</span>
                      <input type="tel" placeholder="+38  (096) 33 33 333" name="phone" value="{{ old('phone') }}" required>
                      {{-- Display errors --}}
                      @if ($errors->has('phone'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('phone') }}</strong>
                          </span>
                      @endif
                      <!--<span class="info">Ваш номер телефона - конфиденциальная информация. Он не будет доступен другим пользователям</span>-->
                      <span class="error"> Неправильный ввод номера. Попробуйте еще раз</span>
                  </label>

                  <label class="label-input">
                      <span>Идентификационный код</span>
                      <input placeholder="0987654321" name="inn" type="number" value="{{ old('inn') }}" required>
                      {{-- Display errors --}}
                      @if ($errors->has('inn'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('inn') }}</strong>
                          </span>
                      @endif
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
                      <input placeholder="Василий Васильев Васильевич"
                             name="full_name" type="text"
                             value="{{ old('full_name') }}"
                      >
                      {{-- Display errors --}}
                      @if ($errors->has('full_name'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('full_name') }}</strong>
                          </span>
                      @endif
                      <span class="error"> Неправильный ввод номера. Попробуйте еще раз</span>
                  </label>
              </div>

              <div class="address-birth">
                  <label class="label-input">
                      <span>Населенный пункт</span>
                      <input placeholder="c. Григорьевка" name="locality" type="text" value="{{ old('locality') }}" required>
                      {{-- Display errors --}}
                      @if ($errors->has('locality'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('locality') }}</strong>
                          </span>
                      @endif
                      <span class="error"> Неправильный ввод номера. Попробуйте еще раз</span>
                  </label>

                  <label class="label-input">
                      <span>Адрес</span>
                      <input placeholder="ул. Бунина, 17, кв. 12" name="address" type="text" value="{{ old('address')
                      }}" required>
                      {{-- Display errors --}}
                      @if ($errors->has('address'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('address') }}</strong>
                          </span>
                      @endif
                      <span class="error"> Неправильный ввод номера. Попробуйте еще раз</span>
                  </label>

                  <label class="label-input">
                      <span>Дата рождения</span>
                      <input placeholder="13.07.2012" name="birth_date" type="date" value="{{ old('birth_date') }}" required>
                      {{-- Display errors --}}
                      @if ($errors->has('birth_date'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('birth_date') }}</strong>
                          </span>
                        @endif
                      <!--<span class="info">Вы можете ввести не меньше 80 и не больше 130 знаков, включая пробелы</span>-->
                      <span class="error"> Неправильный ввод номера. Попробуйте еще раз</span>
                  </label>
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
                  {{-- Display errors --}}
                  @if ($errors->has('about'))
                      <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('about') }}</strong>
                          </span>
                  @endif
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
                      {{-- Display errors --}}
                      @if ($errors->has('img'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('img') }}</strong>
                          </span>
                      @endif
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
                      {{-- Display errors --}}
                      @if ($errors->has('document[client_passport]'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('document[client_passport]') }}</strong>
                          </span>
                      @endif
                  </label>

                  <div id="another-recipient-foto" style="display: none;">
                      <h6>Фото / скан паспорта реципиента (больного)</h6>

                      <label class="label-file">
                          <span class="btn btn-transparent">ВЫБРАТЬ</span>
                          <input type="file" name="document[passport]">
                          {{-- Display errors --}}
                          @if ($errors->has('document[passport]'))
                              <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('document[passport]') }}</strong>
                          </span>
                          @endif
                      </label>
                  </div>


                  <h6>Фото / скан больничных документов (выписки, заключения врачей)</h6>

                  <label class="label-file">
                      <span class="btn btn-transparent">ВЫБРАТЬ</span>
                      <input type="file" name="document[]" multiple>
                      {{-- Display errors --}}
                      @if ($errors->has('document.*'))
                          <span class="invalid-feedback" role="alert">
                              <strong>{{ $errors->first('document.*') }}</strong>
                          </span>
                      @endif
                  </label>
              </div>

              <label class="label-checkbox">

                  <input type="checkbox" required>
                  <span>
                          <span>
                                Я соглашаюсь с <a href=""> Политикой конфиденциальности</a> и <a href="">Правилами пользования сайтом</a>
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
