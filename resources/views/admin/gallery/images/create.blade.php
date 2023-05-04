@extends('layouts.admin_layout')
@section('content')
    <div class="mb-6">
        <div class="mb-6">
            <a href="{{ route('gallery.edit', $gallery->id) }}"><img id="gallery_image"
                    src="{{ asset('/storage/' . $gallery->cover_image) }}" class="block mt-2 h-20" alt="gallery_image"></a>
        </div>

        <form method="POST" action="{{ route('gallery.image.store', $gallery) }}" enctype="multipart/form-data"
            id="submitForm" class="form">
            @csrf
            <div class="mb-6">
                <label for="images[]" class="form-label"> Multiple Images </label>
                <input type="file" name="images[]" class="form-input" multiple>
            </div>

            <button type="submit" class="button" id="create" onclick="loading()">
                <img aria-hidden="true" src="{{ asset('images/svg/loading.svg') }}"
                    class="hidden w-4 h-4 mr-2 text-white animate-spin" id="loading_icon">
                Add
            </button>
        </form>
    </div>
    @foreach ($images as $image)
        @if ($gallery->id == $image->gallery_id)
            @if ($image->image)
                <div class="mb-6">
                    <button>
                        <a href="{{ route('image.edit', $image) }}"><img id="gallery_image"
                                src="{{ asset('/storage/' . $image->image) }}" class="block mt-2 h-20"
                                alt="gallery_image"></a>
                    </button>
                </div>
            @endif
        @endif
    @endforeach
@endsection
