<?php

namespace App\Providers;

use Illuminate\Support\Facades\Route;
use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;

class RouteServiceProvider extends ServiceProvider {

    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';
    protected $namespaceAdmin = 'App\Http\Controllers\Admin';
    protected $namespaceApi = 'App\Http\Controllers\api';
    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot() {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map() {
        $this->mapApiRoutes();
        $this->mapAdminRoutes();
        $this->mapWebRoutes();
        $this->mapAuthRoutes();
        //
    }

    /**
     * Define the "web" routes for the application.
     *
     * These routes all receive session state, CSRF protection, etc.
     *
     * @return void
     */
    protected function mapWebRoutes() {
        Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/web.php'));
    }

    protected function mapAdminRoutes() {
        Route::middleware(['web', 'auth'])->prefix('/admin')
            ->namespace($this->namespaceAdmin)
            ->group(base_path('routes/admin.php'));
    }

    protected function mapAuthRoutes() {
        Route::middleware('web')
                ->namespace($this->namespace)
                ->group(base_path('routes/auth.php'));
    }
    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes() {
        Route::
                middleware('api')
                ->namespace($this->namespaceApi)
                ->group(base_path('routes/api.php'));
    }

}
