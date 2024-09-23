<div class="container mx-auto py-6">
    <!-- Group Selector -->
    <div class="mb-4">
        <label for="group" class="block text-sm font-medium text-gray-700 dark:text-black">Select Group</label>
        <select wire:model.live.debounce="groupId" id="group"
                class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-black dark:text-white">
            <option value="">All Groups</option>
            @if(!empty($groups))
                @foreach($groups as $group)
                    <option value="{{ $group->id }}">{{ $group->name }}</option>
                @endforeach
            @endif
        </select>
    </div>

    <!-- Flashcard Navigation -->
    @if($currentFlashcardId)
        <div class="flex justify-between items-center mb-4">
            <button wire:click="previousFlashcard"
                    class="bg-indigo-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-indigo-600 transition-all dark:bg-indigo-500 dark:text-black">
                Previous
            </button>
            <button wire:click="nextFlashcard"
                    class="bg-indigo-500 text-white font-semibold py-2 px-4 rounded-lg hover:bg-indigo-600 transition-all dark:bg-indigo-500 dark:text-black">
                Next
            </button>
        </div>

        <!-- Flashcard Display -->
        <div id="flashcardBox"
             class="w-full h-full mb-4 p-6 border border-gray-300 rounded-lg bg-white relative lg:min-w-96 min-h-96 sm:w-full flex items-center justify-center dark:bg-indigo-600 cursor-pointer">
            @php
                $currentFlashcard = array_filter($flashcards, function($flashcard) use ($currentFlashcardId) {
                    return $flashcard['id'] == $currentFlashcardId;
                });
                $currentFlashcard = array_shift($currentFlashcard);
            @endphp
            @if($currentFlashcard)
                <div class="relative w-full h-full flex items-center justify-center">
                    <div class="relative w-full h-full perspective-1000">
                        <div class="w-full h-full transition-all ease-in-out duration-600">
                            <div id="question"
                                 class="w-full h-full flex items-center justify-center bg-white text-black cursor-pointer dark:bg-indigo-600 dark:text-black">
                                <div
                                    class="w-full h-full text-2xl text-center break-words select-none">{{ $currentFlashcard['question'] }}</div>
                            </div>
                            <div id="answer"
                                 class="w-full h-full flex items-center justify-center bg-gray-100 text-black absolute top-0 left-0 dark:bg-indigo-800 dark:text-black hidden">
                                <div
                                    class="w-full h-full text-2xl text-center break-words select-none">{{ $currentFlashcard['answer'] }}</div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
        </div>
        <script>window.flashcardEvent()</script>
    @else
        <div class="text-center">No flashcards or group selected!</div>
    @endif
</div>
