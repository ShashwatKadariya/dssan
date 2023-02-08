@extends('layouts.user_layout')

@section('content')
    {{-- animated video --}}
    <div class="intro">
        <h1>Your journey doesn't end at Graduation.</h1>
        <video src="{{ asset('videos/video.mp4') }}"></video>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/ScrollMagic.min.js"
            integrity="sha256-2p2tRZlPowp3P/04Pw2rqVCSbhyV/IB7ZEVUglrDS/c=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/2.1.3/TweenMax.min.js"
            integrity="sha256-lPE3wjN2a7ABWHbGz7+MKBJaykyzqCbU96BJWjio86U=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/animation.gsap.js"
            integrity="sha256-peenofh8a9TIqKdPKIeQE7mJvuwh+J0To7nslvpj1jI=" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/ScrollMagic/2.0.7/plugins/debug.addIndicators.js"
            integrity="sha256-31FC/OT6XpfjAhj9FuXjw5/wPXXawCAjJQ29E23/XPk=" crossorigin="anonymous"></script>
        <script src="{{ asset('js/app.js') }}" defer></script>
    </div>

    <section class="w-11/12 mx-auto mt-8 text-center">
        <p class="text-5xl font-bold">Team</p>
        <p class="text-xl mt-2 font-medium">Dedication. Expertise. Passion</p>
        <p class="leading-5 mt-2">Teamwork isn't just about finishing tasks faster. Teamwork increases overall productivity
            in a workplace over a sustained period, not just for one moment. Effective teams pursue a common outcome and
            have a common goal they want to reach.</p>
        <div class="sm:grid sm:grid-cols-3">
            @foreach ($teams as $team)
                <div class="container max-w-3xs mx-auto m-8 px-8 py-4 border border-ui-footer-text-darker rounded">
                    <div class="rounded-full bg-cover h-36 w-36 mx-auto"
                        style="background-image: url({{ asset('/storage/' . $team->image) }})">
                    </div>
                    <p class="text-center font-bold text-2xl mt-2">{{ $team->first_name }}</p>
                    <p class="text-center font-bold text-2xl mb-10">{{ $team->last_name }}</p>
                    <div class="overlay text-white text-sm rounded border border-white p-6">
                        <p class="text-center font-medium text-lg -mt-3">{{ $team->designation }}</p>
                        <p class="mt-2 text-left">{{ $team->statement }}</p>
                        <p class="text-left mt-10 underline"><a href="{{ $team->linkedin_url }}">Follow me on LinkedIn</a>
                        </p>
                    </div>
                </div>
            @endforeach
        </div>
    </section>
@endsection
