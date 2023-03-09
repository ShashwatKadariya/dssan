<header class="z-10 fixed w-full top-0 bg-white border-b sm:drop-shadow-sm">
    <section class="mx-auto w-11/12 py-1.5 flex justify-between items-center">
        <a href="/home">
            <img src="{{ asset('images/logo/dssanblue.png') }}" alt="dssanlogo" class="max-w-[6rem]">
        </a>
        {{-- big screen navbar --}}
        <div>
            <button id="hamburger-button" class="text-black text-lg sm:hidden cursor-pointer">&#9776;</button>
            <nav class="hidden sm:block space-x-6 text-black font-semibold" aria-label="main">
                <a href="/home" class="active:text-heading hover:text-heading delay-75">Home</a>
                <a href="/gallery" class="active:text-heading hover:text-heading delay-75">Gallery</a>
                <a href="/alumni" class="active:text-heading hover:text-heading delay-75">Alumni</a>
                <a href="/news&events" class="active:text-heading hover:text-heading delay-75">News & Events</a>
            </nav>
        </div>
    </section>
    {{-- mobile view navbar --}}
    <section id="mobile-menu"
        class="absolute top-12 bg-ui-white backdrop-filter backdrop-blur bg-opacity-40 sm:hidden w-full hidden flex-col origin-top animate-open-menu">
        <nav class="flex flex-col w-11/12 mx-auto pb-4 text-black" aria-label="mobile">
            <a href="/home" class="py-1 active:text-heading hover:text-heading border-b border-black/70">Home</a>
            <a href="/gallery" class="py-1 active:text-heading hover:text-heading border-b border-black/70">Gallery</a>
            <a href="/alumni" class="py-1 active:text-heading hover:text-heading border-b border-black/70">Alumni</a>
            <a href="/news&events" class="py-1 active:text-heading hover:text-heading border-b border-black/70">News &
                Events</a>
        </nav>
    </section>
    {{-- current page nav-link highlighting script --}}
    <script>
        $(function() {
            $('a').each(function() {
                if ($(this).prop('href') == window.location.href) {
                    $(this).addClass('text-heading');
                }
            });
        });
    </script>
</header>
