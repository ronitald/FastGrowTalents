@extends('layouts.app')

@section('content')
    <link rel="stylesheet" href="{{ asset('/css/postulation-home.css') }}">
    <link rel="stylesheet" href="{{ asset('/css/admin.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.css">

    @if (Auth::user()->role->role_name == 'Administrator')
        <livewire:admin />
    @endif

    @if (Auth::user()->role->role_name == 'Recruiter')
    @endif

    @if (Auth::user()->role->role_name == 'Candidate')
        <livewire:show-offers />
    @endif

    @livewireScripts

    <script src="https://cdnjs.cloudflare.com/ajax/libs/feather-icons/4.28.0/feather.min.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            feather.replace();
        });
    </script>
@endsection
