@extends('layouts.admin_layout')

@section('content')
    <div class="h-screen w-full flex justify-center items-center gap-10 bg-cover"
        style="background-image: url({{ asset('images/city-evening-cityscape.jpg') }})">
        <div class="bg-white p-8 w-1/3 rounded">
            <p class="text-xl text-center mb-4 font-semibold">Sign in to your account</p>
            <form>
                <div class="mb-4">
                    <label for="email" class="text-lg text-gray-700">Email address</label>
                    <input type="email"
                        class="w-full px-4 py-2 text-lg text-gray-700 bg-white border border-solid border-gray-300 rounded focus:border-blue-600 focus:outline-none">
                </div>

                <div class="mb-6">
                    <label for="password" class="text-lg text-gray-700">Password</label>
                    <input type="password"
                        class="w-full px-4 py-2 text-lg text-gray-700 bg-white border border-solid border-gray-300 rounded focus:border-blue-600 focus:outline-none">
                </div>

                <div class="text-center mb-4">
                    <button type="button"
                        class="w-full py-3 bg-blue-600 text-white font-medium text-sm rounded shadow-sm hover:bg-blue-700">
                        Log in to your account
                    </button>
                </div>
                <p class="mb-3 text-blue-500">
                    <a href="#!">Forgot password?</a>
                </p>
            </form>
        </div>
    </div>
@endsection
