<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\RouteServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Route;

class RouteServiceProvider extends ServiceProvider
{
    /**
     * This namespace is applied to your controller routes.
     *
     * In addition, it is set as the URL generator's root namespace.
     *
     * @var string
     */
    protected $namespace = 'App\Http\Controllers';

    /**
     * Define your route model bindings, pattern filters, etc.
     *
     * @return void
     */
    public function boot()
    {
        //

        parent::boot();
    }

    /**
     * Define the routes for the application.
     *
     * @return void
     */
    public function map()
    {
        // Api
        $this->mapApiRoutes();

        // Landing page
        $this->mapWebRoutes();

        // Admin
        $this->mapWebAdminRoutes();

        // Test api on local computer
        $this->mapApiTestRoutes();

        // Test admin on local computer
        $this->mapWebAdminTestRoutes();

        $this->mapWebTestRoutes();
    }


    protected function mapWebRoutes()
    {
        Route::domain(env('DOMAIN_WEB'))
            ->middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }

    protected function mapWebAdminRoutes()
    {
        Route::domain(env('DOMAIN_ADMIN'))
            ->middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/admin.php'));
    }

    /**
     * Define the "api" routes for the application.
     *
     * These routes are typically stateless.
     *
     * @return void
     */
    protected function mapApiRoutes()
    {
        Route::domain(env('DOMAIN_API'))
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }

    protected function mapApiTestRoutes()
    {
        Route::prefix('api')
            ->middleware('api')
            ->namespace($this->namespace)
            ->group(base_path('routes/api.php'));
    }

    protected function mapWebAdminTestRoutes()
    {
        Route::prefix('admin')
            ->middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/admin.php'));
    }

    protected function mapWebTestRoutes()
    {
        Route::prefix("/")
            ->middleware('web')
            ->namespace($this->namespace)
            ->group(base_path('routes/web.php'));
    }
}