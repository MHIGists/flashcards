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
    <body class="bubblegum-sans-regular antialiased">
        <div class="min-h-screen bg-gray-100 dark:bg-black">
            <livewire:layout.navigation />

            <!-- Page Heading -->
            @if (isset($header))
                <header class="bg-white dark:bg-black shadow">
                    <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                        {{ $header }}
                    </div>
                </header>
            @endif

            <!-- Page Content -->
            <main>
                {{ $slot }}
            </main>
        </div>
    </body>
</html>
