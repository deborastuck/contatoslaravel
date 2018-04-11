<?php

namespace Agenda\Providers;

use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->bind(\Agenda\Http\Requests\IValidarRequest::class, \Agenda\Http\Requests\ContatoValidarRequest::class);
    }
}
