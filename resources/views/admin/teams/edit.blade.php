@extends('layouts.admin_layout')

@section('content')
    <div class="p-4">
        <a class="back-btn" href="{{ route('team.index') }}">Back</a>

        <form action="{{ route('team.update', $team->id) }}" method="POST" enctype="multipart/form-data" class="w-2/4 m-auto">
            @csrf
            @method('PUT')
            <p class="mb-6">Edit Details</p>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="first_name" class="form-input peer" placeholder=" "
                    value="{{ $team->first_name }}">
                <label class="form-label">First Name</label>
                @error('first_name')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="last_name" class="form-input peer" placeholder=" "
                    value="{{ $team->last_name }}">
                <label class="form-label">Last Name</label>
                @error('last_name')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="designation" class="form-input peer" placeholder=" "
                    value="{{ $team->designation }}">
                <label class="form-label">Designation</label>
                @error('designation')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="integer" name="position" class="form-input peer" placeholder=" " value="{{ $team->position }}">
                <label class="form-label">Position</label>
                @error('position')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="statement" class="form-input peer" placeholder=" "
                    value="{{ $team->statement }}">
                <label class="form-label">Statement</label>
                @error('statement')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="url" name="linkedin_url" class="form-input peer" placeholder=" "
                    value="{{ $team->linkedin_url }}">
                <label class="form-label">LinkedIn Url</label>
                @error('linkedin_url')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <label class="form-label">Image</label>
                <input type="file" name="image" class="form-input peer">
                <img src="{{ asset('/storage/' . $team->image) }}" class="p-2 w-20 h-20 rounded-full" alt="team">
            </div>
            <button type="submit" class="create-btn">Submit</button>
        </form>
    </div>
@endsection
