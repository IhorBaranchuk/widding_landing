@extends('layouts.app')

@section('title')
    Контакты
@endsection

@section('content')
    <h1>Страница контактов</h1>
    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci aut consectetur cum et harum iste maiores minus, necessitatibus non rem, repellendus, voluptate voluptatum? Atque fuga nam non recusandae repellat! Consequuntur.</p>

    <form action="{{ route('contact-form') }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" placeholder="Введите имя" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" placeholder="Введите email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Введите тест сообщения</label>
            <textarea name="message" placeholder="Введите сообщение" id="message" class="form-control" placeholder="Введите текст сообщения"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
@endsection('content')
