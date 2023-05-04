@extends('layouts.admin_layout')
@section('content')
    <form method="POST" action="{{ route('gallery.update', $gallery->id) }}" enctype="multipart/form-data" id="submitForm"
        class="form">
        @csrf
        @method('PUT')

        <div class="mb-6">
            <div class="mb-6">
                <label for="name" class="form-label"> Name </label>
                <input type="text" name="name" class="form-input">
            </div>

            <div class="mb-6">
                <label for="cover_image" class="form-label"> Image </label>
                <input type="file" name="cover_image" class="form-input">
            </div>
            @if ($gallery->image)
                <img id="oldImage" src="{{ asset('/storage/' . $gallery->image) }}" class="block mt-2 h-20"
                    alt="gallery_image">
            @endif
        </div>

        <button type="submit" class="button" id="edit" onclick="loading()">
            <img aria-hidden="true" src="{{ asset('images/svg/loading.svg') }}"
                class="hidden w-4 h-4 mr-2 text-white animate-spin" id="loading_icon">
            Edit
        </button>
    </form>
    <img src="{{ asset('/storage/' . $gallery->cover_image) }}" alt="">
    <form method="POST" action="{{ route('gallery.destroy', $gallery->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="button" id="edit" onclick="loading()">
            <img aria-hidden="true" src="{{ asset('images/svg/loading.svg') }}"
                class="hidden w-4 h-4 mr-2 text-white animate-spin" id="loading_icon">
            DELETE
        </button>
    </form>
@endsection