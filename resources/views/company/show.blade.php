@extends('layouts.app')

@section('title', 'COMPANY DETAILS')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/show.css') }}">

    <main class="main-container">
        <div class="container-table">
            <table class="table-container">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>COMPANY NAME</th>
                        <th>NIT</th>
                        <th>ADDRESS</th>
                        <th>PHONE</th>
                        <th>EMAIL</th>
                        <th>UBICATION</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $company->id }}</td>
                        <td>{{ $company->company_name }}</td>
                        <td>{{ $company->nit_number}}</td>
                        <td>{{ $company->address }}</td>
                        <td>{{ $company->telephone }}</td>
                        <td>{{ $company->email }}</td>
                        <td>{{ $company->municipality->municipality_name }}</td>
                    </tr>
                </tbody>
            </table>
        </div>
        <button class="back-btn" onclick="history.go(-1);">
            <i class="fa fa-arrow-left"></i> BACK
        </button>        
    </main>
@endsection
