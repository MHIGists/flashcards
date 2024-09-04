<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Flashcard;
use App\Models\FlashcardGroup;

class Flashcards extends Component
{
    public $currentFlashcardId = null;
    public $groupId = null;


    /**
     * @var Flashcard[]
     */
    private array $flashcards;

    public function mount()
    {
        $this->getFlashcards();
        $this->currentFlashcardId = $this->flashcards[0]['id'] ?? null;

    }

    public function render()
    {
        if (!isset($this->flashcards)){
            $this->mount();
        }
        $flashcards = $this->flashcards;
        $groups = FlashcardGroup::where('user_id', auth()->id())->get();
        return view('livewire.flashcards', compact('flashcards', 'groups'));
    }

    public function setGroup($groupId): void
    {
        $this->groupId = $groupId;
        $this->getFlashcards();
        $this->currentFlashcardId = $this->flashcards[0]['id'] ?? null; // Reset current flashcard
    }

    public function editFlashcard($id)
    {
        // Handle edit flashcard functionality
    }

    public function deleteFlashcard($id)
    {
        // Handle delete flashcard functionality
    }

    public function previousFlashcard(): void
    {
        $this->getFlashcards();
        if (!empty($this->flashcards) && $this->currentFlashcardId) {
            $currentKey = $this->getFlashcardKey($this->flashcards);

            if ($currentKey > 0) {
                $this->currentFlashcardId = $this->flashcards[$currentKey - 1]['id'];
            } else {
                $this->currentFlashcardId = $this->flashcards[array_key_last($this->flashcards)]['id'];
            }
        }
    }

    public function nextFlashcard()
    {
        $this->getFlashcards();
        if (!empty($this->flashcards) && $this->currentFlashcardId) {
            $currentKey = $this->getFlashcardKey($this->flashcards);

            if ($currentKey < count($this->flashcards) - 1) {
                $this->currentFlashcardId = $this->flashcards[$currentKey + 1]['id'];
            } else {
                $this->currentFlashcardId = $this->flashcards[0]['id'];
            }
        }
    }

    public function getFlashcards(): void
    {
        $flashcardsQuery = Flashcard::where('user_id', auth()->id());

        // Filter by group if a group is selected
        if ($this->groupId) {
            $flashcardsQuery->where('group_id', $this->groupId);
        }

        // Get all flashcards for the selected group
        $this->flashcards = $flashcardsQuery->get()->toArray();
    }

    public function getFlashcardKey(array $flashcards): int
    {
        // Loop through the flashcards array
        foreach ($flashcards as $key => $flashcard) {
            if ($flashcard['id'] === $this->currentFlashcardId) {
                return $key; // Return the index/key of the matching flashcard
            }
        }

        // Return -1 (or another default value) if not found
        return -1;
    }
}
