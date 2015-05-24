<?php
    /**
     * This file is part of Jukumu,
     * A Role and Permission management solution for Laravel.
     *
     * @license MIT
     * @package sbenentt\jukumu
     */
    namespace SamBenne\Jukumu\Providers;

    use Illuminate\Support\ServiceProvider;


    class JukumuServiceProvider extends ServiceProvider
    {

        /**
         * Register the service provider.
         *
         * @return void
         */
        public function register()
        {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('jukumu.php')
            ], 'config');

            $this->publishes([
                __DIR__.'/../database/migrations/' => database_path('/migrations')
            ], 'migrations');

            $this->publishes([
                __DIR__.'/../models/' => database_path(Config::get('jukumu.models'))
            ], 'models');
        }
    }