@extends('layouts.admin_layout')

@section('content')
    <div>
        <div class="p-4">
            <a class="text-white bg-blue-700 hover:bg-blue-800 font-medium rounded text-sm px-5 py-2 text-center"
                href="{{ route('team.index') }}">Back</a>
        </div>

        <form action="{{ route('team.update', $team->id) }}" method="POST" enctype="multipart/form-data" class="pb-4 w-2/4 mx-auto">
            @csrf
            @method('PUT')
            <p class="pb-4 text-gray-700">Edit Details</p>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="full_name"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " value="{{ $team->full_name }}">
                <label
                    class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Full
                    Name</label>
                @error('full_name')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>

            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="designation"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " value="{{ $team->designation }}">
                <label
                    class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Designation</label>
                @error('designation')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>

            <div class="relative z-0 w-full mb-6 group">
                <input type="integer" name="position"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " value="{{ $team->position }}">
                <label
                    class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Position</label>
                @error('position')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>

            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="statement"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " value="{{ $team->statement }}">
                <label
                    class="peer-focus:font-medium absolute text-sm text-gray-500 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:left-0 peer-focus:text-blue-600 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Statement</label>
                @error('statement')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>

            <div class="relative z-0 w-full mb-6 group">
                <input type="url" name="linkedin_url"
                    class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none focus:outline-none focus:ring-0 focus:border-blue-600 peer"
                    placeholder=" " value="{{ $team->linkedin_url }}">
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
                <img src="{{ asset('/storage/' . $team->image) }}" class="p-2 w-20 h-20 rounded-full" alt="team">

            </div>

            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
        </form>
    </div>
@endsection
