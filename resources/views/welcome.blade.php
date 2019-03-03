@extends('layout')


@section('content')
    <h1>My First Web site {{ $foo }} || {{ $bar }}</h1>

    <p>{!! $scp !!}</p> 
    {{-- tag html from server side --}}
    <ul>
        @foreach($tasks as $task)
            <li>{{ $task }}</li>
        @endforeach
    </ul>
@endsection

