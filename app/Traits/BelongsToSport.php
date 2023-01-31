<?php

namespace App\Traits;

use App\Scopes\SportScope;

trait BelongsToSport
{
    /**
     * The "booted" method of the model.
     *
     * @return void
     */
    protected static function bootBelongsToSport()
    {
        static::addGlobalScope(new SportScope);
    }
}
