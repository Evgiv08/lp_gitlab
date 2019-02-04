@extends('site.layout.master')


@section('content')
<div class="jumbotron">
  <div class="container">
    <img src="{{ asset('img/head-background.jpg') }}" alt="">
    <div class="back-layer"></div>
    <div class="jumbotron-wrapper">
      <h1>
        lifes
        <span>
          pulse
        </span>
      </h1>
      <p>
        Сервис LifesPulse предоставляет возможность начать моментальный сбор средств на лечение.
      </p>
      <div class="button-block">
        <a class="btn btn-orange" href="/search">
          Начать помогать
        </a>
        <a class="btn btn-transparent" href="/charity/create">
          начать сбор средств
        </a>
      </div>
    </div>
  </div>
</div>


<div class="card-block container">
  <h2 class="h2Underline">
    Популярные компании
  </h2>
  <ul class="card-block-list">
    @for($carder=1, $random=rand(0, count($charities)-4), $i=$random; $i<$random+3; $i++, $carder++)
      <li>
      <a class="single-card" href="/{{ $charities[$i]->slug }}">
        <img src="{{ asset('img/card' . $carder . '.jpg')}}" alt="">
        <div class="text-block">
          <div class="info-block">
            <div class="like">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <g>
                  <path d="M504.2,118.9c-8.2-23.3-22.5-44.3-41.5-60.8c-19-16.5-41.8-27.7-66.1-32.5c-9.1-1.8-18.5-2.7-27.9-2.7
                           c-27.4,0-54,7.7-77,22.4c-13.8,8.8-26,19.9-36,32.7c-10-12.8-22.2-23.8-36-32.6c-23-14.6-49.6-22.4-76.9-22.4c0,0,0,0,0,0
                           c-22.8,0-45.7,5.6-66.1,16.3C56.2,49.9,38.4,65.4,25.3,84C11.9,103.2,3.7,124.6,1,147.6c-2.4,20.2-0.5,41.9,5.4,64.5
                           c11.8,44.8,38.1,85.6,58,111.9c43.3,57.3,102.8,109.4,181.9,159.1l9.5,5.9l9.5-5.9c97.3-61.1,165.3-125.7,207.7-197.4
                           c24.4-41.2,37.1-77.9,38.9-112.2C512.8,154.4,510.2,136,504.2,118.9z M255.8,447.1c-70.7-45.5-124.1-92.8-163-144.4
                           c-18-23.8-41.6-60.4-52-99.6c-4.8-18.3-6.3-35.5-4.5-51.3c2-17.2,8.1-33.1,18.1-47.3c9.9-14,23.2-25.7,38.6-33.7
                           c15.4-8,32.6-12.3,49.8-12.3c20.6,0,40.6,5.8,57.9,16.8C217.5,86,231,101.2,239.8,119l16,32.6l15.9-32.6
                           c8.8-17.9,22.3-33,39.1-43.8c17.3-11,37.3-16.8,57.9-16.8c7.1,0,14.2,0.7,21,2c18.2,3.6,35.3,12,49.7,24.5
                           c14.3,12.4,25.1,28.2,31.3,45.7c4.5,12.7,6.4,26.6,5.6,41.1c-1.4,28.4-12.6,59.8-33.9,95.9C404.2,332.1,343.1,390.8,255.8,447.1z">
                  </path>
                </g>
              </svg>
              <p class="count">
                300
              </p>
            </div>
            <div class="share">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <g>
                  <path d="M416.5,325.4c-29.6,0-55.8,14.1-72.9,35.7l-158.4-81c2.1-7.7,3.6-15.7,3.6-24.1c0-9.2-1.8-17.8-4.2-26.2
                           l157.7-80.7c17,22.6,43.8,37.4,74.3,37.4c51.6,0,93.3-41.7,93.3-93.3c0-51.5-41.7-93.3-93.3-93.3c-51.5,0-93.3,41.8-93.3,93.3
                           c0,8.4,1.5,16.5,3.6,24.2l-158.4,81c-17.1-21.6-43.3-35.8-73-35.8c-51.5,0-93.3,41.8-93.3,93.3s41.7,93.3,93.3,93.3
                           c30.5,0,57.3-14.8,74.4-37.4l157.7,80.7c-2.5,8.4-4.3,17.1-4.3,26.2c0,51.5,41.8,93.3,93.3,93.3c51.6,0,93.3-41.8,93.3-93.3
                           C509.8,367.1,468.1,325.4,416.5,325.4z">
                  </path>
                </g>
              </svg>
              <p class="count">
                58
              </p>
            </div>
          </div>
          <h4>
            {{ $charities[$i]->full_name }}
          </h4>
          <h6>
            {{ $charities[$i]->about }}
          </h6>
          <div class="money-count">
            <div class="money-diagram">
              <div class="top-line" data-money-diagram="75" style="width: 75%"></div>
            </div>
            <div class="money-how">
              <p>
                Собрали 20 000 грн
              </p>
              <p>
                из 30 000 грн
              </p>
            </div>
          </div>
        </div>
      </a>
      </li>
    @endfor
  </ul>
  <div class="link-wrapper">
    <a href="/">
      Посмотреть еще
    </a>
  </div>
