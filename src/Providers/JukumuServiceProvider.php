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
     * Class JukumuServiceProvider
     * @package SamBenne\Jukumu\Providers
     */
    class JukumuServiceProvider extends ServiceProvider
    {

        /**
         * Register the service provider.
         *
         * @return void
         */
        public function register()
        {
            $this->publishes( [
                __DIR__ . '/../config/config.php' => config_path( 'jukumu.php' )
            ], 'config' );

            $this->publishes( [
                __DIR__ . '/../database/migrations/' => database_path( '/migrations' )
            ], 'migrations' );
        }
    }