@extends('layouts.admin_layout')

@section('content')
    <div class="p-4">
        <a class="back-btn" href="{{ route('feedback.index') }}">Back</a>

        <form action="{{ route('feedback.update', $feedback->id) }}" method="POST" enctype="multipart/form-data"
            class="w-2/4 m-auto">
            @csrf
            @method('PUT')
            <p class="mb-6">Edit Details</p>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="full_name" class="form-input peer" placeholder=" "
                    value="{{ $feedback->full_name }}">
                <label class="form-label">Full Name</label>
                @error('full_name')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="email" name="email" class="form-input peer" placeholder=" " value="{{ $feedback->email }}">
                <label class="form-label">Email address</label>
                @error('email')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="subject" class="form-input peer" placeholder=" "
                    value="{{ $feedback->subject }}">
                <label class="form-label">Subject</label>
                @error('subject')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="batch" class="form-input peer" placeholder=" " value="{{ $feedback->batch }}">
                <label class="form-label">Batch</label>
                @error('batch')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="message" class="form-input peer" placeholder=" "
                    value="{{ $feedback->message }}">
                <label class="form-label">Message</label>
                @error('message')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <label class="form-label">Image</label>
                <input type="file" name="image" class="form-input peer" accept="image/*"
                    onchange="previewImage(event)">
                <img id="preview" class="hidden mt-2 w-20 h-20 rounded-full">
                <img src="{{ asset('/storage/' . $feedback->image) }}" class="p-2 w-20 h-20 rounded-full" alt="&#10060;">
            </div>
            <button type="submit" class="create-btn">Submit</button>
        </form>
    </div>
@endsection
