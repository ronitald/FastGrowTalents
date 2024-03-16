@extends('layouts.app')

@section('Title', 'UPDATE COMPANY')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/form.css') }}">

    <div class="container">

        <form class="form signup" method="POST" action="{{ route('company.update', ['company' => $company->id]) }}">
            @csrf
            @method('PATCH')
            <h2>UPDATE COMPANY</h2>
            <div class="first-row">
                <div class="inputBox">
                    <input type="text" name="company_name" required="required" value="{{ $company->company_name }}">
                    <i class="fa-solid fa-building"></i>
                    <span>COMPANY NAME</span>
                </div>
                <div class="inputBox">
                    <input type="text" name="nit_number" required="required" value="{{ $company->nit_number }}">
                    <i class="fa-solid fa-building"></i>
                    <span>COMPANY NIT</span>
                </div>
            </div>            
            <div class="second-row">
                <div class="inputBox">
                    <input type="text" name="address" required="required" value="{{ $company->address }}">
                    <i class="fa-solid fa-location-dot"></i>
                    <span>ADDRESS</span>
                </div>
                <div class="inputBox">
                    <input type="text" name="telephone" required="required" value="{{ $company->telephone }}">
                    <i class="fa fa-phone"></i>
                    <span>PHONE</span>
                </div>
            </div>
            <div class="third-row">
                <div class="inputBox">
                    <input type="email" name="email" required="required" value="{{ $company->email }}">
                    <i class="fa fa-envelope"></i>
                    <span>EMAIL</span>
                </div>
                <div class="selection">
                    <select name="ubication_id" required="required">
                        <option value="" disabled selected></option>
                        @forelse ($municipalities as $municipality)
                        <option value="{{ $municipality->id }}" @if ($municipality->id == $company->ubication_id) selected @endif>
                                {{ $municipality->municipality_name }}</option>
                        @empty
                            <p></p>
                        @endforelse
                    </select>
                    <i class="fa fa-compass"></i>
                    <span class="date">UBICATION</span>
                    <div class="arrow-down"></div>
                </div>
            </div>
            <div class="inputBox">
                <input type="submit" value="UPDATE COMPANY" />
            </div>
            <div class="backBox">
                <a class="back" href="{{ route('company.index') }}">BACK</a>
            </div>
        </form>
    </div>
@stop
