<div class="flex justify-between items-center mb-4">
    <button
            class="bg-primary text-white font-semibold py-2 px-4 rounded-lg hover:bg-secondary transition-all dark:bg-primary dark:text-black">
        <Previous></Previous>
    </button>
    <button
            class="bg-primary text-white font-semibold py-2 px-4 rounded-lg hover:bg-secondary transition-all dark:bg-primary dark:text-black">
        Next
    </button>
</div>

<div id="flashcardDemoBox"
     class="w-full h-full mb-4 p-6 border border-gray-300 rounded-lg bg-mainBG relative lg:min-w-96 min-h-96 sm:w-full flex items-center justify-center dark:bg-secondary cursor-pointer">

        <div class="relative w-full h-full flex items-center justify-center">
            <div class="relative w-full h-full perspective-1000">
                <div class="w-full h-full transition-all ease-in-out duration-600">
                    <div id="question"
                         class="w-full h-full flex items-center justify-center bg-mainBG text-black cursor-pointer dark:bg-secondary dark:text-black">
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
</div>
{{--Yield all test flashcards and use JS to go trough elements. This should help with SEO and content. --}}
