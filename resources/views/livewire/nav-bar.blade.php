<header class="fixed w-full top-0 z-10 bg-navbar">
    <section class="mx-auto w-11/12 py-2.5 flex justify-between items-center">
        <a href="/home">
            <img src="{{ asset('images/logo/dssanwhite.png') }}" alt="dssanlogo" class="max-w-[12rem] aspect-auto">
        </a>
        {{-- big screens navbar --}}
        <div>
            <button id="hamburger-button" class="text-white text-lg sm:hidden cursor-pointer">&#9776;</button>
            <nav class="hidden sm:block space-x-5 text-white font-semi" aria-label="main">
                <a href="/home" class="active:text-black hover:text-black delay-75">Home</a>
                <a href="/gallery" class="active:text-black hover:text-black delay-75">Gallery</a>
                <a href="/alumni" class="active:text-black hover:text-black delay-75">Alumni</a>
                <a href="/news&events" class="active:text-black hover:text-black delay-75">News & Events</a>
            </nav>
        </div>
    </section>

    {{-- mobile view navbar --}}
    <section id="mobile-menu"
        class="absolute top-12 bg-navbar backdrop-filter backdrop-blur-lg bg-opacity-80 sm:hidden w-full hidden flex-col origin-top animate-open-menu">
        <nav class="flex flex-col w-11/12 mx-auto pb-4 text-white" aria-label="mobile">
            <a href="/home" class="py-1 active:text-black hover:text-black border-b border-white/70">Home</a>
            <a href="/gallery" class="py-1 active:text-black hover:text-black border-b border-white/70">Gallery</a>
            <a href="/alumni" class="py-1 active:text-black hover:text-black border-b border-white/70">Alumni</a>
            <a href="/news&events" class="py-1 active:text-black hover:text-black border-b border-white/70">News &
                Events</a>
        </nav>
    </section>

    {{-- current page nav-link highlighting script --}}
    <script>
        $(function() {
            $('a').each(function() {
                if ($(this).prop('href') == window.location.href) {
                    $(this).addClass('text-black');
                }
            });
        });
    </script>
</header>
