<?php

namespace App\Models;

use App\Models\Testimonial;
use App\Scopes\GenderScope;
use Laravel\Cashier\Billable;
use Laravel\Scout\Searchable;
use App\Traits\BelongsToSport;
use Illuminate\Support\Carbon;
use Laravel\Jetstream\HasTeams;
use App\Traits\HasNoPersonalTeam;
use Laravel\Sanctum\HasApiTokens;
use Spatie\MediaLibrary\HasMedia;
use Laravel\Jetstream\HasProfilePhoto;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Builder;
use Spatie\MediaLibrary\InteractsWithMedia;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable implements HasMedia, MustVerifyEmail
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use HasNoPersonalTeam, HasTeams {
        HasNoPersonalTeam::ownsTeam insteadof HasTeams;
        HasNoPersonalTeam::isCurrentTeam insteadof HasTeams;
    }
    use Notifiable;
    use TwoFactorAuthenticatable;
    use BelongsToSport;
    use InteractsWithMedia;
    use Billable;
    use Searchable;

    /**
     * The attributes that are mass assignable.
     *
     * @var string<int, string>
     */

    protected $guarded = [];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'age' => 'datetime',
        'positions' => 'array',
        'trial_ends_at' => 'datetime',
        'verified' => 'boolean',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array<int, string>
     */
    protected $appends = [
        'profile_photo_url',
    ];

    /**
     * The "booted" method of the model.
     */
    protected static function booted(): void
    {
        static::addGlobalScope(new GenderScope);
    }

    /**
     * Get the indexable data array for the model.
     *
     * @return array<string, mixed>
     */
    public function toSearchableArray(): array
    {
        return [
            'name' => $this->name,
            'verified' => '',
        ];
    }

    /**
     * Get the testimonials for the user.
     */
    public function testimonials(): HasMany
    {
        return $this->hasMany(Testimonial::class);
    }

    /**
     * Get the achievement for the user.
     */
    public function achievement(): HasOne
    {
        return $this->hasOne(Achievement::class);
    }

    public function scopeExcludeCurrentUser(Builder $query): void
    {
        $query->where('id', '!=', auth()->user()->id);
    }

    public function scopeOnlyPlayers(Builder $query): void
    {
        $query->where('type', 'player');
    }

    // public function scopeSearch($query, string $terms = null)
    // {
    //     // str_getcsv - ability to do quote searches
    //     collect(str_getcsv($terms, ' ', '"'))->filter()->each(function ($term) use ($query) {
    //         $term = $term . '%';
    //         $query->where('name', 'like', $term);
    //     });
    // }

    public function calculateAge(): int|string
    {
        return $this->age ? Carbon::parse($this->age)->age : 'Not registered';
    }

    public function scopeSearchFilters(Builder $query, string $type): void
    {
        $query
            ->where('type', $type)
            ->when(request('verified'), function ($query) {
                $query->where('verified', true);
            })
            ->when(request('positions'), function ($query) {
                $query->whereIn('positions', array_values(request('positions')))->get();
            })
            ->when(request('age-to'), function ($query) {
                $query->whereBetween(
                    'age',
                    [
                        Carbon::now()->subYears(request('age-to')),
                        Carbon::now()->subYears(request('age-from')) ?: 50,
                    ]
                );
            });
    }
}
