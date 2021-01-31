@extends('layouts.main-layout')
@section('content')
<h1>
    {{ $seat -> name }} 
    {{ $seat -> address }}:
</h1>

@endsection