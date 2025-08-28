@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')
    <h1 class="text-center font-semibold text-5xl mt-8">Dashboard</h1>

    <div class="flex justify-center">
        <a href="{{ route('employee.view') }}" class="px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600">
            Add Customer
        </a>
    </div>
@endsection
