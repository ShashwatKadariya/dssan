@extends('layouts.user_layout')

@section('content')
    <section class="px-5 w-full mx-auto sm:px-0 sm:flex sm:w-11/12 xl:w-10/12">
        <div class="p-0 sm:w-1/3 bg-image">
            <div class="bg-orange opacity-70 p-4 sm:bg-gradient-to-r from-deep-orange to-orange sm:p-0 sm:opacity-100">
                <div class="text-black font-bold text-lg text-center pt-4 sm:pt-14 md:text-xl md:pt-19 xl:text-2xl xl:pt-24">
                    <p>Deerwalk Sifal School</p>
                    <p> Alumni Association</p>
                </div>
                <div class="text-white text-center pt-14 sm:pt-4 md:text-lg md:pt-12 xl:text-xl xl:pt-14">
                    <p>Your journey doesn't end</p>
                    <p>at graduation.</p>
                </div>
            </div>
        </div>
        <div class="hidden sm:block sm:w-2/3 sm:col-span-2">
            <img src="{{ asset('images/images/graduation.png') }}" alt="graduation">
        </div>
    </section>

    <section class="text-center my-2">
        <p class="text-2xl text-dark-red font-semibold">Our Alumni</p>
        <div class="bg-light-orange grid grid-rows-3 gap-4 my-2 p-8">
            <div>
                <p class="text-dark-red font-bold text-3xl">3000</p>
                <p class="text-semibold text-lg">GRADUATED</p>
            </div>
            <div>
                <p class="text-dark-red font-bold text-3xl">240</p>
                <p class="text-semibold text-lg">CURRENT</p>
                <p class="text-semibold text-lg leading-3">MEMBERS</p>
            </div>
            <div class="pt-2">
                <p class="text-dark-red font-bold text-3xl">15</p>
                <p class="text-semibold text-lg">ACTIVE</p>
                <p class="text-semibold text-lg leading-3">MEMBERS</p>
            </div>
        </div>
    </section>

    <section class="text-center m-2">
        <p class="text-2xl text-dark-red font-semibold">Team</p>
        <p class="text-xl m-1 font-medium">Dedication. Expertise. Passion</p>
        <p class="px-5 pt-2 leading-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate impedit quam est
            numquam. Voluptatibus nulla consequatur culpa expedita neque.
        </p>

        <div class="max-w-xs m-auto sm:grid sm:grid-cols-3 sm:gap-8">
            <div class="m-8 p-10 pb-24 bg-orange rounded-2xl">
                <div class="rounded-full bg-cover h-32 w-32 mx-auto"
                    style="background-image: url({{ asset('images/icon/female.png') }})">
                </div>
                <p class="text-center font-bold text-2xl mt-2">Alex Smith</p>
                <p class="text-center font-medium text-lg">Chief Officer</p>
                <p class="text-center leading-5 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="m-8 p-10 pb-24 bg-orange rounded-2xl">
                <div class="rounded-full bg-cover h-32 w-32 mx-auto"
                    style="background-image: url({{ asset('images/icon/female.png') }})">
                </div>
                <p class="text-center font-bold text-2xl mt-2">Alex Smith</p>
                <p class="text-center font-medium text-lg">Chief Officer</p>
                <p class="text-center leading-5 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="m-8 p-10 pb-24 bg-orange rounded-2xl">
                <div class="rounded-full bg-cover h-32 w-32 mx-auto"
                    style="background-image: url({{ asset('images/icon/female.png') }})">
                </div>
                <p class="text-center font-bold text-2xl mt-2">Alex Smith</p>
                <p class="text-center font-medium text-lg">Chief Officer</p>
                <p class="text-center leading-5 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="m-8 p-10 pb-24 bg-orange rounded-2xl">
                <div class="rounded-full bg-cover h-32 w-32 mx-auto"
                    style="background-image: url({{ asset('images/icon/female.png') }})">
                </div>
                <p class="text-center font-bold text-2xl mt-2">Alex Smith</p>
                <p class="text-center font-medium text-lg">Chief Officer</p>
                <p class="text-center leading-5 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="m-8 p-10 pb-24 bg-orange rounded-2xl">
                <div class="rounded-full bg-cover h-32 w-32 mx-auto"
                    style="background-image: url({{ asset('images/icon/female.png') }})">
                </div>
                <p class="text-center font-bold text-2xl mt-2">Alex Smith</p>
                <p class="text-center font-medium text-lg">Chief Officer</p>
                <p class="text-center leading-5 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="m-8 p-10 pb-24 bg-orange rounded-2xl">
                <div class="rounded-full bg-cover h-32 w-32 mx-auto"
                    style="background-image: url({{ asset('images/icon/female.png') }})">
                </div>
                <p class="text-center font-bold text-2xl mt-2">Alex Smith</p>
                <p class="text-center font-medium text-lg">Chief Officer</p>
                <p class="text-center leading-5 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="m-8 p-10 pb-24 bg-orange rounded-2xl">
                <div class="rounded-full bg-cover h-32 w-32 mx-auto"
                    style="background-image: url({{ asset('images/icon/female.png') }})">
                </div>
                <p class="text-center font-bold text-2xl mt-2">Alex Smith</p>
                <p class="text-center font-medium text-lg">Chief Officer</p>
                <p class="text-center leading-5 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="m-8 p-10 pb-24 bg-orange rounded-2xl">
                <div class="rounded-full bg-cover h-32 w-32 mx-auto"
                    style="background-image: url({{ asset('images/icon/female.png') }})">
                </div>
                <p class="text-center font-bold text-2xl mt-2">Alex Smith</p>
                <p class="text-center font-medium text-lg">Chief Officer</p>
                <p class="text-center leading-5 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="m-8 p-10 pb-24 bg-orange rounded-2xl">
                <div class="rounded-full bg-cover h-32 w-32 mx-auto"
                    style="background-image: url({{ asset('images/icon/female.png') }})">
                </div>
                <p class="text-center font-bold text-2xl mt-2">Alex Smith</p>
                <p class="text-center font-medium text-lg">Chief Officer</p>
                <p class="text-center leading-5 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
        </div>

    </section>
@endsection
