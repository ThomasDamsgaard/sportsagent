<?php

namespace App\Services\User;

use Livewire\Wireable;

class Continent implements Wireable
{
    protected array $continents = [
        'af' => 'Africa',
        'as' => 'Asia',
        'eu' => 'Europe',
        'na' => 'North America',
        'oc' => 'Oceania',
        'sa' => 'South America',
    ];

    public function all()
    {
        return $this->continents;
    }

    public function toLivewire()
    {
        return [
            'continents' => $this->continents,
        ];
    }

    public static function fromLivewire($value)
    {
        $continents = $value['continents'];

        return new static($continents);
    }
}
