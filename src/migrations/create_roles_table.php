<?php
    /**
     * This file is part of Jukumu,
     * A Role and Permission management solution for Laravel.
     *
     * @license MIT
     * @package sbenentt\jukumu
     */
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CreateRolesTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create(Config::get('jukumu.roles'), function(Blueprint $table)
            {
                $table->increments('id');
                $table->string('name');
                $table->string('clean');
                $table->string('description');
                $table->timestamps();
            });
        }

        /**
         * Reverse the migrations.
         *
         * @return void
         */
        public function down()
        {
            Schema::drop(Config::get('jukumu.roles'));
        }

    }
