@extends('layouts.user_layout')

@section('content')
    <section class="w-11/12 mx-auto mt-16">
        {{-- image section --}}
        <div class="relative float-right w-96 h-96">
            <div class="absolute bg-cover h-36 w-36 top-18 rounded-full"
                style="background-image: url('{{ asset('/images/images/gallery.png') }}')">
            </div>
            <div class="absolute bg-cover h-72 w-72 right-0 rounded-full"
                style="background-image: url('{{ asset('/images/images/graduation-cropped.JPG') }}')">
            </div>
            <div class="absolute bg-cover h-36 w-36 bottom-0 left-42 rounded-full"
                style="background-image: url('{{ asset('/images/images/gallery.png') }}')">
            </div>
        </div>
        {{-- text section --}}
        <div>
            <p class="text-5xl font-bold">Welcome to</p>
            <p class="text-5xl font-bold mt-1">Alumni Section</p>
            <p class="w-1/2 mt-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Iusto dignissimos fugit
                voluptatibus aliquam unde nostrum! Fuga minima mollitia animi adipisci vitae, at quas sequi eos
                reprehenderit! Ipsum, enim!</p>
        </div>
    </section>
@endsection
