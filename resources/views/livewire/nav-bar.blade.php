<header class="sticky top-0 z-10 bg-white dark:bg-black">
    <section class="mx-auto py-3 px-5 flex justify-between items-center sm:px-10">
        <a href="/home">
            <img src="{{ asset('images/logo/dssanlogo.png') }}" alt="dssanlogo"
                class="max-w-[11rem] sm:max-w-[13rem] md:max-w-[16rem]">
        </a>
        <div>
            <button id="hamburger-button" class="text-2xl sm:hidden cursor-pointer">&#9776</button>
            <nav class="hidden sm:block space-x-5" aria-label="main">
                <a href="/home" class="hover:text-very-deep-orange">Home</a>
                <a href="/about" class="hover:text-very-deep-orange">About</a>
                <a href="/gallery" class="hover:text-very-deep-orange">Gallery</a>
                <a href="/alumni" class="hover:text-very-deep-orange">Alumni</a>
                <a href="/news&events" class="hover:text-very-deep-orange">News & Events</a>
            </nav>
        </div>
    </section>

    <section id="mobile-menu"
        class="absolute top-11 my-2 sm:top-12 sm:hidden bg-very-deep-orange w-full hidden flex-col origin-top animate-open-menu">
        <nav class="flex flex-col px-5 pb-1" aria-label="mobile">
            <a href="/home" class="hover:text-white dark:hover:text-black">Home</a>
            <a href="/about" class="hover:text-white dark:hover:text-black">About</a>
            <a href="/gallery" class="hover:text-white dark:hover:text-black">Gallery</a>
            <a href="/alumni" class="hover:text-white dark:hover:text-black">Alumni</a>
            <a href="/news&events" class="hover:text-white dark:hover:text-black">News & Events</a>
        </nav>
    </section>
</header>
