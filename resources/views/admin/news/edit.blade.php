@extends('layouts.admin_layout')

@section('content')
    <div class="p-4">
        <a class="back-btn" href="{{ route('news.index') }}">Back</a>
        <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data" class="w-2/4 m-auto"
            id="submitForm">
            @csrf
            @method('PUT')
            <p class="mb-6">Edit Details</p>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="headline" class="form-input peer" placeholder=" " value="{{ $news->headline }}">
                <label class="form-label">Event Title</label>
                @error('headline')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="tagline" class="form-input peer" placeholder=" " value="{{ $news->tagline }}">
                <label class="form-label">Tagline</label>
                @error('tagline')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <label class="text-gray-500 text-sm">Article</label>
                <textarea name="article" id="editor">{{ $news->article }}</textarea>
                @error('article')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <input type="text" name="reported_by" class="form-input peer" placeholder=" "
                    value="{{ $news->reported_by }}">
                <label class="form-label">Reported By</label>
                @error('reported_by')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <label class="text-gray-500 text-sm">Release Date</label>
                <input type="date" name="release_date" class="form-input peer" value="{{ $date }}">
                @error('release_date')
                    <p class="text-sm text-red-500"><small>{{ $message }}</small></p>
                @enderror
            </div>
            <div class="relative z-0 w-full mb-6 group">
                <label class="text-gray-500 text-sm">Edit News Banner</label>
                <input type="file" name="image" class="form-input" accept="image/*" onchange="previewImage(event)">
                <img id="preview" class="hidden mt-2 h-20">
                <img id="oldImage" src="{{ asset('/storage/' . $news->image) }}" class="block p-2 h-20" alt="news_banner">
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
    <script src="{{ asset('js/text-editor.js') }}" defer></script>
    <style>
        /* editing area */
        .ck-editor__editable[role="textbox"] {
            min-height: 200px;
        }
    </style>
@endsection
