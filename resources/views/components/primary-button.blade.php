<button {{ $attributes->merge(['type' => 'submit', 'class' => 'inline-flex items-center px-4 py-2 bg-primary hover:bg-secondary transition-all dark:bg-primary border border-transparent rounded-md font-semibold text-xs text-white dark:text-gray-800 uppercase tracking-widest  focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150 dark:text-white']) }}>
    {{ $slot }}
</button>
