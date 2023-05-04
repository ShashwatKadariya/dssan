@extends('layouts.admin_layout')
@section('content')
    <div class="mb-6">
        <form method="POST" action="{{ route('gallery.store') }}" enctype="multipart/form-data" id="submitForm" class="form">
            @csrf

            <div class="mb-6">
                <label for="name" class="form-label"> Name </label>
                <input type="text" name="name" class="form-input">
            </div>

            <div class="mb-6">
                <label for="cover_image" class="form-label"> Image </label>
                <input type="file" name="cover_image" class="form-input">
            </div>

            <button type="submit" class="button" id="create" onclick="loading()">
                <img aria-hidden="true" src="{{ asset('images/svg/loading.svg') }}"
                    class="hidden w-4 h-4 mr-2 text-white animate-spin" id="loading_icon">
                Add
            </button>
        </form>
    </div>
    @foreach ($gallery as $galleryData)
        @if ($galleryData->cover_image)
            <div class="mb-6">
                <button>
                    <a href="{{ route('gallery.image.create', $galleryData) }}"><img id="gallery_image"
                            src="{{ asset('/storage/' . $galleryData->cover_image) }}" class="block mt-2 h-20"
                            alt="gallery_image"></a>
                </button>
            </div>
        @endif
    @endforeach
@endsection
