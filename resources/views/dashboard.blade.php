<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="container mx-auto py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg mb-6 ">
                <div class="px-4 py-6 sm:px-6 dark:bg-indigo-600">
                    <h1 class="text-2xl font-semibold leading-tight text-gray-600 dark:text-black">
                        Flashcards
                    </h1>
                </div>
                <div class="p-6 bg-white border-b border-gray-200 dark:bg-indigo-600">
                    @livewire('flashcards')
                </div>
            </div>
        </div>
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg p-6 dark:bg-indigo-600">
                <h2 class="text-2xl font-semibold leading-tight text-gray-800 mb-6 dark:text-black">
                    Add New Flashcard
                </h2>
                @livewire('add-flashcard')
            </div>
        </div>
    </div>
</x-app-layout>
