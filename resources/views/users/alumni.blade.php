@extends('layouts.user_layout')

@section('content')
    {{-- image section --}}
    <section>
        <div class="relative float-right w-96 h-96 top-20 right-20">
            <div class="absolute bg-cover h-36 w-36 top-18 rounded-full"
                style="background-image: url('{{ asset('/images/images/gallery.png') }}')">

            </div>
            <div class="absolute bg-cover h-72 w-72 top-0 right-0 rounded-full"
                style="background-image: url('{{ asset('/images/images/graduation-cropped.JPG') }}')">

            </div>
            <div class="absolute bg-cover h-36 w-36 bottom-0 left-42 rounded-full"
                style="background-image: url('{{ asset('/images/images/gallery.png') }}')">

            </div>
        </div>
    </section>
@endsection
