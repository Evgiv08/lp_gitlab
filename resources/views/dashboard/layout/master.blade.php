<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Административная панель | @yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

{{--check for login form--}}
{{--@auth('staff')--}}

@include('dashboard.includes.header')

<main class="account-admin-block">
    <div class="account-admin-block-wrapper">

        @include('dashboard.includes.sidebar')

        @yield('content')

    </div>
</main>
{{--@else--}}
    {{--@yield('content')--}}
{{--@endauth--}}


<script src="{{ asset('js/index.js') }}"></script>

</body>
</html>
