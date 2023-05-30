@extends('layouts.user_layout')

@section('content')
    {{-- gallery section --}}
    <section class="w-11/12 mx-auto mt-16 mb-8 lg:mb-16">
        <div data-aos="zoom-in-up" data-aos-duration="500">
            <p class="text-3xl font-semibold text-dwit-blue">{{ $gallery->name }}</p>
        </div>
        {{-- gallery grid section --}}
        <div class="mt-8 grid sm:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-16">
            @foreach ($images as $image)
                <div data-aos="fade-up" data-aos-duration="800" class="relative rounded-uihalf drop-shadow-sm">
                    <div class="mx-auto aspect-3/2  rounded-uihalf hover:scale-125" >
                    <img src="{{asset('/storage/' . $image->image)}}" alt="pitcures" class="rounded-uihalf">
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
