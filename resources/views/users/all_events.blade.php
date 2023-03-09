@extends('layouts.user_layout')

@section('content')
    {{-- events calender section --}}
    <section class="w-11/12 lg:w-9/12 mx-auto mt-18 xs:mt-20 mb-8 lg:mb-16">
        <div data-aos="zoom-in-up" data-aos-duration="500">
            <p class="text-3xl font-semibold text-heading">EVENTS CALENDAR</p>
            <hr class="mt-2">
        </div>
        <div class="mt-8 flex flex-col gap-8 lg:gap-16">
            @for ($i = 0; $i < 3; $i++)
                <div data-aos="fade-up" data-aos-duration="800"
                    class="flex flex-col-reverse sm:flex-row gap-2 justify-between items-center pl-4 border rounded-uihalf drop-shadow-sm">
                    <div class="flex gap-4">
                        <div class="flex flex-col gap-1 sm:gap-2 justify-evenly text-right pr-4 border-r-2">
                            <p class="font-medium">Mar</p>
                            <p class="font-semibold text-4xl">03</p>
                            <p class="font-medium">Fri</p>
                        </div>
                        <div class="flex flex-col gap-1 sm:gap-2 justify-between">
                            <p class="font-semibold sm:text-xl">Women's BIG BEAST Tournament</p>
                            <div class="flex gap-1 items-center">
                                <img src="{{ asset('images/icon/time.png') }}" class="h-5 object-contain aspect-3/2">
                                <p class="font-medium">5:30 pm</p>
                            </div>
                            <p class="font-light text-xs sm:text-sm text-justify">
                                Looking back on the time the 39th President came to Omaha for two Sifal events.
                            </p>
                        </div>
                    </div>
                    <div class="w-68 aspect-3/2 object-contain bg-cover rounded-uihalf"
                        style="background-image: url({{ asset('images/images/unnamed.jpg') }})">
                    </div>
                </div>
            @endfor
        </div>
    </section>
@endsection
