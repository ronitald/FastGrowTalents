@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('/css/app-home.css') }}">
    <link rel="icon" href="{{ asset('/img/icon.png') }}" type="image/x-icon">

    <main class="content">
        <div>
            @guest
                <h1 class="title-home" >¡ENCUENTRA TU PRÓXIMO EMPLEO HOY!</h1>
                <pc class="subtitle-home">PUBLICA TUS OFERTAS EN EL PORTAL DE EMPLEO CON MAYOR AUDIENCIA DEL PAÍS</p>
                <button class="buttons-home"><span class="span-home"></span>Subir CV</button>
                <button class="buttons-home"><span class="span-home"></span>Ver más</button>
            @endguest
        </div>
    </main>

@endsection