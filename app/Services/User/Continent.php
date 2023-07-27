<?php

namespace App\Services\User;

class Continent
{
    protected array $continents = [
        'af' => 'Africa',
        'as' => 'Asia',
        'eu' => 'Europa',
        'na' => 'North America',
        'oc' => 'Oceania',
        'sa' => 'South America',
    ];

    public function all()
    {
        return $this->continents;
    }
}
