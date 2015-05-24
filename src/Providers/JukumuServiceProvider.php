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
                realpath(__DIR__.'/../migrations') => $this->app->databasePath().'/migrations',
            ]);
        }
    }