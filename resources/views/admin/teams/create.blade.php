@extends('layouts.admin_layout')

@section('content')
    <div class="p-4">
        <a class="back-btn" href="{{ route('team.index') }}">Back</a>
        <form action="{{ route('team.store') }}" method="POST" enctype="multipart/form-data" class="w-2/4 m-auto">
            @csrf
            <p class="mb-6">Add New Member</p>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="first_name" class="form-input peer" placeholder=" ">
                <label class="form-label">First Name</label>
                @error('first_name')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="last_name" class="form-input peer" placeholder=" ">
                <label class="form-label">Last Name</label>
                @error('last_name')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="designation" class="form-input peer" placeholder=" ">
                <label class="form-label">Designation</label>
                @error('designation')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="integer" name="position" class="form-input peer" placeholder=" ">
                <label class="form-label">Position</label>
                @error('position')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="statement" class="form-input peer" placeholder=" ">
                <label class="form-label">Statement</label>
                @error('statement')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="url" name="linkedin_url" class="form-input peer" placeholder=" ">
                <label class="form-label">LinkedIn Url</label>
                @error('linkedin_url')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <label class="form-label">Image</label>
                <input type="file" name="image" class="form-input peer" accept="image/*"
                    onchange="previewImage(event)">
                <img id="preview" class="hidden mt-2 w-20 h-20 rounded-full">
                @error('image')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <button type="submit" class="create-btn">Submit</button>
        </form>
    </div>
@endsection
