<nav class="-mx-3 flex flex-1 justify-end mb-6 sm:mb-4">
    @auth
        <a
            href="{{ url('/dashboard') }}"
            class="bg-primary text-white font-semibold py-1 px-2 rounded-lg hover:bg-secondary transition-all mr-2 mt-4 dark:bg-primary"
        >
            Dashboard
        </a>
    @else
        <a
            href="{{ route('login') }}"
            class="bg-primary text-white font-semibold py-1 px-2 rounded-lg hover:bg-secondary transition-all mr-2 mt-4 dark:bg-primary"
        >
            Log in
        </a>

        @if (Route::has('register'))
            <a
                href="{{ route('register') }}"
                class="bg-primary text-white font-semibold py-1 px-2 rounded-lg hover:bg-secondary transition-all mr-2 mt-4 dark:bg-primary"
            >
                Register
            </a>
        @endif
    @endauth
</nav>
