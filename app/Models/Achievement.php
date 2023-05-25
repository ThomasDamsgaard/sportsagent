<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Achievement extends Model
{
    use HasFactory;

    /**
     * All attributes are mass assignable.
     */
    protected $guarded = [];

    /**
     * Get the user that has contributed the testimonial.
     */
    public function user(): BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
