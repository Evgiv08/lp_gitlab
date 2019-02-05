@extends('site.layout.master')


@section('content')
<div class="previousPageBlock container">
  <a href="/" class="previousPageLink">
      Вернуться назад
  </a>
</div>
<div class="titleCard container">
  <h1 class="titleCard-fullName">
      {{ $charity->full_name }}
  </h1>
  <p class="titleCard-shortDiagnosis">
    {{ $charity->purpose }}
  </p>
</div>
<div class="allInfoBlock container">
    <div class="allHistoryBlock">
        <div class="allHistoryBlock-imgBlock">
          <img src="{{ asset('img/victoria-gonzales.jpg') }}" alt="">
        </div>
        <div class="customUserBlock">
            <p>
              {{ $charity->about }}
            </p>
        </div>
    </div>
    <div class="shortInfoBlock">
        <p class="shortInfoBlock-age">Возраст: <span>{{ $charity->age }}</span></p>
        <p class="shortInfoBlock-gender">Пол: <span>женский</span></p>
        <p class="shortInfoBlock-locations">Место проживания: <span>{{ $charity->address }}</span></p>
        <p class="shortInfoBlock-category">Категория: <span>{{ $charity->category_id }}</span></p>
        <p class="shortInfoBlock-startFund">Начало сборов: {{ $charity->start_date }}</p>
        <p class="shortInfoBlock-endFund">Окончание сборов: {{ $charity->finish_date }}</p>
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
        <div class="money-count">
            <div class="money-diagram">
                <div class="top-line" data-money-diagram="{{ rand(1, 99) }}" style="width: 100%;"></div>
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
        <button class="btn">Хочу помочь</button>
        <div class="repostBlock">
            <div class="social-network">
                <h5>Также Вы можете помочь, сделав репост в соцсетях:</h5>
                <ul>
                    <li>
                        <a href="/">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
		                            <g>
			                               <path d="M460.8,0H51.2C23,0,0,23,0,51.2v409.6C0,489,23,512,51.2,512h409.6c28.2,0,51.2-23,51.2-51.2V51.2
				                                      C512,23,489,0,460.8,0z M435.2,51.2V128H384c-15.4,0-25.6,10.2-25.6,25.6v51.2h76.8v76.8h-76.8v179.2h-76.8V281.6h-51.2v-76.8
				                                      h51.2v-64c0-48.6,41-89.6,89.6-89.6H435.2z"></path>
		                            </g>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
		                            <g>
			                               <path d="M235.5,176.6c0-25.6-15.4-76.8-53.8-76.8c-15.4,0-33.3,10.2-33.3,43.5c0,30.7,15.4,74.2,51.2,74.2
				                                      C199.7,217.6,235.5,215,235.5,176.6z M220.2,302.1c-2.6,0-5.1,0-7.7,0l0,0c-7.7,0-30.7,2.6-46.1,7.7
				                                      c-17.9,5.1-38.4,17.9-38.4,43.5c0,28.2,25.6,56.3,76.8,56.3c38.4,0,61.4-25.6,61.4-51.2C266.2,340.5,253.4,327.7,220.2,302.1z
				                                      M460.8,0H51.2C23,0,0,23,0,51.2v409.6C0,489,23,512,51.2,512h409.6c28.2,0,51.2-23,51.2-51.2V51.2C512,23,489,0,460.8,0z
				                                      M181.8,440.3c-71.7,0-105-41-105-76.8c0-12.8,2.6-41,38.4-61.4c20.5-12.8,46.1-20.5,79.4-23c-5.1-5.1-7.7-12.8-7.7-25.6
				                                      c0-5.1,0-7.7,2.6-12.8h-10.2c-51.2,0-81.9-38.4-81.9-76.8c0-43.5,33.3-92.2,105-92.2h107.5l-7.7,7.7l-17.9,17.9l-2.6,2.6h-17.9
				                                      c10.2,10.2,23,28.2,23,56.3c0,35.8-17.9,53.8-41,69.1c-5.1,2.6-10.2,10.2-10.2,17.9s5.1,12.8,10.2,15.4c2.6,2.6,7.7,5.1,12.8,7.7
				                                      c20.5,15.4,48.6,33.3,48.6,74.2C307.2,386.6,273.9,440.3,181.8,440.3z M435.2,256H384v51.2h-25.6V256h-51.2v-25.6h51.2v-51.2H384
				                                      v51.2h51.2V256z"></path>
		                            </g>
                            </svg>
                        </a>
                    </li>
                    <li>
                        <a href="/">
                            <svg version="1.1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" viewBox="0 0 512 512" style="enable-background:new 0 0 512 512;" xml:space="preserve">
                              <g>
			                             <path d="M460.8,0H51.2C23,0,0,23,0,51.2v409.6C0,489,23,512,51.2,512h409.6c28.2,0,51.2-23,51.2-51.2V51.2
				                                    C512,23,489,0,460.8,0z M401.9,186.9c-2.6,117.8-76.8,199.7-189.4,204.8c-46.1,2.6-79.4-12.8-110.1-30.7
				                                    c33.3,5.1,76.8-7.7,99.8-28.2c-33.3-2.6-53.8-20.5-64-48.6c10.2,2.6,20.5,0,28.2,0c-30.7-10.2-51.2-28.2-53.8-69.1
				                                    c7.7,5.1,17.9,7.7,28.2,7.7c-23-12.8-38.4-61.4-20.5-92.2c33.3,35.8,74.2,66.6,140.8,71.7c-17.9-71.7,79.4-110.1,117.8-61.4
				                                    c17.9-2.6,30.7-10.2,43.5-15.4c-5.1,17.9-15.4,28.2-28.2,38.4c12.8-2.6,25.6-5.1,35.8-10.2C427.5,166.4,414.7,176.6,401.9,186.9z">
                                  </path>
                              </g>
                            </svg>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="advertising-block">
          <img src="{{ asset('img/no-translate-detected.jpg') }}" alt="">
        </div>
        <div class="helpedUs">
            <h5>Уже помогли</h5>
            <p>
                <span>Игорь</span>
                <span>Сума: 50,00 грн.</span>
                <span>Дата: 12 грудня 2018 р.</span>
            </p>
            <p>
                <span>Игорь</span>
                <span>Сума: 50,00 грн.</span>
                <span>Дата: 12 грудня 2018 р.</span>
            </p>
            <p>
                <span>Игорь</span>
                <span>Сума: 50,00 грн.</span>
                <span>Дата: 12 грудня 2018 р.</span>
            </p>
            <p>
                <span>aninimouse</span>
                <span>Сума: 50,00 грн.</span>
                <span>Дата: 12 грудня 2018 р.</span>
            </p>
            <p>
                <span>Игорь</span>
                <span>Сума: 50,00 грн.</span>
                <span>Дата: 12 грудня 2018 р.</span>
            </p>
        </div>
    </div>
</div>
@endsection
