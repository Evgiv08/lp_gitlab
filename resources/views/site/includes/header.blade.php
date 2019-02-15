<header class="main-header">
    <div class="main-header-wrapper">
        <div class="logo-side">
            <a href="/">
                <img src="{{ asset('img/img-logo.png') }}" alt="">
            </a>
        </div>
        <div class="navigation-side">
          <ul class="navigation">
            <li>
              <a href="/">
                О нас
              </a>
            </li>
            <li>
              <a href="/">
                F.A.Q.
              </a>
            </li>
            <li>
              <a href="/">
                Успешные сборы
              </a>
            </li>
            <li>
              <a href="/">
                Блог
              </a>
            </li>
            <li>
              <a href="/search">
                Начать помогать
              </a>
            </li>
            <li>
              <a href="/">
                Подать заявку
              </a>
            </li>
          </ul>
          <div class="button-block">
              <button class="header-search">
                  <a href="{{ route('search') }}">
                  <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                       viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
<style type="text/css">
    .st0 {
        fill: #E5E5E5;
    }
</style>
                      <g>
                          <path class="st0" d="M495.6,466.4L373.8,339.6c31.3-37.2,48.5-84.1,48.5-132.9C422.3,92.7,329.5,0,215.6,0S8.8,92.7,8.8,206.7
		s92.7,206.7,206.7,206.7c42.8,0,83.6-12.9,118.4-37.4l122.8,127.7c5.1,5.3,12,8.3,19.4,8.3c7,0,13.6-2.7,18.7-7.5
		C505.6,494.2,506,477.1,495.6,466.4z M215.6,53.9c84.3,0,152.8,68.5,152.8,152.8s-68.5,152.8-152.8,152.8S62.8,291,62.8,206.7
		S131.3,53.9,215.6,53.9z"/>
                      </g>
