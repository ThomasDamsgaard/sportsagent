<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Testimonial extends Model
{
    use HasFactory;

    /**
     * Get the user that has contributed the testimonial.
     */
    public function testimonialWriter(): BelongsTo
    {
        return $this->belongsTo(User::class, 'testimonial_writer_id');
    }
}
