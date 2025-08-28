@extends('layouts.app')

@section('title', 'Add Customer')

@section('content')
    <h1 class="text-center text-4xl font-semibold mt-8">Add Customer</h1>

    <div class="flex justify-center items-center mt-12">
        <div class="bg-white p-8 rounded-lg shadow-md w-96 space-y-4">

            <form action="{{ route('customer.create') }}" method="POST" class="space-y-4">
                @csrf
                <input type="text" name="name" placeholder="Customer Name" class="w-full px-3 py-2 border rounded-lg"
                       required>
                <input type="text" name="address" placeholder="Address" class="w-full px-3 py-2 border rounded-lg"
                       required>
                <input type="number" name="salary" placeholder="Salary" class="w-full px-3 py-2 border rounded-lg"
                       required>
                <button type="submit" class="w-full bg-blue-500 text-white px-6 py-3 rounded-lg hover:bg-blue-600">Save
                    Customer
                </button>
            </form>

        </div>
    </div>
@endsection
