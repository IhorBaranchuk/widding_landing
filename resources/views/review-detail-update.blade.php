@extends('layouts.app')

@section('title')
    Обновление записи
@endsection

@section('content')
    <h1>Обновление записи</h1>
    <form action="{{ route('review-detail-update-submit',$data->id) }}" method="post">
        @csrf
        <div class="form-group">
            <label for="name">Введите имя</label>
            <input type="text" name="name" value="{{$data->name}}" placeholder="Введите имя" id="name" class="form-control">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="text" name="email" value="{{$data->email}}" placeholder="Введите email" id="email" class="form-control">
        </div>
        <div class="form-group">
            <label for="message">Введите тест сообщения</label>
            <textarea name="message" placeholder="Введите сообщение" id="message" class="form-control" placeholder="Введите текст сообщения">{{$data->message}}</textarea>
        </div>
        <button type="submit" class="btn btn-success">Отправить</button>
    </form>
@endsection('content')
