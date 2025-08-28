@extends('layouts.app')

@section('title', 'Login')

@section('content')
    <h1 class="text-center text-5xl font-semibold mt-8">Login</h1>

    <div class="flex justify-center items-center min-h-[60vh] mt-20">
        <div class="bg-white p-8 rounded-lg shadow-md w-96 space-y-4">

            <form action="{{ route('login') }}" method="POST" class="space-y-4">
                @csrf
                <input type="email" name="email" placeholder="Email" class="w-full px-3 py-2 border rounded-lg"
                       required>
                <input type="password" name="password" placeholder="Password" class="w-full px-3 py-2 border rounded-lg"
                       required>
                <button type="submit" class="w-full bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600">Login
                </button>
            </form>

            <p class="mt-4 text-center">
                Don’t have an account? <a href="{{ route('register.view') }}" class="text-blue-600">Register</a>
            </p>
        </div>
    </div>
@endsection
