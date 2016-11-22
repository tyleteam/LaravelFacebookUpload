<?php namespace tyleteam\LaravelFacebookUpload;

use Illuminate\Support\ServiceProvider;
use Illuminate\Foundation\AliasLoader;
use Illuminate\Support\Facades\App;

class LaravelFacebookUploadServiceProvider extends ServiceProvider
{
    /**
     * Indicates if loading of the provider is deferred.
     *
     * @var bool
     */
    protected $defer = false;

    /**
     * Bootstrap the application events.
     *
     * @return void
     */
    public function boot()
    {
    }

    /**
     * Register the service providers.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('tyleteam\LaravelFacebookUpload\LaravelFacebookUpload', function ($app) {
                return new LaravelFacebookUpload;
            }
        );
    }
}
