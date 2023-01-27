<header class="fixed w-full top-0 z-10 bg-black backdrop-filter backdrop-blur-lg bg-opacity-80">
    <section class="mx-auto py-2 px-5 flex justify-between items-center">
        <a href="/home">
            <img src="{{ asset('images/logo/dssanlogowhite.png') }}" alt="dssanlogo" class="max-w-[11rem]">
        </a>
        <div>
            <button id="hamburger-button" class=" text-white text-lg sm:hidden cursor-pointer">&#9776;</button>
            <nav class="hidden sm:block space-x-5 text-white/60" aria-label="main">
                <a href="/home" class="active:text-white hover:text-white">Home</a>
                <a href="/gallery" class="active:text-white hover:text-white">Gallery</a>
                <a href="/alumni" class="active:text-white hover:text-white">Alumni</a>
                <a href="/news&events" class="active:text-white hover:text-white">News & Events</a>
            </nav>
        </div>
    </section>

    <section id="mobile-menu"
        class="absolute top-11 bg-black backdrop-filter backdrop-blur-lg bg-opacity-80 sm:hidden w-full hidden flex-col origin-top animate-open-menu">
        <nav class="flex flex-col px-5 pb-2 text-white/60" aria-label="mobile">
            <a href="/home" class="py-1 active:text-white hover:text-white border-b border-white/60">Home</a>
            <a href="/gallery" class="py-1 active:text-white hover:text-white border-b border-white/60">Gallery</a>
            <a href="/alumni" class="py-1 active:text-white hover:text-white border-b border-white/60">Alumni</a>
            <a href="/news&events" class="py-1 active:text-white hover:text-white border-b border-white/60">News &
                Events</a>
        </nav>
    </section>

    {{-- current page nav-link highlighting script --}}
    <script>
        $(function() {
            $('a').each(function() {
                if ($(this).prop('href') == window.location.href) {
                    $(this).addClass('text-white');
                }
            });
        });
    </script>
</header>
