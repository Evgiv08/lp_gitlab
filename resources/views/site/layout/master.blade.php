<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8"/>
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lifes Pulse</title>
    <link rel="stylesheet" href="{{ asset('css/styles.css') }}">
</head>
<body>

  @include('site.includes.popups')

  @include('site.includes.header')

  @yield('content')

  @include('site.includes.subscribe')

  @include('site.includes.footer')

  <script src="{{ asset('js/index.js') }}"></script>

</body>
</html>
