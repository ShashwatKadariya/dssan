@extends('layouts.user_layout')

@section('content')
    {{-- events calender section --}}
    <section class="w-11/12 mx-auto mt-16 mb-8 lg:mb-16">
        <div data-aos="fade-up" data-aos-duration="800" class="flex flex-col md:flex-row gap-8 lg:gap-16">
            <div class="md:w-3/5 flex flex-col gap-4 justify-between">
                <p class="font-medium text-lg leading-6">What a decade in the BIG EAST has meant for Sifal
                    School?
                </p>
                <div class="w-full aspect-3/2 object-contain bg-cover rounded-uihalf"
                    style="background-image: url({{ asset('images/images/unnamed.jpg') }})">
                </div>
                <div class="flex justify-between items-center text-sm">
                    <p class="font-normal">Feb 28, 2023</p>
                    <div class="flex gap-1">
                        <p class="font-normal">By:</p>
                        <p class="font-normal text-dwit-blue">Binayak Bhai</p>
                    </div>
                </div>
                <p class="text-justify text-sm">
                    The Hult Prize is a global competition that aims to identify and support the development of social
                    entrepreneurship ideas that can have a significant impact on the world. It was founded in 2009 by Ahmad
                    Ashkar, the Hult Prize has grown to become one of the world's leading platforms for promoting and
                    supporting social entrepreneurship.
                </p>
                <p class="text-justify text-sm">
                    The Hult Prize is a global competition that aims to identify and support the development of social
                    entrepreneurship ideas that can have a significant impact on the world. It was founded in 2009 by Ahmad
                    Ashkar, the Hult Prize has grown to become one of the world's leading platforms for promoting and
                    supporting social entrepreneurship.
                </p>
                <p class="text-justify text-sm">
                    The Hult Prize is a global competition that aims to identify and support the development of social
                    entrepreneurship ideas that can have a significant impact on the world. It was founded in 2009 by Ahmad
                    Ashkar, the Hult Prize has grown to become one of the world's leading platforms for promoting and
                    supporting social entrepreneurship.
                </p>
            </div>
            <div data-aos="fade-up" data-aos-duration="800" class="h-fit md:w-2/5 p-4 border">
                <p class="text-3xl font-semibold text-dwit-blue text-center pb-4 border-b">LATEST NEWS</p>
                <div class="my-8 flex flex-col gap-8 lg:gap-16">
                    @for ($i = 0; $i < 3; $i++)
                        <a href="/article" class="text-black">
                            <div class="flex flex-col gap-2">
                                <p class="font-medium text-lg leading-6">What a decade in the BIG EAST has meant for Sifal
                                    School?
                                </p>
                                <div class="flex gap-1">
                                    <p class="font-normal text-sm">By:</p>
                                    <p class="font-normal text-sm text-dwit-blue">Binayak Bhai</p>
                                </div>
                            </div>
                        </a>
                    @endfor
                </div>
            </div>
        </div>
    </section>
@endsection
