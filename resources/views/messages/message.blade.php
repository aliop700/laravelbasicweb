@extends('layouts.app')
@section('content')
    @if(count($messages) > 0)
        @foreach($messages as $message)
            <h1>Messages</h1>
            <ul class="list-group">
                <li class="list-group-item">Name : {{$message->name}}</li>
                <li class="list-group-item">Email : {{$message->email}}</li>
                <li class="list-group-item">Message : {{$message->message}}</li>
            </ul>
        @endforeach
    @endif
@endsection