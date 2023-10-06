@extends('templates.main')

@section('content')   
    <h1>{{$title}}</h1>
    <h2>{!!$subtitle!!}</h2>
    @if(strlen($title) > 5)
    Hello! <br>
    @else
    Welcome!!
    @endif
    @foreach($users as $user)
    {{$loop->iteration}}  {{$user}}<br>
    @endforeach
    @forelse ($users as $user)
        {{$loop->iteration}}  {{$user}}<br>
    @empty
        <p>No users</p>
    @endforelse
    @php
    $a = 10;
    echo $a;
    @endphp
@endsection