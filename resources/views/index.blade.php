@extends('layouts.app')

@section('title', '| Servicio de consultas médicas online')

@section('stylesheets')

@endsection

@section('content')
    <?php
        use Illuminate\Support\Facades\Auth;

        $usuario = Auth::user()["attributes"];
    ?>

    {{--Hola, {{ $usuario["nombres"] . " " . $usuario["apellidos"] }}. <a href="{{ route('usuario.logout') }}">Salir.</a>--}}

    contentttt
@endsection

@section('scripts')

@endsection