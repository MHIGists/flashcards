<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Flashcard extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'question',
        'answer',
        'user_id',
        'group_id'
    ];

    /**
     * Get the user that owns the flashcard.
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    /**
     * Get the group that owns the flashcard.
     */
    public function group()
    {
        return $this->belongsTo(FlashcardGroup::class, 'group_id');
    }
}
