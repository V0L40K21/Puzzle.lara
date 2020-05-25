@extends('layouts.app')

@section('content')
    <h1>{{$data->subject}}</h1>
        
        <div>
            <p>{{ $data->email }}</p>
            <p>{{ $data->message }}</p>
            <p><small>{{ $data->created_at }}</small></p>
            <a href="{{ route('home-update', $data->id) }}"><button>Редактировать</button></a>
            <a href="{{ route('home-delete', $data->id) }}"><button>Удалить</button></a>
            <hr>
        </div>
@endsection