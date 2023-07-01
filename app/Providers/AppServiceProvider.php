<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\ServiceProvider;
use Illuminate\Database\LazyLoadingViolationException;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Model::handleLazyLoadingViolationUsing(function (Model $model, string $relation): void {
            if ($model instanceof User) {
                if ($relation === 'currentTeam' || $relation === 'ownedTeams') {
                    return;
                }
            }
            throw new LazyLoadingViolationException($model, $relation);
        });

        Model::shouldBeStrict(!$this->app->isProduction());
    }
}
