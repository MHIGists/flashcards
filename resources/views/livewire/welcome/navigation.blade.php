<nav class="-mx-3 flex flex-1 justify-end mb-6 sm:mb-4">
    @auth
        <a
            href="{{ url('/dashboard') }}"
            class="bg-indigo-500 text-white font-semibold py-1 px-2 rounded-lg hover:bg-indigo-600 transition-all mr-2 mt-4 dark:bg-indigo-500"
        >
            Dashboard
        </a>
    @else
        <a
            href="{{ route('login') }}"
            class="bg-indigo-500 text-white font-semibold py-1 px-2 rounded-lg hover:bg-indigo-600 transition-all mr-2 mt-4 dark:bg-indigo-500"
        >
            Log in
        </a>

        @if (Route::has('register'))
            <a
                href="{{ route('register') }}"
                class="bg-indigo-500 text-white font-semibold py-1 px-2 rounded-lg hover:bg-indigo-600 transition-all mr-2 mt-4 dark:bg-indigo-500"
            >
                Register
            </a>
        @endif
    @endauth
</nav>
