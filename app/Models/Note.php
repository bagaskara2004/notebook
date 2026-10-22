<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Attributes\Fillable;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

#[Fillable(['title', 'message', 'is_pin', 'user_id'])]
class Note extends Model
{
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
