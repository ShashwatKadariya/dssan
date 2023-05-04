@extends('layouts.admin_layout')
@section('content')
    <form method="POST" action="{{ route('image.update', $image->id) }}" enctype="multipart/form-data" id="submitForm"
        class="form">
        @csrf
        @method('PUT')

        <div class="mb-6">
            <div class="mb-6">
                <label for="image" class="form-label"> Image </label>
                <input type="file" name="image" class="form-input">
            </div>
            @if ($image->image)
                <img id="oldImage" src="{{ asset('/storage/' . $image->image) }}" class="block mt-2 h-20"
                    alt="gallery_image">
            @endif
        </div>

        <button type="submit" class="button" id="edit" onclick="loading()">
            <img aria-hidden="true" src="{{ asset('images/svg/loading.svg') }}"
                class="hidden w-4 h-4 mr-2 text-white animate-spin" id="loading_icon">
            Edit
        </button>
    </form>
    <form method="POST" action="{{ route('image.destroy', $image->id) }}">
        @csrf
        @method('DELETE')
        <button type="submit" class="button" id="edit" onclick="loading()">
            <img aria-hidden="true" src="{{ asset('images/svg/loading.svg') }}"
                class="hidden w-4 h-4 mr-2 text-white animate-spin" id="loading_icon">
            DELETE
        </button>
    </form>
@endsection
