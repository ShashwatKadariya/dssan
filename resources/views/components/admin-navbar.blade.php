@auth
    <nav class="fixed top-0 z-50 w-full bg-white border-b py-2 px-5 flex items-center justify-between">
        <div>
            <a href="/dashboard">
                <img src="{{ asset('images/logo/dssanblue.png') }}" alt="dssanlogo" class="max-w-[6rem]">
            </a>
        </div>
        <div>
            <button type="button" onclick="dropdownUser()">
                <img class="w-8 h-8 rounded-full" src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                    alt="user photo">
            </button>
        </div>
    </nav>
@endauth
