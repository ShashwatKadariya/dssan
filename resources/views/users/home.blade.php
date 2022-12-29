@extends('layouts.user_layout')

@section('content')
    <section class="w-11/12 mx-auto sm:flex xl:w-10/12">
        <div class="w-1/3 opacity-75 sm:opacity-100 bg-gradient-to-r from-deep-orange to-orange text-white">
            <div class="font-bold text-lg text-center pt-14 md:text-xl md:pt-19 xl:text-2xl xl:pt-24">
                <p>Deerwalk Sifal School</p>
                <p> Alumni Association</p>
            </div>
            <div class="text-gray-100 text-center pt-4 md:text-lg md:pt-12 xl:text-xl xl:pt-14">
                <p>Your journey doesn't end</p>
                <p>at graduation.</p>
            </div>
        </div>
        <div class="w-2/3 sm:col-span-2">
            <img src="{{ asset('images/images/graduation.png') }}" alt="graduation">
        </div>
    </section>

    <section class="text-center my-2">
        <p class="text-2xl text-dark-red font-semibold">Our Alumni</p>
        <div class="bg-light-orange grid grid-cols-3 my-2 p-12">
            <div>
                <p class="text-dark-red font-bold text-3xl">3000</p>
                <p class="text-semibold text-lg">GRADUATED</p>
            </div>
            <div>
                <p class="text-dark-red font-bold text-3xl">240</p>
                <p class="text-semibold text-lg">CURRENT</p>
                <p class="text-semibold text-lg -m-2">MEMBERS</p>
            </div>
            <div>
                <p class="text-dark-red font-bold text-3xl">15</p>
                <p class="text-semibold text-lg">ACTIVE</p>
                <p class="text-semibold text-lg -m-2">MEMBERS</p>
            </div>
        </div>
    </section>

    <section class="text-center m-2">
        <p class="text-2xl text-dark-red font-semibold">Team</p>
        <p class="text-xl m-1 font-medium">Dedication. Expertise. Passion</p>
        <p class="px-12 leading-5">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cupiditate impedit quam est
            numquam. Voluptatibus nulla consequatur culpa expedita neque.
        </p>

        <div class="grid grid-cols-3 gap-8 p-10">
            <div class="p-4 bg-orange rounded-2xl">
                <div class="rounded-full bg-cover h-32 w-32 mx-auto"
                    style="background-image: url({{ asset('images/icon/female.png') }})">
                </div>
                <p class="text-center font-bold text-2xl mt-2">Alex Smith</p>
                <p class="text-center font-medium text-lg">Chief Officer</p>
                <p class="text-center leading-5 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="p-4 bg-orange rounded-2xl">
                <div class="rounded-full bg-cover h-32 w-32 mx-auto"
                    style="background-image: url({{ asset('images/icon/female.png') }})">
                </div>
                <p class="text-center font-bold text-2xl mt-2">Alex Smith</p>
                <p class="text-center font-medium text-lg">Chief Officer</p>
                <p class="text-center leading-5 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="p-4 bg-orange rounded-2xl">
                <div class="rounded-full bg-cover h-32 w-32 mx-auto"
                    style="background-image: url({{ asset('images/icon/female.png') }})">
                </div>
                <p class="text-center font-bold text-2xl mt-2">Alex Smith</p>
                <p class="text-center font-medium text-lg">Chief Officer</p>
                <p class="text-center leading-5 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="p-4 bg-orange rounded-2xl">
                <div class="rounded-full bg-cover h-32 w-32 mx-auto"
                    style="background-image: url({{ asset('images/icon/female.png') }})">
                </div>
                <p class="text-center font-bold text-2xl mt-2">Alex Smith</p>
                <p class="text-center font-medium text-lg">Chief Officer</p>
                <p class="text-center leading-5 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="p-4 bg-orange rounded-2xl">
                <div class="rounded-full bg-cover h-32 w-32 mx-auto"
                    style="background-image: url({{ asset('images/icon/female.png') }})">
                </div>
                <p class="text-center font-bold text-2xl mt-2">Alex Smith</p>
                <p class="text-center font-medium text-lg">Chief Officer</p>
                <p class="text-center leading-5 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="p-4 bg-orange rounded-2xl">
                <div class="rounded-full bg-cover h-32 w-32 mx-auto"
                    style="background-image: url({{ asset('images/icon/female.png') }})">
                </div>
                <p class="text-center font-bold text-2xl mt-2">Alex Smith</p>
                <p class="text-center font-medium text-lg">Chief Officer</p>
                <p class="text-center leading-5 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="p-4 bg-orange rounded-2xl">
                <div class="rounded-full bg-cover h-32 w-32 mx-auto"
                    style="background-image: url({{ asset('images/icon/female.png') }})">
                </div>
                <p class="text-center font-bold text-2xl mt-2">Alex Smith</p>
                <p class="text-center font-medium text-lg">Chief Officer</p>
                <p class="text-center leading-5 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="p-4 bg-orange rounded-2xl">
                <div class="rounded-full bg-cover h-32 w-32 mx-auto"
                    style="background-image: url({{ asset('images/icon/female.png') }})">
                </div>
                <p class="text-center font-bold text-2xl mt-2">Alex Smith</p>
                <p class="text-center font-medium text-lg">Chief Officer</p>
                <p class="text-center leading-5 mt-2">Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>
            </div>
            <div class="p-4 bg-orange rounded-2xl">
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
