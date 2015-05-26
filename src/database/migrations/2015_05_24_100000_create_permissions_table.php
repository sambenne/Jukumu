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

    class CreatePermissionsTable extends Migration {

        /**
         * Run the migrations.
         *
         * @return void
         */
        public function up()
        {
            Schema::create(Config::get('jukumu.permissions_table'), function(Blueprint $table)
            {
                $table->increments('id');
                $table->string('name');
                $table->string('group')->nullable()->default(NULL);
                $table->string('display_name')->nullable()->default(NULL);
                $table->string('description')->nullable()->default(NULL);
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
            Schema::drop(Config::get('jukumu.permissions_table'));
        }

    }
