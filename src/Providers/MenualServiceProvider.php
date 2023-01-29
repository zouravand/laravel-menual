<?php

namespace Tedon\LaravelMenual\Providers;

use Illuminate\Foundation\Console\AboutCommand;
use Illuminate\Support\ServiceProvider;

class MenualServiceProvider extends ServiceProvider
{
    public function boot()
    {
        $this->loadRoutesFrom(__DIR__.'/../routes/api.php');
        $this->loadMigrationsFrom(__DIR__.'/../database/migrations');
        $this->loadTranslationsFrom(__DIR__.'/../lang', 'laravel-menual');


        $this->publishes([
            __DIR__.'/../../resources/config/laravel-menual.php' => config_path('laravel-menual.php')
        ], 'menual-config');

        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('migrations')
        ], 'menual-migrations');

        $this->publishes([
            __DIR__.'/../lang' => $this->app->langPath('vendor/tedon')
        ], 'menual-lang');

        AboutCommand::add('My Package', fn () => ['Version' => '1.0.0']);
    }

}