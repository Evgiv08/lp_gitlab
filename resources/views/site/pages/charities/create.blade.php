@extends('site.layout.master')


@section('content')
<div class="new-campaign-block">
      <div class="new-campaign-block-wrapper container">
          <h1>
              новая публикация
          </h1>

          <form action="" class="main-form new-campaign-form">

              <div class="header-block">
                  <label class="label-input">
                      <span>Укажите цель сбора средств:</span>
                      <textarea placeholder="Острое нарушение мозгового кровообращения по ишемическому типу в басейне левой внутренней сонной артерии внутренней сонной артерии"></textarea>
                      <span class="info">Вы можете ввести не меньше 80 и не больше 130 знаков, включая пробелы</span>
                      <span class="error">some error</span>
                  </label>

                  <label class="label-input label-number">
                      <span>Укажите сумму сбора</span>
                      <span class="currency">ГРН</span>
                      <input placeholder="100 000" type="number">
                      <!--<span class="info">Вы можете ввести не меньше 80 и не больше 130 знаков, включая пробелы</span>-->
                      <span class="error"> Неправильный ввод номера. Попробуйте еще раз</span>
                  </label>
              </div>

              <div class="block-line"></div>

              <label class="label-input">
                  <span>Ваше ФИО</span>
                  <input placeholder="Василий Васильев Васильевич" type="text">
                  <!--<span class="info">Вы можете ввести не меньше 80 и не больше 130 знаков, включая пробелы</span>-->
                  <span class="error"> Неправильный ввод номера. Попробуйте еще раз</span>
              </label>

              <div class="bank-details">
                  <label class="label-input">
                      <span>Номер счета</span>
                      <input placeholder="Номер счета в Украинском банке" type="number">
                      <!--<span class="info">Вы можете ввести не меньше 80 и не больше 130 знаков, включая пробелы</span>-->
                      <span class="error"> Неправильный ввод номера. Попробуйте еще раз</span>
                  </label>
                  <label class="label-input">
                      <span>Полное название банка</span>
                      <input placeholder="АО КБ «ПРИВАТБАНК»" type="text">
                      <!--<span class="info">Вы можете ввести не меньше 80 и не больше 130 знаков, включая пробелы</span>-->
                      <span class="error"> Неправильный ввод номера. Попробуйте еще раз</span>
                  </label>
                  <label class="label-input">
                      <span>МФО банка</span>
                      <input placeholder="305299" type="number">
                      <!--<span class="info">Вы можете ввести не меньше 80 и не больше 130 знаков, включая пробелы</span>-->
                      <span class="error"> Неправильный ввод номера. Попробуйте еще раз</span>
                  </label>
              </div>


              <div class="phone-inn">
                  <label class="label-input">
                      <span>Ваш номер телефона</span>
                      <input type="tel" placeholder="+38  (096) 33 33 333">
                      <!--<span class="info">Ваш номер телефона - конфиденциальная информация. Он не будет доступен другим пользователям</span>-->
                      <span class="error"> Неправильный ввод номера. Попробуйте еще раз</span>
                  </label>

                  <label class="label-input">
                      <span>Идентификационный код</span>
                      <input placeholder="0987654321" type="number">
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
                      <input placeholder="Василий Васильев Васильевич" type="text">
                      <!--<span class="info">Вы можете ввести не меньше 80 и не больше 130 знаков, включая пробелы</span>-->
                      <span class="error"> Неправильный ввод номера. Попробуйте еще раз</span>
                  </label>
              </div>

              <div class="address-birth">
                  <label class="label-input">
                      <span>Населенный пункт</span>
                      <input placeholder="c. Григорьевка" type="text">
                      <!--<span class="info">Вы можете ввести не меньше 80 и не больше 130 знаков, включая пробелы</span>-->
                      <span class="error"> Неправильный ввод номера. Попробуйте еще раз</span>
                  </label>

                  <label class="label-input">
                      <span>Адрес</span>
                      <input placeholder="ул. Бунина, 17, кв. 12" type="text">
                      <!--<span class="info">Вы можете ввести не меньше 80 и не больше 130 знаков, включая пробелы</span>-->
                      <span class="error"> Неправильный ввод номера. Попробуйте еще раз</span>
                  </label>

                  <label class="label-input">
                      <span>Дата рождения</span>
                      <input placeholder="13.07.2012" type="date">
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
                          <input type="radio" name="duration" checked="">
                          <span>2 недели</span>
                      </label>

                      <label class="label-radio">
                          <input type="radio" name="duration">
                          <span>4 недели</span>
                      </label>

                      <label class="label-radio">
                          <input type="radio" name="duration">
                          <span>8 недель</span>
                      </label>

                      <label class="label-radio">
                          <input type="radio" name="duration">
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
                  <textarea placeholder="Опишите свою ситуацию"></textarea>
              </label>

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
                      <input type="file">
                  </label>

                  <div id="another-recipient-foto" style="display: none;">
                      <h6>Фото / скан паспорта реципиента (больного)</h6>

                      <label class="label-file">
                          <span class="btn btn-transparent">ВЫБРАТЬ</span>
                          <input type="file">
                      </label>
                  </div>


                  <h6>Фото / скан больничных документов (выписки, заключения врачей)</h6>

                  <label class="label-file">
                      <span class="btn btn-transparent">ВЫБРАТЬ</span>
                      <input type="file">
                  </label>
              </div>

              <label class="label-checkbox">

                  <input type="checkbox">
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
