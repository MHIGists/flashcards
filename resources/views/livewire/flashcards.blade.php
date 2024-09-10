<div class="container mx-auto py-6">
    <!-- Group Selector -->
    <div class="mb-4">
        <label for="group" class="block text-sm font-medium text-gray-700">Select Group</label>
        <select wire:model.live.debounce="groupId" id="group" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
            <option value="">All Groups</option>
            @if(!empty($groups))
                @foreach($groups as $group)
                    <option value="{{ $group->id }}">{{ $group->name }}</option>
                @endforeach
            @else
                <option value="">You don't have any groups yet</option>
            @endif
        </select>
    </div>

    <!-- Flashcard Navigation -->
    @if($currentFlashcardId)
        <div class="flex justify-between items-center mb-4">
            <button wire:click="previousFlashcard" class="bg-gray-300 text-gray-800 px-4 py-2 rounded">Previous</button>
            <button wire:click="nextFlashcard" class="bg-gray-300 text-gray-800 px-4 py-2 rounded">Next</button>
        </div>

        <!-- Flashcard Display -->
        <div class="mb-4 p-6 border border-gray-300 rounded-lg bg-white relative lg:min-w-96 min-h-96 sm:w-full flex items-center justify-center">
            @php
                $currentFlashcard = array_filter($flashcards, function($flashcard) use ($currentFlashcardId) {
                    return $flashcard['id'] == $currentFlashcardId;
                });
                $currentFlashcard = array_shift($currentFlashcard);
            @endphp

            @if($currentFlashcard)
                <div class="relative w-full h-full flex items-center justify-center">
                    <div class="relative w-full h-full perspective-1000">
                        <div class="transition-all ease-in-out duration-600">
                            <div id="question" class="w-full h-full flex items-center justify-center bg-white text-black cursor-pointer">
                                <div class="text-2xl font-bold text-center">{{ $currentFlashcard['question'] }}</div>
                            </div>
                            <div id="answer" class="w-full h-full flex items-center justify-center bg-gray-100 text-black absolute top-0 left-0 hidden">
                                <div class="text-2xl font-bold text-center">{{ $currentFlashcard['answer'] }}</div>
                            </div>
                        </div>
                    </div>
                </div>

            @else
                <div class="text-center">No flashcard selected</div>
            @endif
        </div>
    @endif
</div>
