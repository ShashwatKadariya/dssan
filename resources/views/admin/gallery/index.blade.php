@extends('layouts.admin_layout')

@section('content')
    {{-- gallery section --}}
    <section class="w-11/12 mx-auto mt-16 mb-8 lg:mb-16">
        <div data-aos="zoom-in-up" data-aos-duration="500">
            <p class="text-3xl font-semibold text-dwit-blue">Gallery</p>
            <hr class="mt-2">
        </div>
        <div class="mt-8 grid sm:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-16">
            @foreach ($galleries as $gallery)
                <a href="#" target="blank">
                    <div data-aos="fade-up" data-aos-duration="800" class="relative border rounded-uihalf drop-shadow-sm">
                        <div class="mx-auto aspect-3/2 object-contain bg-cover rounded-uihalf"
                            style="background-image: url({{ asset('/storage/' . $gallery->cover_image) }})">
                        </div>
                        <div class="absolute bg-black top-0 w-full h-full opacity-20"></div>
                        <div class="absolute bottom-4 left-4 flex flex-col gap-2 text-white">
                            <p class="text-xl font-medium drop-shadow-sm">Alumni Meet</p>
                            <p class="font-medium drop-shadow-sm">
                                @foreach ($images as $image)
                                    @if ($gallery->id == $image->gallery_id)
                                        Total Photos: {{ $image->count() }}
                                    @break
                                @endif
                            @endforeach
                        </p>
                    </div>
                </div>
            </a>
        @endforeach
        <a href="{{ route('gallery.create') }}">
            <div data-aos="fade-up" data-aos-duration="800" class="relative border rounded-uihalf drop-shadow-sm">
                <div class="mx-auto aspect-3/2 object-contain bg-cover rounded-uihalf"
                    style="background-image: url({{ asset('/images/add_logo.png') }})">
                </div>
                <div class="absolute bg-black top-0 w-full h-full opacity-20"></div>
            </div>
        </a>
</section>
@endsection