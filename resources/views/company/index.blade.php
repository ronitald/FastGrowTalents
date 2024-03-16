@extends('layouts.app')

@section('title', 'COMPANIES')

@section('content')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.1/css/all.min.css"
        integrity="sha512-MV7K8+y+gLIBoVD59lQIYicR65iaqukzvf/nwasF0nqhPay5w/9lJmVM2hMDcnK1OnMGCdVK+iQrJ7lzPJQd1w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

    <main class="main-container">
        <div class="container">
            <h2 class="title">COMPANIES</h2>
            <div class="one-container">
                <form action="" method="GET" class="search-form">
                    <div class="group">
                        <svg class="icon" aria-hidden="true" viewBox="0 0 24 24">
                            <g>
                                <path
                                    d="M21.53 20.47l-3.66-3.66C19.195 15.24 20 13.214 20 11c0-4.97-4.03-9-9-9s-9 4.03-9 9 4.03 9 9 9c2.215 0 4.24-.804 5.808-2.13l3.66 3.66c.147.146.34.22.53.22s.385-.073.53-.22c.295-.293.295-.767.002-1.06zM3.5 11c0-4.135 3.365-7.5 7.5-7.5s7.5 3.365 7.5 7.5-3.365 7.5-7.5 7.5-7.5-3.365-7.5-7.5z">
                                </path>
                            </g>
                        </svg>
                        <input placeholder="Search" type="search" class="input">
                    </div>
                </form>
                <div class="search-button">
                    <button type="button" onclick="window.location.href='{{ route('company.create') }}'">ADD</button>
                </div>
            </div>
        </div>
        <div class="container-table">
            <table class="table-container">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>COMPANY NAME</th>
                        <th>NIT</th>
                        <th>ACTIONS</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($companies as $company)
                        <tr>
                            <td>{{ $company->id }}</td>
                            <td>{{ $company->company_name }}</td>
                            <td>{{ $company->nit_number }}</td>

                            <td class="field-actions">
                                <div>
                                    <form method="POST" action="{{ route('company.destroy', $company->id) }}">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="delete-btn">
                                            <i class="fa fa-trash"></i>
                                        </button>
                                    </form>
                                </div>
                                <button class="update-btn"
                                    onclick="location.href='{{ route('company.edit', $company->id) }}'">
                                    <i class="fa fa-pencil"></i>
                                </button>
                                <button class="show-btn"
                                    onclick="location.href='{{ route('company.show', $company->id) }}'">
                                    <i class="fa fa-eye"></i>
                                </button>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="10">No data</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </main>
@stop
