@extends('layouts.admin_layout')

@section('content')
    <div class="p-4">
        <a class="back-btn" href="{{ route('fact.index') }}">Back</a>
        <form action="{{ route('fact.update', $fact->id) }}" method="POST" enctype="multipart/form-data" class="w-2/4 m-auto">
            @csrf
            @method('PUT')
            <p class="mb-6">Edit Details</p>
            <div class="relative z-0 w-full mb-6 group">
                <input type="number" name="graduated" class="form-input peer" placeholder=" "
                    value="{{ $fact->graduated }}">
                <label class="form-label">Graduated</label>
                @error('graduated')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="number" name="current_members" class="form-input peer" placeholder=" "
                    value="{{ $fact->current_members }}">
                <label class="form-label">Current Members</label>
                @error('current_members')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="graduated_text" class="form-input peer" placeholder=" "
                    value="{{ $fact->graduated_text }}">
                <label class="form-label">Graduated Text</label>
                @error('graduated_text')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="current_members_text" class="form-input peer" placeholder=" "
                    value="{{ $fact->current_members_text }}">
                <label class="form-label">Current Members Text</label>
                @error('current_members_text')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <button type="submit" class="create-btn">Submit</button>
        </form>
    </div>
@endsection
