@extends('layouts.admin_layout')

@section('content')
    <div class="p-4">
        <a class="back-btn" href="{{ route('batch.show', $alumni->batch_id) }}">Back</a>
        <form action="{{ route('alumni.update', $alumni->id) }}" method="POST" enctype="multipart/form-data"
            class="w-2/4 m-auto" id="submitForm">
            @csrf
            <p class="mb-6">Edit details for {{ $alumni->full_name }}, {{ $alumni->batch->batch }}</p>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="full_name" class="form-input peer" placeholder=" "
                    value="{{ $alumni->full_name }}">
                <label class="form-label">Full Name</label>
                @error('full_name')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="email" name="email" class="form-input peer" placeholder=" " value="{{ $alumni->email }}">
                <label class="form-label">Email address</label>
                @error('email')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="address" class="form-input peer" placeholder=" " value="{{ $alumni->address }}">
                <label class="form-label">Current Address</label>
                @error('address')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="contact" class="form-input peer" placeholder=" "
                    value="{{ $alumni->contact }}">
                <label class="form-label">Contact Number</label>
                @error('contact')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="url" name="social_link" class="form-input peer" placeholder=" "
                    value="{{ $alumni->social_link }}">
                <label class="form-label">Social Link (url)</label>
                @error('social_link')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="date" name="birth_date" class="form-input peer" placeholder=" "
                    value="{{ $alumni->birth_date }}">
                <label class="form-label">Birth Date</label>
                @error('birth_date')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <label class="block mb-1 text-sm font-medium text-gray-500">Gender</label>
                <select name="gender"
                    class="bg-gray-100 border border-gray-300 text-gray-900 text-sm rounded w-full p-2 focus:outline-none focus:ring-0 focus:border-blue-600">
                    <option value="{{ $alumni->gender }}" selected>{{ $alumni->gender }}</option>
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                @error('gender')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="current_university" class="form-input peer" placeholder=" "
                    value="{{ $alumni->current_university }}">
                <label class="form-label">Current University</label>
                @error('current_university')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="major_subject" class="form-input peer" placeholder=" "
                    value="{{ $alumni->major_subject }}">
                <label class="form-label">Major Subject</label>
                @error('major_subject')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <label class="text-sm text-gray-500">Edit Photo</label>
                <input type="file" name="image" class="form-input peer" accept="image/*"
                    onchange="previewImage(event)">
                <img id="preview" class="hidden mt-2 w-20 h-20 rounded-full">
                @if ($alumni->image)
                    <img id="oldImage" src="{{ asset('/storage/' . $alumni->image) }}"
                        class="p-2 max-w-20 max-h-20 rounded-full" alt="&#10060;">
                @endif
                @error('image')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <button type="submit" class="create-btn" id="create" onclick="loading()"><svg aria-hidden="true"
                    role="status" class="hidden w-4 h-4 mr-2 text-white animate-spin" id="loading_icon"
                    viewBox="0 0 100 101" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path
                        d="M100 50.5908C100 78.2051 77.6142 100.591 50 100.591C22.3858 100.591 0 78.2051 0 50.5908C0 22.9766 22.3858 0.59082 50 0.59082C77.6142 0.59082 100 22.9766 100 50.5908ZM9.08144 50.5908C9.08144 73.1895 27.4013 91.5094 50 91.5094C72.5987 91.5094 90.9186 73.1895 90.9186 50.5908C90.9186 27.9921 72.5987 9.67226 50 9.67226C27.4013 9.67226 9.08144 27.9921 9.08144 50.5908Z"
                        fill="#E5E7EB" />
                    <path
                        d="M93.9676 39.0409C96.393 38.4038 97.8624 35.9116 97.0079 33.5539C95.2932 28.8227 92.871 24.3692 89.8167 20.348C85.8452 15.1192 80.8826 10.7238 75.2124 7.41289C69.5422 4.10194 63.2754 1.94025 56.7698 1.05124C51.7666 0.367541 46.6976 0.446843 41.7345 1.27873C39.2613 1.69328 37.813 4.19778 38.4501 6.62326C39.0873 9.04874 41.5694 10.4717 44.0505 10.1071C47.8511 9.54855 51.7191 9.52689 55.5402 10.0491C60.8642 10.7766 65.9928 12.5457 70.6331 15.2552C75.2735 17.9648 79.3347 21.5619 82.5849 25.841C84.9175 28.9121 86.7997 32.2913 88.1811 35.8758C89.083 38.2158 91.5421 39.6781 93.9676 39.0409Z"
                        fill="currentColor" />
                </svg>Submit</button>
        </form>
    </div>
@endsection
