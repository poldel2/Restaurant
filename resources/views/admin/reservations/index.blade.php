@extends('adminlte::page')

@section('title', 'Заказы')

@section('content_header')
    <h1>Список заказов</h1>
@endsection

@section('content')
    <table class="table table-bordered">
        <thead>
        <tr>
            <th>ID</th>
            <th>Имя</th>
            <th>Email</th>
            <th>Телефон</th>
            <th>Количество гостей</th>
            <th>Дата заказа</th>
            <th>Сообщение</th>
        </tr>
        </thead>
        <tbody>
        @foreach($reservations as $reservation)
            <tr>
                <td>{{ $reservation->id }}</td>
                <td>{{ $reservation->name }}</td>
                <td>{{ $reservation->email }}</td>
                <td>{{ $reservation->phone }}</td>
                <td>{{ $reservation->guests }}</td>
                <td>{{ $reservation->reservation_date }}</td>
                <td>{{ $reservation->message }}</td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
