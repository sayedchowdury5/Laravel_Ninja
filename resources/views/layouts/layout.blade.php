<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Nunito:200,600" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="/css/main.css">
    </head>
    <body>
    <ul>
          <li><a href="{{ route('/pizzas') }}">All pizza</a></li>
          <li><a href="{{ route('/pizzas') }}">All pizza</a></li>
          <li><a href="{{ route('/pizzas') }}">All pizza</a></li>
          </ul>

    @yield('content')

    <footer>
    copyright &copy; 2020 - Pizza house
    </footer>
    </body>
</html>