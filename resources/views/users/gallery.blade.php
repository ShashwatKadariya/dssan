@extends('layouts.user_layout')

@section('content')
    <section class="text-center text-dark-red mt-2">
        <p class="text-lg font-medium leading-5">Welcome to the photo gallery section of</p>
        <p class="text-lg font-semibold">Deerwalk Sifal School Alumni Association.</p>
        <p class="text-2xl font-semibold pt-1">Life at DSS</p>
    </section>

    <section class="sm:grid sm:grid-cols-3">
        <div class="bg-cover w-60 h-60 mx-auto my-8 text-white pt-32 pl-2"
            style="background-image: url({{ asset('images/images/gallery.png') }})">
            <p class="text-xl font-semibold">Book Reading Session</p>
            <p class="text-xl font-semimedium">Dec 9-15, 2022</p>
            <p class="text-lg font-medium pt-2">10 photos</p>
        </div>
        <div class="bg-cover w-60 h-60 mx-auto my-8"
            style="background-image: url({{ asset('images/images/gallery.png') }})">
        </div>
        <div class="bg-cover w-60 h-60 mx-auto my-8"
            style="background-image: url({{ asset('images/images/gallery.png') }})">
        </div>
        <div class="bg-cover w-60 h-60 mx-auto my-8"
            style="background-image: url({{ asset('images/images/gallery.png') }})">
        </div>
        <div class="bg-cover w-60 h-60 mx-auto my-8"
            style="background-image: url({{ asset('images/images/gallery.png') }})">
        </div>
        <div class="bg-cover w-60 h-60 mx-auto my-8"
            style="background-image: url({{ asset('images/images/gallery.png') }})">
        </div>
    </section>
@endsection
