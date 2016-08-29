<?php
namespace Unrulynatives\Attitudes;
// namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class AttitudesServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->loadViewsFrom(__DIR__.'/views', 'attitudetimezones');


        $this->publishes([
            __DIR__.'/views' => base_path('resources/views/vendor/unrulynatives/attitudes'),
        ]);

    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        include __DIR__.'/routes.php';
        $this->app->make('Unrulynatives\Attitudes\AttitudesController');
    }
}
