<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title')</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
<header>
    <nav>
        <ul>
            <li><a href="{{ route('home') }}">Главная страница</a></li>
            <li><a href="{{ route('about') }}">О нас</a></li>
            <li><a href="{{ route('menu') }}">Меню</a></li>
            <li><a href="{{ route('reservation') }}">Заказ столика</a></li>
            <li><a href="{{ route('event') }}">Заказ мероприятия</a></li>
            <li><a href="{{ route('map') }}">Схема проезда</a></li>
            <li><a href="{{ route('sitemap') }}">Карта сайта</a></li>
        </ul>
    </nav>
</header>

<main>
    @yield('content')
</main>

<footer>
    <p>&copy; 2024 Ресторанный бизнес</p>
</footer>
</body>
</html>
