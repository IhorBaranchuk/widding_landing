@extends('layouts.app')

@section('title')
    {{$data->name}}
@endsection

@section('content')
    <h1>{{$data->name}}</h1>
        <div class="alert alert-info">
            <p>{{$data->message}}</p>
            <p>{{$data->email}}</p>
            <p>{{$data->message}}</p>
            <a href="{{ route('review-detail-update',$data->id) }}">
                <button class="btn btn-primary">Обновить</button>
            </a>
            <a href="{{ route('review-detail-delete',$data->id) }}">
                <button class="btn btn-primary">Удалить</button>
            </a>
        </div>
@endsection('content')
