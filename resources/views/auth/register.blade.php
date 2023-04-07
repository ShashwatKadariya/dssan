@extends('layouts.admin_layout')
@section('content')
    <form action="/register" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="mb-4">
            <label for="name" class="text-gray-700">Full Name</label>
            <input type="text" name="name"
                class="w-full px-4 py-2 text-gray-700 bg-white border border-solid border-gray-300 rounded focus:border-blue-600 focus:outline-none">
            @error('name')
                <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
            @enderror
        </div>
        <div class="mb-4">
            <label for="email" class="text-gray-700">Email address</label>
            <input type="email" name="email"
                class="w-full px-4 py-2 text-gray-700 bg-white border border-solid border-gray-300 rounded focus:border-blue-600 focus:outline-none">
            @error('email')
                <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="role" class="text-gray-700">Role</label>
            <input type="text" name="role"
                class="w-full px-4 py-2 text-gray-700 bg-white border border-solid border-gray-300 rounded focus:border-blue-600 focus:outline-none">
            @error('role')
                <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
            @enderror
        </div>
        <div class="mb-4">
            <button type="sumbit"
                class="w-full py-3 bg-blue-600 text-white font-medium rounded shadow-sm hover:bg-blue-700">
                Register
            </button>
        </div>
    </form>
    </div>
@endsection
