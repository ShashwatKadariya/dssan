@extends('layouts.admin_layout')

@section('content')
    <div class="bg-cover"
        style="background-image: url({{ asset('images/loginBG.png') }})">
        <div class="bg-black w-full h-screen opacity-40">
        </div>
    </div>
    <div class="fixed w-96 h-[22rem] top-1/2 left-1/2 -mt-44 -ml-48 bg-black opacity-20">
    </div>
    <div class="fixed w-96 h-[22rem] top-1/2 left-1/2 -mt-44 -ml-48 bg-white opacity-90 px-8 py-4 rounded">
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
            <p class="mb-3 text-blue-600 hover:text-blue-700 text-center hover:underline">
                <a href="#!">Forgot password?</a>
            </p>
        </form>
    </div>
@endsection
