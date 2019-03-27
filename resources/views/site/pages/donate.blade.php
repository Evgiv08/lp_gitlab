@extends('site.layout.master')

@section('content')
<div class="donate-page-block container">
    <h2 class="donate-page-block-title">
        ПОЖЕРТВОВАТЬ
    </h2>
    <div class="donate-page-block-info">
        <p>Назначение платежа: <span>Эрика Волошинец, хроническая лимфоидная лейкемия</span></p>
        <p>Необходимая сумма: <span>60 000 грн</span></p>
        <p>Дата начала сбора: <span>06.07.2018</span></p>
    </div>
    <form action="" class="donate-page-form">
        <label class="label-input">
            <span>Хочу пожертвовать</span>
            <span class="currency">ГРН</span>
            <input placeholder="500" type="number">
            <p class="fast-choice"><span>25</span><span>50</span><span>100</span><span>200</span></p>
        </label>
        <label class="label-input">
            <span>Ваше имя (не обязательно):</span>
            <input placeholder="Василий Васильев Васильевич" type="text">
        </label>
        <div class="button-wrapper">
            <p>Продолжая, Вы соглашаетесь с Политикой конфиденициальности и Правилами перевода денег</p>
            <button type="submit" class="btn">
                ПОЖЕРТВОВАТЬ
            </button>
        </div>
    </form>
</div>
@endsection
