@extends('layout')

@section('title', 'Home')

@section('content')
    Bienvenid@  {{$nombre ?? "Invitado"}}

@endsection
