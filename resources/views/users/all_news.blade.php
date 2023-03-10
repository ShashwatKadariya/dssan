@extends('layouts.user_layout')

@section('content')
    {{-- events calender section --}}
    <section class="w-11/12 lg:w-9/12 mx-auto mt-16 mb-8 lg:mb-16">
        <div data-aos="zoom-in-up" data-aos-duration="500">
            <p class="text-3xl font-semibold text-heading">NEWS</p>
            <hr class="mt-2">
        </div>
        <div class="mt-8 flex flex-col gap-8 lg:gap-16">
            @for ($i = 0; $i < 3; $i++)
                <a href="/article" target="blank">
                    <div data-aos="fade-up" data-aos-duration="800"
                        class="flex flex-col-reverse sm:flex-row gap-2 justify-between items-center pl-4 border rounded-uihalf drop-shadow-sm">
                        <div class="flex flex-col gap-2 justify-between">
                            <p class="font-medium text-lg leading-6">What a decade in the BIG EAST has meant for Sifal
                                School
                            </p>
                            <p class="font-normal text-base">Feb 28, 2023</p>
                            <p class="font-light text-sm">Looking back on the time the 39th President came to Omaha for two
                                Sifal events.</p>
                            <div class="flex gap-1">
                                <p class="font-normal text-sm">By:</p>
                                <p class="font-normal text-sm text-heading">Binayak Bhai</p>
                            </div>
                        </div>
                        <div class="w-68 aspect-3/2 object-contain bg-cover rounded-uihalf"
                            style="background-image: url({{ asset('images/images/unnamed.jpg') }})">
                        </div>
                    </div>
                </a>
            @endfor
        </div>
    </section>
@endsection
