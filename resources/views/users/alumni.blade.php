@extends('layouts.user_layout')

@section('content')
    {{-- principal's message section --}}
    <section class="w-11/12 mx-auto mt-16 xs:mt-20">
        <p data-aos="zoom-in-up" data-aos-duration="500" class="text-xl xs:text-2xl font-semibold text-heading text-center">
            A MESSAGE FROM PRINCIPAL
        </p>
        <div data-aos="fade-up" data-aos-duration="800" class="mt-8 flex flex-col md:flex-row">
            <div class="md:w-3/5 md:pr-8 md:border-r text-sm text-justify">
                <div class="flex flex-col justify-center items-center sm:float-left sm:mt-2 sm:mr-8 mb-2">
                    <img src="{{ asset('images/images/principal.png') }}" alt="Mr. Bijay Shrestha"
                        class="h-64 object-contain">
                    <p class="mt-1">Mr. Bijay Shrestha, Principal</p>
                </div>
                <p class="text-lg font-medium">Welcome!</p>
                <p class="py-2">
                    On behalf of the UCI Anteaters in Education Alumni Chapter, I welcome you to join this vibrant and vital
                    community, serving in one of the most critical industries. Together, we are directly impacting the
                    future of our nation and the world through education and support of our youth and lifelong learners.
                </p>
                <p class="py-2">
                    The Anteaters in Education alumni network includes over 12,000+ graduates from UCI education programs
                    and degrees, as well as UCI graduates from any major who now work in (or are retired from) education or
                    an education-related field. We also extend a warm welcome to local educators who participate in
                    continuing education courses through the UCI Teacher Academy.
                </p>
                <p class="py-2">
                    We are extremely proud of all UCI alumni who serve in a myriad of roles in the education community:
                    teachers, school leaders, entrepreneurs, researchers, policymakers, youth advocates, and other
                    professionals. I hope that you stay connected and continue to thrive in your respective fields, as we
                    need educational leaders like you to shape the world for a better future for all learners.
                </p>
                <p class="py-2">
                    I am incredibly honored to serve as president of the UCI Anteaters in Education Alumni Chapter. I highly
                    encourage you to participate and engage with our School of Education community of students, faculty,
                    alumni, and staff who are committed to the growth and development of lifelong learners. Through
                    innovation, ingenuity and compassion, we aim to contribute to the advancement of teaching and learning.
                </p>
                <p class="pt-2">Best Regards,</p>
                <p>Tracy Carmichael, Ph.D.</p>
                <p>President, Anteaters in Education Alumni Chapter</p>
                <p>Chief Innovation Officer, Long Beach City College</p>
                <p
                    class="text-sm py-2 px-5 w-fit border border-heading mt-8 mx-auto active:text-white active:bg-heading hover:text-white hover:bg-heading">
                    <a href="https://deerwalk.edu.np/sifalschool/" target="blank">MEET OUR FACULTY MEMBERS</a>
                </p>
            </div>
            <div class="mx-auto w-10/12 md:w-2/5 md:pl-8 mt-8 md:mt-0">
                <p class="text-lg font-medium text-center mb-4">Alumni Benefits</p>
                <div class="flex flex-col sm:flex-row md:flex-col gap-4 lg:gap-6 xl:gap-8 items-center justify-between">
                    <div class="bg-cover w-80 xs:w-92 md:w-80 lg:w-92 aspect-3/2 object-contain"
                        style="background-image: url('{{ asset('images/images/unnamed.jpg') }}')">
                    </div>
                    <div class="bg-cover w-80 xs:w-92 md:w-80 lg:w-92 aspect-3/2 object-contain"
                        style="background-image: url('{{ asset('images/images/unnamed.jpg') }}')">
                    </div>
                </div>
            </div>
        </div>
    </section>

    {{-- batch section --}}
    <section class="w-11/12 mx-auto my-8 lg:my-16 text-center">
        <p data-aos="zoom-in-up" data-aos-duration="1000" class="text-3xl font-semibold text-heading">OUR ALUMNI</p>
        <div class="w-10/12 mx-auto mt-8 grid sm:grid-cols-2 lg:grid-cols-3 gap-4 lg:gap-6 xl:gap-8">
            @foreach ($batches as $batch)
                <div data-aos="fade-up" data-aos-duration="800">
                    <div class="mx-auto aspect-3/2 object-contain bg-cover rounded-uihalf"
                        style="background-image: url({{ asset('/storage/' . $batch->image) }})">
                    </div>
                    <p class="mt-2 font-medium text-lg">{{ $batch->batch }}</p>
                </div>
            @endforeach
        </div>
    </section>
@endsection