</svg>
                  </a>
              </button>
            @if (Auth::guard('client')->check())
              <ul class="navigation">
                <li><a href="{{ route('client.show', Auth::guard('client')->user()->id) }}">{{ Auth::guard('client')
                ->user()->name
                }}</a></li>
{{--              <li><a href="{{ route('client.logout') }}">Выйти</a></li>--}}
              <li><a href="{{ route('client.logout')}}"
                     onclick="event.preventDefault();
                             document.getElementById('logout').submit();">Выйти</a></li>
              </ul>

              <form id="logout" action="{{ route('client.logout')}}"
                    method="POST">
                @csrf
              </form>
            @else
              <button class="header-login-popup">
                <svg id="Capa_1" version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                <g>
                  <path class="st0" d="M512,256C512,114.8,397.2,0,256,0S0,114.8,0,256c0,74.6,32.1,141.8,83.1,188.6l-0.2,0.2l8.3,7
		                                   c0.5,0.5,1.1,0.8,1.7,1.3c4.4,3.7,9,7.1,13.6,10.5c1.5,1.1,3,2.2,4.6,3.2c5,3.4,10.1,6.7,15.3,9.8c1.1,0.7,2.3,1.3,3.4,2
		                                   c5.7,3.2,11.5,6.3,17.5,9.1c0.4,0.2,0.9,0.4,1.3,0.6c19.4,9,40.2,15.7,61.9,19.6c0.6,0.1,1.1,0.2,1.7,0.3
		                                   c6.7,1.2,13.6,2.1,20.5,2.7c0.8,0.1,1.7,0.1,2.5,0.2c6.9,0.6,13.8,0.9,20.9,0.9c7,0,13.9-0.4,20.7-0.9c0.9-0.1,1.7-0.1,2.6-0.2
		                                   c6.8-0.6,13.6-1.5,20.3-2.7c0.6-0.1,1.2-0.2,1.7-0.3c21.4-3.8,41.8-10.3,61-19.1c0.7-0.3,1.4-0.6,2.1-1c5.7-2.7,11.4-5.6,16.9-8.7
		                                   c1.4-0.8,2.7-1.6,4.1-2.4c5-3,9.9-6,14.7-9.3c1.7-1.2,3.4-2.4,5.1-3.6c4.1-2.9,8.1-6,12-9.2c0.9-0.7,1.8-1.3,2.6-2l8.5-7.1
		                                   l-0.3-0.2C479.6,398.4,512,330.9,512,256z M18.6,256C18.6,125.1,125.1,18.6,256,18.6S493.4,125.1,493.4,256
		                                   c0,70.5-31,133.9-80,177.5c-2.7-1.9-5.5-3.6-8.3-5l-78.8-39.4c-7.1-3.5-11.5-10.6-11.5-18.6V343c1.8-2.3,3.8-4.8,5.7-7.6
		                                   c10.2-14.4,18.4-30.4,24.4-47.7c11.8-5.6,19.4-17.4,19.4-30.6v-33c0-8.1-3-15.9-8.3-22.1v-43.4c0.5-4.8,2.2-32.1-17.5-54.6
		                                   c-17.2-19.6-44.9-29.5-82.5-29.5s-65.4,9.9-82.5,29.5c-19.7,22.5-18,49.8-17.5,54.6V202c-5.3,6.2-8.3,14-8.3,22.1v33
		                                   c0,10.2,4.6,19.8,12.5,26.3c7.5,29.5,23.1,51.9,28.8,59.5v26.9c0,7.6-4.1,14.6-10.8,18.2l-73.6,40.2c-2.3,1.3-4.7,2.8-7,4.4
		                                   C49.1,389,18.6,326,18.6,256z M395.3,448.1c-3.3,2.4-6.6,4.7-9.9,6.8c-1.5,1-3.1,2-4.7,3c-4.4,2.7-8.9,5.3-13.4,7.7
		                                   c-1,0.5-2,1-3,1.6c-10.5,5.4-21.3,10-32.5,13.7c-0.4,0.1-0.8,0.3-1.2,0.4c-5.8,1.9-11.7,3.7-17.7,5.1c0,0,0,0-0.1,0
		                                   c-6,1.5-12.1,2.7-18.3,3.7c-0.2,0-0.3,0.1-0.5,0.1c-5.8,0.9-11.6,1.6-17.5,2.1c-1,0.1-2.1,0.2-3.1,0.2c-5.8,0.4-11.6,0.7-17.4,0.7
		                                   c-5.9,0-11.8-0.3-17.6-0.7c-1-0.1-2-0.1-3-0.2c-5.9-0.5-11.8-1.2-17.6-2.2c-0.3,0-0.5-0.1-0.8-0.1c-12.3-2.1-24.4-5.1-36.2-9
		                                   c-0.4-0.1-0.7-0.3-1.1-0.4c-5.9-2-11.6-4.2-17.3-6.6c0,0-0.1,0-0.1-0.1c-5.4-2.3-10.7-4.9-15.9-7.6c-0.7-0.4-1.4-0.7-2-1.1
		                                   c-4.8-2.5-9.4-5.3-14-8.2c-1.4-0.9-2.7-1.7-4-2.6c-4.2-2.8-8.4-5.6-12.5-8.7c-0.4-0.3-0.8-0.7-1.2-1c0.3-0.2,0.6-0.3,0.9-0.5
		                                   l73.6-40.2c12.7-6.9,20.5-20.2,20.5-34.6l0-33.5l-2.1-2.6c-0.2-0.2-20.3-24.7-27.9-57.9l-0.8-3.7l-3.2-2.1c-4.5-2.9-7.2-7.7-7.2-13
		                                   v-33c0-4.3,1.8-8.4,5.2-11.4l3.1-2.8V158l-0.1-1.2c0-0.2-2.8-22.6,13-40.6c13.5-15.3,36.5-23.1,68.5-23.1c31.9,0,54.9,7.7,68.4,23
		                                   c15.8,17.8,13.2,40.6,13.2,40.8l-0.1,53.1l3.1,2.8c3.3,3,5.2,7.1,5.2,11.4v33c0,6.6-4.5,12.7-11,14.7l-4.6,1.4l-1.5,4.6
		                                   c-5.5,17.1-13.3,32.8-23.2,46.8c-2.4,3.4-4.8,6.5-6.9,8.8l-2.3,2.6v34.4c0,15,8.3,28.5,21.8,35.2l78.8,39.4c0.5,0.3,1,0.5,1.5,0.8
		                                   C397.3,446.6,396.3,447.3,395.3,448.1z">
                  </path>
                </g>
              </svg>
              </button>
            @endif

            
          </div>
        </div>
    </div>
</header>
