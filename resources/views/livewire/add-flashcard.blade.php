<div class="bg-white p-6 rounded-lg shadow-md dark:bg-indigo-600">
    <form wire:submit.prevent="addFlashcard">
        <!-- Question Input -->
        <div class="mb-4">
            <label for="question" class="block text-sm font-medium text-gray-700 dark:text-white">Question</label>
            <input type="text" wire:model="question" id="question" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-indigo-800 dark:placeholder-white" placeholder="Enter the question">
            @error('question') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Answer Input -->
        <div class="mb-4">
            <label for="answer" class="block text-sm font-medium text-gray-700 dark:text-white">Answer</label>
            <input type="text" wire:model="answer" id="answer" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-indigo-800 dark:placeholder-white" placeholder="Enter the answer">
            @error('answer') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Group Selection/Input -->
        <div class="mb-4">
            <label for="group_name" class="block text-sm font-medium text-gray-700 dark:text-white">Group</label>
            <input type="text" wire:model="group_name" id="group_name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm dark:bg-indigo-800 dark:placeholder-white" placeholder="Enter a new group name or select an existing one">

            <div class="mt-2">
                @if(!empty($groups))
                    <label for="group_id" class="block text-sm font-medium text-gray-700 dark:text-white">Or select from existing groups:</label>
                    <select wire:model="group_id" id="group_id" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm  dark:bg-indigo-800 dark:text-white">
                        <option value="">No Group</option>
                        @foreach($groups as $group)
                            <option value="{{ $group->id }}">{{ $group->name }}</option>
                        @endforeach
                    </select>
                @endif
            </div>
            @error('group_name') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
            @error('group_id') <span class="text-red-600 text-sm">{{ $message }}</span> @enderror
        </div>

        <!-- Submit Button -->
        <div class="flex items-center justify-end">
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Add Flashcard</button>
        </div>
    </form>

    <!-- Flash Message -->
    @if (session()->has('message'))
        <div class="mt-4 p-4 bg-green-100 text-green-800 rounded">
            {{ session('message') }}
        </div>
    @endif
</div>
