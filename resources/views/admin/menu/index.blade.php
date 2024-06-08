@extends('adminlte::page')

@section('title', 'Меню')

@section('content_header')
    <h1>Меню</h1>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            @foreach($dishes as $dish)
                <div class="col-md-4">
                    <div class="card mb-4">
                        @if($dish->photo)
                            <img src="{{ asset('storage/' . $dish->photo) }}" class="card-img-top" alt="{{ $dish->name }}">
                        @else
                            <img src="https://via.placeholder.com/150" class="card-img-top" alt="Нет изображения">
                        @endif
                        <div class="card-body">
                            <h5 class="card-title">{{ $dish->name }}</h5>
                            <p class="card-text">{{ $dish->price }} руб.</p>
                            <form action="{{ route('admin.menu.destroy', $dish) }}" method="POST" onsubmit="return confirm('Вы уверены, что хотите удалить это блюдо?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger">Удалить</button>
                            </form>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
        <div class="d-flex justify-content-center">
            {{ $dishes->links() }}
        </div>
    </div>
@endsection
