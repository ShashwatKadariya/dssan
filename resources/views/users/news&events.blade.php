@extends('layouts.user_layout')

@section('content')
    {{-- latest news section --}}
    <section class="w-11/12 mx-auto mt-18 xs:mt-20">
        <div data-aos="zoom-in-up" data-aos-duration="500">
            <p class="text-3xl font-semibold text-heading">LATEST NEWS</p>
            <hr class="mt-2">
        </div>
        <div class="mt-8 grid sm:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-16">
            @for ($i = 0; $i < 6; $i++)
                <a href="#" target="blank">
                    <div data-aos="fade-up" data-aos-duration="800" class="border rounded-uihalf drop-shadow-sm">
                        <div class="mx-auto aspect-3/2 object-contain bg-cover rounded-uihalf"
                            style="background-image: url({{ asset('images/images/unnamed.jpg') }})">
                        </div>
                        <div class="p-4 flex flex-col gap-2 justify-between">
                            <p class="font-medium text-lg leading-6">What a decade in the BIG EAST has meant for Sifal
                                School
                            </p>
                            <p class="font-normal text-base">Feb 28, 2023</p>
                            <p class="font-light text-sm">Looking back on the time the 39th President came to Omaha for two
                                Sifal events.</p>
                        </div>
                    </div>
                </a>
            @endfor
        </div>
        <p data-aos="fade-up" data-aos-duration="800"
            class="text-sm py-2 px-5 w-fit border border-heading mt-8 active:text-white active:bg-heading hover:text-white hover:bg-heading">
            <a href="#" target="blank">View All News</a>
        </p>
    </section>

    {{-- upcoming events section --}}
    <section class="w-11/12 mx-auto my-8 lg:my-16">
        <div data-aos="zoom-in-up" data-aos-duration="500">
            <p class="text-3xl font-semibold text-heading">UPCOMING EVENTS</p>
            <hr class="mt-2">
        </div>
        <div class="mt-8 grid sm:grid-cols-2 lg:grid-cols-3 gap-8 lg:gap-16">
            @for ($i = 0; $i < 6; $i++)
                <a href="#" target="blank">
                    <div data-aos="fade-up" data-aos-duration="800"
                        class="flex gap-4 p-4 border rounded-uihalf drop-shadow-sm">
                        <div class="flex flex-col gap-1 text-right pr-4 border-r-2">
                            <p class="font-medium">Mar</p>
                            <p class="font-semibold text-4xl">03</p>
                            <p class="font-medium">Fri</p>
                        </div>
                        <div class="flex flex-col justify-between">
                            <p class="font-semibold text-xl">Women's BIG BEAST Tournament</p>
                            <div class="flex gap-1 items-center">
                                <img src="{{ asset('images/icon/time.png') }}" class="h-5 object-contain aspect-3/2">
                                <p class="font-medium">5:30 pm</p>
                            </div>
                        </div>
                    </div>
                </a>
            @endfor
        </div>
        <p data-aos="fade-up" data-aos-duration="800"
            class="text-sm py-2 px-5 w-fit border border-heading mt-8 active:text-white active:bg-heading hover:text-white hover:bg-heading">
            <a href="#" target="blank">View All Events</a>
        </p>
    </section>
@endsection
