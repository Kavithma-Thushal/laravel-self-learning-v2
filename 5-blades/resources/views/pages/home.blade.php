@extends('layouts.app')

@section('title', 'Home')

@section('content')
    <h1 class="text-center text-5xl font-semibold mt-8">Welcome</h1>

    <div class="flex justify-center items-center min-h-[60vh] mt-20">
        <div class="space-x-4">
            <a href="{{ route('register.view') }}"
               class="px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Register</a>
            <a href="{{ route('login.view') }}"
               class="px-6 py-3 bg-blue-500 text-white rounded-lg hover:bg-blue-600">Login</a>
        </div>
    </div>
@endsection
