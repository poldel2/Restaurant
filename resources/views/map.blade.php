@extends('template')

@section('title', 'Схема проезда')

@section('content')
    <h1>Схема проезда</h1>
    <div id="map" style="width: 100%; height: 400px;"></div>

    <script src="https://api-maps.yandex.ru/2.1/?lang=ru_RU" type="text/javascript"></script>
    <script type="text/javascript">
        ymaps.ready(init);
        function init() {
            var map = new ymaps.Map("map", {
                center: [55.76, 37.64], //TODO:ЗАМЕНИТЬ НА РАНДОМ КООРДИНАТЫ В СЕВЕ
                zoom: 10
            });

            var placemark = new ymaps.Placemark([55.76, 37.64], {
                hintContent: 'Наш ресторан',
                balloonContent: 'Добро пожаловать в наш ресторан!'
            });

            map.geoObjects.add(placemark);
        }
    </script>
@endsection
