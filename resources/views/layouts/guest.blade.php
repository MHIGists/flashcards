<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="icon" type="image/x-icon" href="/favicon.ico" />
        <link rel="canonical" href="{{url()->current()}}" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <meta name="description" content="Discover free flashcards for self-study or teaching kids. Access various flashcard groups for easy learning. Everything is available free of charge!">
        <meta name="keywords" content="flashcards, study, teach, learning, groups, free, progress, organize, prepare, user, subjects, topics, focused, exam, manage, private, multiple, register, welcome, start, improve, stay updated">

        <title>{{ config('app.name', 'Your Flash Cards') }}</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bubblegum-sans-regular text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-black">
            <div>
                <a href="/" wire:navigate>
                    <x-application-logo class="lg:w-80 lg:h-80 w-40 h-40 fill-current text-gray-500" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-indigo-800 shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
