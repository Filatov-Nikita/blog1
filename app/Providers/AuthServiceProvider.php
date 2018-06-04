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
        'App\Models\Article' => 'App\Policies\PostPolicy',
        'App\Models\Project' => 'App\Policies\ProjectPolicy'
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
        	 return $this->getRoles($user, 'creator_articles');
        });
        Gate::define('post_edit', function ($user) {
			return $this->getRoles($user, 'editor_articles');
        });
        Gate::define('post_delete', function ($user) {
			return $this->getRoles($user, 'deletor_articles');
        });
        Gate::define('project_create', function ($user) {
			return $this->getRoles($user, 'creator_projects');
        });
        Gate::define('project_edit', function ($user) {
            return $this->getRoles($user, 'editor_projects');
        });
        Gate::define('project_delete', function ($user) {
            return $this->getRoles($user, 'deletor_projects');
        });
        Gate::define('user_role_change', function ($user) {
            return $this->getRoles($user, 'user_admin');
		});
		Gate::define('tag_admin', function ($user) {
            return $this->getRoles($user, 'tag_admin');
        });
	}

	public function getRoles($user, $roleName) {
		$prive = $user->role->prives->where('name', $roleName)->first();

		if ($prive){
			return true;
		}
		return false;
	}
}
