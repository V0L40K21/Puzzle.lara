<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Puzzle Studio</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Roboto+Condensed:300,400,700&display=swap&subset=cyrillic" rel="stylesheet">

        <!-- Styles -->
        <link rel="stylesheet" href="css/style.min.css">
    </head>
    <body>
    @yield('content')
</body>
</html>