import defaultTheme from 'tailwindcss/defaultTheme';
import forms from '@tailwindcss/forms';

/** @type {import('tailwindcss').Config} */
export default {
    darkMode: 'selector',
    content: [
        './vendor/laravel/framework/src/Illuminate/Pagination/resources/views/*.blade.php',
        './storage/framework/views/*.php',
        './resources/views/**/*.blade.php',
    ],

    theme: {
        extend: {
            fontFamily: {
                sans: ['Figtree', ...defaultTheme.fontFamily.sans],
            },
            colors: {
                'primary': '#4f46e5',
                'secondary': '#6366f1',
                'mainBG': '#f9fafb',
                'accent': '#333',
                'textColor': '#4b5563',
                'accentTextColor': '#6366f1',
                'dPrimary': '#a78bfa',
                'dSecondary': '#727',
                'dMainBG': '#111',
                'dAccent': '#333',
                'dTextColor': '#4b5563',
                'dAccentTextColor': '#6366f1',
            },
        }
    },
    plugins: [forms],
};
