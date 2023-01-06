@extends('layouts.admin_layout')

@section('content')
    <div class="p-4">
        <a class="text-white bg-blue-600 hover:bg-blue-700 shadow-sm font-medium rounded-sm text-sm px-3 py-1 text-center"
            href="{{ route('team.index') }}">Back</a>

        <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data" class="w-2/4 m-auto">
            @csrf
            <p class="mb-6">Add New Member</p>

            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="first_name"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" ">
                <label
                    class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">First
                    Name</label>
                @error('first_name')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>

            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="last_name"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" ">
                <label
                    class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Last
                    Name</label>
                @error('last_name')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>

            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="designation"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" ">
                <label
                    class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Designation</label>
                @error('designation')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>

            <div class="relative z-0 w-full mb-6 group">
                <input type="integer" name="position"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" ">
                <label
                    class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Position</label>
                @error('position')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>

            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="statement"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" ">
                <label
                    class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Statement</label>
                @error('statement')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>

            <div class="relative z-0 w-full mb-6 group">
                <input type="url" name="linkedin_url"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" ">
                <label
                    class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">LinkedIn
                    Url</label>
                @error('linkedin_url')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>

            <div class="relative z-0 w-full mb-6 group">
                <label
                    class="text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Image</label>
                <input type="file" name="image"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer">
                @error('image')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>

            <button type="submit"
                class="text-white bg-blue-600 hover:bg-blue-700 shadow-sm font-medium rounded-sm text-sm px-5 py-2 text-center">Submit</button>
        </form>
    </div>
@endsection
