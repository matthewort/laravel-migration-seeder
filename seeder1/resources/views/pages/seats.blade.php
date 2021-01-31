@extends('layouts.main-layout')
@section('content')
<h1>Seats:</h1>
<ul>
    @foreach ($seats as $seat)
    <li>
        <a href="{{ route('seat-show', $seat -> id) }}">
        {{ $seat -> name }}
        {{ $seat -> address }}
        </a>
    </li>
    @endforeach
</ul>
@endsection