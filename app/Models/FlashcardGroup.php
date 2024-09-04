<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class FlashcardGroup extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'user_id',
    ];

    /**
     * Get the user that owns the group.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * Get the flashcards for the group.
     */
    public function flashcards()
    {
        return $this->hasMany(Flashcard::class, 'group_id');
    }
}
