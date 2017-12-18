<?php

namespace App\Providers;

use function foo\func;
use Illuminate\Support\Facades\Gate;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;


class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        'App\Models\Article' => 'App\Policies\PostPolicy'
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('post_create', function ($user) {
            $prive = $user->role->prives->where('name', 'creator_articles')->first();

            if ($prive){
                return true;
            }
            return false;
        });
        Gate::define('post_edit', function ($user) {
            $prive = $user->role->prives->where('name', 'editor_articles')->first();

            if ($prive){
                return true;
            }
            return false;
        });
    }
}
