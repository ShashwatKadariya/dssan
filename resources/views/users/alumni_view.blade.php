@extends('layouts.user_layout')

@section('content')
    {{-- alumni section --}}
    <section class="w-11/12 mx-auto mt-16 xs:mt-20 mb-8 lg:mb-16">
        <p data-aos="zoom-in-up" data-aos-duration="500" class="text-xl xs:text-2xl font-semibold text-heading text-center">
            {{ $batch->batch }}
        </p>
        <hr data-aos="fade-up" data-aos-duration="500" class="mt-2">
        <div class="w-10/12 mx-auto mt-8 grid sm:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-6 xl:gap-8">
            @foreach ($alumni as $alumnus)
                <a href="{{ $alumnus->social_link }}" target="blank">
                    <div data-aos="fade-up" data-aos-duration="800" class="drop-shadow">
                        @if ($alumnus->image)
                            <div class="mx-auto aspect-3/2 object-contain bg-cover rounded-uihalf"
                                style="background-image: url({{ asset('/storage/' . $alumnus->image) }})">
                            </div>
                        @else
                            <div class="mx-auto aspect-3/2 object-contain bg-cover rounded-uihalf"
                                style="background-image: url({{ asset('images/default/default.png') }})">
                            </div>
                        @endif
                        <p class="-mt-2 font-semibold text-xl bg-div-dark text-white text-center py-2">
                            {{ $alumnus->full_name }}</p>
                    </div>
                </a>
            @endforeach
        </div>
    </section>
@endsection
