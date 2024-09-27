<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <link rel="icon" type="image/x-icon" href="/favicon.ico" />
        <link rel="canonical" href="{{url()->current()}}" />
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        @if(url()->current() == route('login'))
            <meta name="description" content="Log in to Your Flash Cards to access and manage your flashcards. Continue creating, organizing, and studying personalized flashcard groups. Secure and easy login to track progress and enhance learning.">
            <meta name="keywords" content="login to flashcards, flashcard account, access flashcards, manage flashcard sets, study tools login, personalized flashcards, educational login, online study tools, login flashcard platform, track learning progress, study groups">
        @else
            <meta name="description" content="Sign up for free at Your Flash Cards! Create personalized flashcards for self-study or teaching. Group your flashcards by subject, track your progress, and access them anywhere. Easy and secure registration.">
            <meta name="keywords" content="register for flashcards, create account flashcards, free sign up, create flashcard sets, online study tools, flashcard platform registration, personalized study tools, track learning progress, flashcard groups, flashcards for teaching, flashcards for kids">
        @endif
        <title>{{ config('app.name', 'Your Flash Cards') }}</title>

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="bubblegum-sans-regular text-textColor antialiased">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-mainBG dark:bg-dMainBG">
            <div>
                <a href="/" wire:navigate>
                    <x-application-logo class="lg:w-80 lg:h-80 w-40 h-40 fill-current text-textColor" />
                </a>
            </div>

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-mainBG dark:bg-dMainBG shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
