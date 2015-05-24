<?php

    use Illuminate\Database\Migrations\Migration;
    use Illuminate\Database\Schema\Blueprint;

    class addColumnFestivalTable extends Migration {

        public function up()
        {
            Schema::table(Config::get('jukumu.users'), function($table)
            {
                $table->integer('role_id')->unsigned();
                $table->foreign('role_id')->references('id')->on(Config::get('jukumu.roles_table'))
                    ->onUpdate('cascade')->onDelete('cascade');
            });

        }

        public function down()
        {
            Schema::table(Config::get('jukumu.users'), function($table)
            {
                $table->dropColumn('role_id');
            });
        }

    }