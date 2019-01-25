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

  @include('mainpage.includes.header')

  @yield('content')

  @include('mainpage.includes.footer')

</body>
</html>