</div>


<div class="how-it-work-block">
  <div class="container">
    <h2 class="h2Underline">
      Как это работает
    </h2>
  </div>
  <div class="how-it-work-block-wrapper">
    <img src="{{ asset('img/how-it-work.jpg') }}" alt="">
  </div>
</div>


<div class="marketing-block container">
  <h2 class="h2Underline">
    Почему нам стоит доверять?
  </h2>
  <ul class="info-block-list">
    <li>
      <img src="{{ asset('img/orange-earth-globe.svg') }}" alt="">
      <div class="text-block">
        <h5>
          Первые в Украине
        </h5>
        <h6>
          LifesPulse является первым подобным сервисом в Украине
        </h6>
      </div>
    </li>
    <li>
      <img src="{{ asset('img/give-money-orange.svg') }}" alt="">
      <div class="text-block">
        <h5>
          Чужой беды не бывает
        </h5>
        <h6>
          Сегодня поможете Вы - завтра помогут Вам
        </h6>
      </div>
    </li>
    <li>
      <img src="{{ asset('img/share-big-orange.svg') }}" alt="">
      <div class="text-block">
        <h5>
          Социальные сети
        </h5>
        <h6>
          У Вас есть возможность делиться историями, которым Вы сопереживаете в социальных сетях
        </h6>
      </div>
    </li>
    <li>
      <img src="{{ asset('img/heart-hands-orange.svg') }}" alt="">
      <div class="text-block">
        <h5>
          Помогать легко
        </h5>
        <h6>
          Несколькими кликами Вы можете спасать жизни
        </h6>
      </div>
    </li>
    <li>
      <img src="{{ asset('img/orange-award.svg') }}" alt="">
      <div class="text-block">
        <h5>
          Успешные сборы
        </h5>
        <h6>
          Вы можете увидеть результаты Вашей помощи в разделе "Успешные сборы"
        </h6>
      </div>
    </li>
    <li>
      <img src="{{ asset('img/orange-wax-seal-with-ribbon.svg') }}" alt="">
      <div class="text-block">
        <h5>
          Благотворители
        </h5>
        <h6>
          Участники сообщества, получившие пожертвования обязательно увидят всех благотворителей
        </h6>
      </div>
    </li>
  </ul>
</div>


<div class="card-block container">
  <h2 class="h2Underline">
    Помогать легко
  </h2>
  <ul class="card-block-list">
    @for($carder=1, $random=rand(0, count($charities)-4), $i=$random; $i<$random+3; $i++, $carder++)
      <li>
      <a class="single-card" href="/{{ $charities[$i]->slug }}">
        <img src="{{ asset('img/card' . $carder . '.jpg')}}" alt="">
        <div class="text-block">
          <div class="info-block">
            <div class="like">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <g>
                  <path d="M504.2,118.9c-8.2-23.3-22.5-44.3-41.5-60.8c-19-16.5-41.8-27.7-66.1-32.5c-9.1-1.8-18.5-2.7-27.9-2.7
                           c-27.4,0-54,7.7-77,22.4c-13.8,8.8-26,19.9-36,32.7c-10-12.8-22.2-23.8-36-32.6c-23-14.6-49.6-22.4-76.9-22.4c0,0,0,0,0,0
                           c-22.8,0-45.7,5.6-66.1,16.3C56.2,49.9,38.4,65.4,25.3,84C11.9,103.2,3.7,124.6,1,147.6c-2.4,20.2-0.5,41.9,5.4,64.5
                           c11.8,44.8,38.1,85.6,58,111.9c43.3,57.3,102.8,109.4,181.9,159.1l9.5,5.9l9.5-5.9c97.3-61.1,165.3-125.7,207.7-197.4
                           c24.4-41.2,37.1-77.9,38.9-112.2C512.8,154.4,510.2,136,504.2,118.9z M255.8,447.1c-70.7-45.5-124.1-92.8-163-144.4
                           c-18-23.8-41.6-60.4-52-99.6c-4.8-18.3-6.3-35.5-4.5-51.3c2-17.2,8.1-33.1,18.1-47.3c9.9-14,23.2-25.7,38.6-33.7
                           c15.4-8,32.6-12.3,49.8-12.3c20.6,0,40.6,5.8,57.9,16.8C217.5,86,231,101.2,239.8,119l16,32.6l15.9-32.6
                           c8.8-17.9,22.3-33,39.1-43.8c17.3-11,37.3-16.8,57.9-16.8c7.1,0,14.2,0.7,21,2c18.2,3.6,35.3,12,49.7,24.5
                           c14.3,12.4,25.1,28.2,31.3,45.7c4.5,12.7,6.4,26.6,5.6,41.1c-1.4,28.4-12.6,59.8-33.9,95.9C404.2,332.1,343.1,390.8,255.8,447.1z">
                  </path>
                </g>
              </svg>
              <p class="count">
                300
              </p>
            </div>
            <div class="share">
              <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <g>
                  <path d="M416.5,325.4c-29.6,0-55.8,14.1-72.9,35.7l-158.4-81c2.1-7.7,3.6-15.7,3.6-24.1c0-9.2-1.8-17.8-4.2-26.2
                           l157.7-80.7c17,22.6,43.8,37.4,74.3,37.4c51.6,0,93.3-41.7,93.3-93.3c0-51.5-41.7-93.3-93.3-93.3c-51.5,0-93.3,41.8-93.3,93.3
                           c0,8.4,1.5,16.5,3.6,24.2l-158.4,81c-17.1-21.6-43.3-35.8-73-35.8c-51.5,0-93.3,41.8-93.3,93.3s41.7,93.3,93.3,93.3
                           c30.5,0,57.3-14.8,74.4-37.4l157.7,80.7c-2.5,8.4-4.3,17.1-4.3,26.2c0,51.5,41.8,93.3,93.3,93.3c51.6,0,93.3-41.8,93.3-93.3
                           C509.8,367.1,468.1,325.4,416.5,325.4z">
                  </path>
                </g>
              </svg>
              <p class="count">
                58
              </p>
            </div>
          </div>
          <h4>
            {{ $charities[$i]->full_name }}
          </h4>
          <h6>
            {{ $charities[$i]->about }}
          </h6>
          <div class="money-count">
            <div class="money-diagram">
              <div class="top-line" data-money-diagram="75" style="width: 75%"></div>
            </div>
            <div class="money-how">
              <p>
                Собрали 20 000 грн
              </p>
              <p>
                из 30 000 грн
              </p>
            </div>
          </div>
        </div>
      </a>
      </li>
    @endfor
  </ul>
  <div class="link-wrapper">
    <a href="/">
      Посмотреть еще
    </a>
  </div>
