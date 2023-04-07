<div id="dropdown-user" class="hidden">
    <div class="fixed top-0 w-full h-screen bg-black/10" onclick="dropdownUser()">
    </div>
    <div
        class="z-50 absolute top-16 right-5 border bg-white divide-y divide-gray-300 rounded-uihalf shadow origin-top animate-open-menu">
        <div class="px-4 py-3">
            <p class="text-sm font-medium">{{ Auth::user()->name }}</p>
            <p class="text-sm font-medium">{{ Auth::user()->email }}</p>
        </div>
        <ul class="p-2">
            <a href="#">
                <li class="p-2 text-sm rounded-lg hover:bg-gray-100">
                    Update Profile
                </li>
            </a>
            <a href="/update-password">
                <li class="p-2 text-sm rounded-lg hover:bg-gray-100">
                    Update Password
                </li>
            </a>
            <li>
                <form action="{{ route('logout') }}" method="POST" class="p-2 text-sm rounded-lg hover:bg-gray-100">
                    @csrf
                    <button type="submit">Sign out</button>
                </form>
            </li>
        </ul>
    </div>
</div>
