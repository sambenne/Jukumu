<?php

/*
* This file is part of Jukumu.
*
* (c) Sam Bennett <sam@cachethq.io>
*
* For the full copyright and license information, please view the LICENSE
* file that was distributed with this source code.
*/

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Schema;

class AddColumnRoleTable extends Migration
{
    public function up()
    {
        Schema::table(Config::get('jukumu.users'), function (Blueprint $table) {
            $table->integer('role_id')
                  ->unsigned()
                  ->nullable()
                  ->default(null)
                  ->after('email');
            $table->foreign('role_id')
                  ->references('id')
                  ->on(Config::get('jukumu.roles_table'))
                  ->onUpdate('cascade')
                  ->onDelete('cascade');
        });
    }

    public function down()
    {
        Schema::table(Config::get('jukumu.users'), function (Blueprint $table) {
            $table->dropForeign(['role_id']);
            $table->dropColumn('role_id');
        });
    }
}
