@extends('layouts.app')

@section('title')
    Отзывы
@endsection

@section('content')
    <h1>Отзывы</h1>
    @foreach($data as $rew)
        <div class="alert alert-info">
            <h5>
                {{$rew->message}}
            </h5>
            <p><small>{{$rew->created_at}}</small></p>
            <a href="{{ route('review-detail',$rew->id) }}">
                <button class="btn btn-primary">Детальная</button>
            </a>
        </div>
    @endforeach
@endsection('content')
