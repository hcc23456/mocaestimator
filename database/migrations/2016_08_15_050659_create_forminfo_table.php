<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\DB;

class CreateForminfoTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('form_info', function (Blueprint $table) {
            $table->increments('id');

            $table->string('client_name');
            $table->string('car_make');
            $table->string('car_model');
            $table->integer('car_year');
            $table->string('client_email');
            $table->string('client_address');
            $table->string('client_phonenumber');
            $table->text('client_memo');
            $table->binary('client_picture1'); //blob
            $table->binary('client_picture2');
            $table->binary('client_picture3');

            $table->timestamps();
        });

        //alter to mediumblob after table created - DOESNT WORK AND LARAVEL NO SUPPORT FOR THIS -> NEED TO MANUALLY CHANGE COLUMN IN PHPMYADMIN
        //DB::statement('ALTER TABLE form-info MODIFY COLUMN client_picture1 MEDIUMBLOB, MODIFY COLUMN client_picture2 MEDIUMBLOB, MODIFY COLUMN client_picture3 MEDIUMBLOB');
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('form_info');
    }
}
