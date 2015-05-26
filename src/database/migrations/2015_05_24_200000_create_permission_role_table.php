<?php
    /*
    * This file is part of Jukumu.
    *
    * (c) Sam Bennett <bennettsst@gmail.com>
    *
    * For the full copyright and license information, please view the LICENSE
    * file that was distributed with this source code.
    */
    use Illuminate\Database\Schema\Blueprint;
    use Illuminate\Database\Migrations\Migration;

    class CreatePermissionRoleTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create(Config::get('jukumu.role_permissions_table'), function(Blueprint $table)
            {
                $table->increments('id');
                $table->integer('role_id');
                $table->integer('permission_id');
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
            Schema::drop(Config::get('jukumu.role_permissions_table'));
        }

    }
