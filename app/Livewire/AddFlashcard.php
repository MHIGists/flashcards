<?php

namespace App\Livewire;

use Livewire\Component;

use App\Models\Flashcard;
use App\Models\FlashcardGroup;

class AddFlashcard extends Component
{
    public $question;
    public $answer;
    public $group_name;
    public $group_id;

    public function render()
    {
        // Fetch groups that belong to the authenticated user
        $groups = FlashcardGroup::where('user_id', auth()->id())->get();

        return view('livewire.add-flashcard', [
            'groups' => $groups,
        ]);
    }

    public function addFlashcard(): void
    {
        // Validate input
        $this->validate([
            'question' => 'required|string|max:255',
            'answer' => 'required|string|max:255',
            'group_name' => 'nullable|string|max:255',
            'group_id' => 'nullable|exists:flashcard_groups,id',
        ]);

        // If a group name is provided and not selected from the list, create a new group
        if ($this->group_name && !$this->group_id) {
            $group = FlashcardGroup::create([
                'name' => $this->group_name,
                'user_id' => auth()->id(),
            ]);
            $this->group_id = $group->id;
        }

        // Create new flashcard
        Flashcard::create([
            'question' => $this->question,
            'answer' => $this->answer,
            'user_id' => auth()->id(),
            'group_id' => $this->group_id,
        ]);

        // Reset fields
        $this->reset(['question', 'answer', 'group_name', 'group_id']);

        // Emit an event or message (optional)
        session()->flash('message', 'Flashcard added successfully!');
    }
}
