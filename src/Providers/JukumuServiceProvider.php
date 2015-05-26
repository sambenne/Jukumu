<?php

/*
* This file is part of Jukumu.
*
* (c) Sam Bennett <bennettsst@gmail.com>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

namespace SamBenne\Jukumu\Providers;

use Illuminate\Support\ServiceProvider;

/**
 * Class JukumuServiceProvider.
 */
class JukumuServiceProvider extends ServiceProvider
{
    /**
     * Boot the service provider.
     *
     * @return void
     */
    public function boot()
    {
        //
    }

<<<<<<< HEAD
        /**
         * Boot the service provider.
         *
         * @return void
         */
        public function boot()
        {
            //
        }

        /**
         * Register the service provider.
         *
         * @return void
         */
        public function register()
        {
            $source = realpath(__DIR__.'/../config/jukumu.php');

            $this->publishes([$source => config_path('jukumu.php')]);
            $this->mergeConfigFrom($source, 'jukumu');
=======
    /**
     * Register the service provider.
     *
     * @return void
     */
    public function register()
    {
        $this->publishes([
            __DIR__.'/../config/config.php' => config_path('jukumu.php'),
        ], 'config');
>>>>>>> Fixes CS against StyleCI

        $this->publishes([
            __DIR__.'/../database/migrations/' => database_path('/migrations'),
        ], 'migrations');
    }
}
