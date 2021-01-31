@extends('layouts.main-layout')
@section('content')

    <h1>
        {{ $brand -> name }}:
        {{ $brand -> officeCount }} offices
    </h1>
    <img src="{{ $brand -> logo}}">

@endsection