@extends('layouts.admin_layout')

@section('content')
    <div class="p-4">
        <a class="back-btn" href="{{ route('fact.index') }}">Back</a>
        <form action="{{ route('fact.store') }}" method="POST" enctype="multipart/form-data" class="w-2/4 m-auto">
            @csrf
            <p class="mb-6">Add Details</p>
            <div class="relative z-0 w-full mb-6 group">
                <input type="number" name="graduated" class="form-input peer" placeholder=" ">
                <label class="form-label">Graduated</label>
                @error('graduated')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="number" name="current_members" class="form-input peer" placeholder=" ">
                <label class="form-label">Current Members</label>
                @error('current_members')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <label class="text-sm text-gray-600">Graduated Text</label>
                <textarea rows="2" name="graduated_text"
                    class="block mt-2 p-2 w-full text-sm text-gray-900 rounded bg-gray-50 border border-gray-200 focus:ring-blue-500"></textarea>
                @error('graduated_text')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <label class="text-sm text-gray-600">Current Members Text</label>
                <textarea rows="2" name="current_members_text"
                    class="block mt-2 p-2 w-full text-sm text-gray-900 rounded bg-gray-50 border border-gray-200 focus:ring-blue-500"></textarea>
                @error('current_members_text')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <button type="submit" class="create-btn">Submit</button>
        </form>
    </div>
@endsection