</div>


<div class="homepage-blog-section container">
  <h2 class="h2Underline">
    интересное в блоге
  </h2>
  <div class="main-article-wrapper">
    <div class="main-article">
      <img src="{{ asset('img/header-baner2.jpg') }}" alt="">
      <div class="text-block">
        <h4>
          НЕСКОЛЬКО ДНЕЙ НАЗАД БЛАГОДАРЯ LIFESPULSE ПРООПЕРИРОВАЛИ ГАРШИНА ВЯЧЕСЛАВА
        </h4>
        <h6>
          Proin sodales pulvinar tempor. Cum sociis natoque penatibus et magnis dis parturient montes,
          nascetur
          idiculus mus. Nam fermentum, nulla luctus pharetra vulputate, felis tellus mollis orci, sed
          zrhoncus
          sapien nunc eget. Proin sodales pulvinar tempor.
        </h6>
        <a href="/slug">Читать дальше</a>
        <div class="date">
          12.08.2018
        </div>
      </div>
    </div>
  </div>
  <ul class="blog-article-list">
    <li class="blog-card">
      <img src="{{ asset('img/card1.jpg') }}" alt="">
      <div class="text-block">
        <div>
          <div class="date">
            12.08.2018
          </div>
          <h4>
            НЕСКОЛЬКО ДНЕЙ НАЗАД БЛАГОДАРЯ LIFESPULSE ПРООПЕРИРОВАЛИ ГАРШИНА ВЯЧЕСЛАВА
          </h4>
          <h6>
            Острое нарушение мозгового кровообращения по ишемическому типу в басейне левой внутренней сонной
            артерии. Острое нарушение мозгового кровообращения по ишемическому типу в басейне левой
            внутренней
            сонной артерии
          </h6>
        </div>
        <a href="/slug">Читать дальше</a>
      </div>
    </li>
    <li class="blog-card">
      <img src="{{ asset('img/card2.jpg') }}" alt="">
      <div class="text-block">
        <div>
          <div class="date">
            12.08.2018
          </div>
          <h4>
            НЕСКОЛЬКО ДНЕЙ НАЗАД БЛАГОДАРЯ LIFESPULSE ПРООПЕРИРОВАЛИ ГАРШИНА ВЯЧЕСЛАВА
          </h4>
          <h6>
            Острое нарушение мозгового кровообращения по ишемическому типу в басейне левой внутренней сонной
            артерии. Острое нарушение мозгового кровообращения по ишемическому типу в басейне левой
            внутренней
            сонной артерии
          </h6>
        </div>
        <a href="/slug">Читать дальше</a>
      </div>
    </li>
    <li class="blog-card">
      <img src="{{ asset('img/card3.jpg') }}" alt="">
      <div class="text-block">
        <div>
          <div class="date">
            12.08.2018
          </div>
          <h4>
            НЕСКОЛЬКО ДНЕЙ НАЗАД БЛАГОДАРЯ LIFESPULSE ПРООПЕРИРОВАЛИ ГАРШИНА ВЯЧЕСЛАВА
          </h4>
          <h6>
            Острое нарушение мозгового кровообращения по ишемическому типу в басейне левой внутренней сонной
            артерии. Острое нарушение мозгового кровообращения по ишемическому типу в басейне левой
            внутренней
            сонной артерии
          </h6>
        </div>
        <a href="/slug">Читать дальше</a>
      </div>
    </li>
  </ul>
</div>
@endsection
