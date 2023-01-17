<header class="sticky top-0 z-10 bg-teal-900">
    <section class="mx-auto py-2 px-5 flex justify-between items-center">
        <a href="/home">
            <img src="{{ asset('images/logo/dssanlogowhite.png') }}" alt="dssanlogo"
                class="max-w-[9rem] sm:max-w-[11rem] md:max-w-[13rem]">
        </a>
        <div>
            <button id="hamburger-button" class="text-xl text-white sm:hidden cursor-pointer">&#9776;</button>
            <nav class="hidden sm:block space-x-5 font-medium" aria-label="main">
                <a href="/home" class="text-white hover:text-neutral-900">Home</a>
                <a href="/gallery" class="text-white hover:text-neutral-900">Gallery</a>
                <a href="/alumni" class="text-white hover:text-neutral-900">Alumni</a>
                <a href="/news&events" class="text-white hover:text-neutral-900">News & Events</a>
            </nav>
        </div>
    </section>

    <section id="mobile-menu"
        class="absolute top-11 bg-white sm:hidden w-full hidden flex-col origin-top animate-open-menu">
        <nav class="flex flex-col px-5 pb-1" aria-label="mobile">
            <a href="/home"
                class="py-2 hover:text-very-deep-orange border-b border-very-deep-orange active:text-very-deep-orange">Home</a>
            <a href="/gallery"
                class="py-2 hover:text-very-deep-orange border-b border-very-deep-orange active:text-very-deep-orange">Gallery</a>
            <a href="/alumni"
                class="py-2 hover:text-very-deep-orange border-b border-very-deep-orange active:text-very-deep-orange">Alumni</a>
            <a href="/news&events" class="py-2 hover:text-very-deep-orange active:text-very-deep-orange">News &
                Events</a>
        </nav>
    </section>
</header>
