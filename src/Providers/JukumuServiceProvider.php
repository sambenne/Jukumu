<?php
    /**
     * This file is part of Jukumu,
     * A Role and Permission management solution for Laravel.
     *
     * @license MIT
     * @package sbenentt\jukumu
     */
    namespace Jukumu\Providers;

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
            echo "<pre>" . print_r(__DIR__, true) . "</pre>\n";
//            $this->publishes([
//                realpath(__DIR__.'/path/to/migrations') => $this->app->databasePath().'/migrations',
//            ]);
        }
    }