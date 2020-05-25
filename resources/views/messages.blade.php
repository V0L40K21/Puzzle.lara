@extends('layouts.app')

@section('content')
    <h1>Все Записи</h1>
    @foreach($data as $el)
        
        <div>
            <h3>{{ $el->subject }}</h3>
            <p>{{ $el->email }}</p>
            <p><small>{{ $el->created_at }}</small></p>
            <a href="{{ route('home-data-one', $el->id) }}"><button>Детальнее</button></a>
            <hr>
        </div>
    @endforeach

@endsection