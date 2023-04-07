@extends('layouts.admin_layout')
@section('content')
    <form action="/user/password" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-6">
            <label for="current_password" class="text-gray-700">Current Password</label>
            <input type="password" name="current_password"
                class="w-full px-4 py-2 text-gray-700 bg-white border border-solid border-gray-300 rounded focus:border-blue-600 focus:outline-none">
            @error('current_password')
                <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="password" class="text-gray-700">Password</label>
            <input type="password" name="password"
                class="w-full px-4 py-2 text-gray-700 bg-white border border-solid border-gray-300 rounded focus:border-blue-600 focus:outline-none">
            @error('password')
                <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
            @enderror
        </div>
        <div class="mb-6">
            <label for="password_confirmation" class="text-gray-700">Confirm Password</label>
            <input type="password" name="password_confirmation"
                class="w-full px-4 py-2 text-gray-700 bg-white border border-solid border-gray-300 rounded focus:border-blue-600 focus:outline-none">
            @error('password_confirmation')
                <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
            @enderror
        </div>
        @if (session('status'))
            <div class="mb-4 font-medium text-sm text-green-600">
                {{ session('status') }}
            </div>
        @endif
        <div class="mb-4">
            <button type="sumbit"
                class="w-full py-3 bg-blue-600 text-white font-medium rounded shadow-sm hover:bg-blue-700">
                Register
            </button>
        </div>
    </form>
    </div>
@endsection
