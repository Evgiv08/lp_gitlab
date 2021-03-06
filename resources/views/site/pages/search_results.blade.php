@extends('site.layout.master')


@section('content')
<div class="search-input-block container">
  <form method="GET">
      <label>
          <input type="search" id="search_field" placeholder="{{ isset($search_text)? $search_text
           : 'Что Вы хотите найти?' }}">
          <button class="header-search" onclick='this.form.action="/search/" + document.getElementById("search_field")
          .value;'>
              <svg version="1.1" id="Capa_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                      <g>
                          <path d="M495.6,466.4L373.8,339.6c31.3-37.2,48.5-84.1,48.5-132.9C422.3,92.7,329.5,0,215.6,0S8.8,92.7,8.8,206.7
                                   s92.7,206.7,206.7,206.7c42.8,0,83.6-12.9,118.4-37.4l122.8,127.7c5.1,5.3,12,8.3,19.4,8.3c7,0,13.6-2.7,18.7-7.5
                                   C505.6,494.2,506,477.1,495.6,466.4z M215.6,53.9c84.3,0,152.8,68.5,152.8,152.8s-68.5,152.8-152.8,152.8S62.8,291,62.8,206.7
                                   S131.3,53.9,215.6,53.9z">
                          </path>
                      </g>
                  </svg>
          </button>
      </label>
      <select name="category_id" id="category">
          <option selected disabled>Поиск во всех категориях</option>
          @forelse( $categories as $category)
          <option value="{{ $category->id }}">{{ $category->title }}</option>
          @empty
          <option>Нет доступных категорий.</option>
          @endforelse
      </select>
      <div class="search-result-navigation">
          <h2>
              Результаты поиска
          </h2>
          <div class="search-result-sort">
              <button disabled>Популярные</button>
              <button disabled>Завершаются</button>
              <button>Новые вверху</button>
              <button>Старые вверху</button>
          </div>
      </div>
  </form>
</div>
<div class="card-block container">
      <ul class="card-block-list">

      @isset( $charities )
          @forelse( $charities as $charity)
          <li>
              <a href="/{{ $charity->slug }}" class="single-card">
                  <img src="{{ asset('storage/'.$charity->img_path) }}" alt="{{ $charity->slug }}" title="{{
                   $charity->full_name }}">

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
                                          c14.3,12.4,25.1,28.2,31.3,45.7c4.5,12.7,6.4,26.6,5.6,41.1c-1.4,28.4-12.6,59.8-33.9,95.9C404.2,332.1,343.1,390.8,255.8,447.1z
                                          "></path>
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
                                                  C509.8,367.1,468.1,325.4,416.5,325.4z"></path>
                                          </g>
                                  </svg>
                              <p class="count">
                                  58
                              </p>

                          </div>
                      </div>
                      <h4>
                          {{ $charity->full_name }}
                      </h4>
                      <h6>
                          {{ $charity->purpose }}
                      </h6>
                      <div class="money-count">
                          <div class="money-diagram">
                              <div class="top-line" data-money-diagram="75" style="width: 75%;"></div>
                          </div>

                          <div class="money-how">
                              <p>
                                  Собрали 0 грн
                              </p>
                              <p>
                                  из {{ $charity->sum }} грн
                              </p>
                          </div>
                      </div>
                  </div>
              </a>
          </li>
          @empty
                  <li>По вашему запросу ничего не найдено.</li>
          @endforelse
      @endisset
      </ul>
      <div class="link-wrapper">
          <a href="/">Посмотреть еще</a>
      </div>
</div>
@endsection
