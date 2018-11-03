<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBodyshopTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //main table
        Schema::create('bodyshop_main', function (Blueprint $table) {
            $table->increments('bodyshop_id');

            $table->string('name'); //string(varchar)
            $table->string('url');
            $table->string('email');
            $table->string('phone_number');
            $table->text('address'); //text not string(varchar)
            $table->binary('rep_pic'); //blob
            $table->string('rep_name');
            $table->string('rep_title');
            $table->text('about_us');

            $table->timestamps();
        });

        //bodyshop pics table
        Schema::create('bodyshop_pics', function (Blueprint $table) {
            $table->increments('pic_id');

            $table->binary('pic1'); //blob
            $table->binary('pic2');
            $table->binary('pic3');
            $table->binary('pic4');
            $table->binary('pic5');
            $table->binary('pic6');
            $table->binary('pic7');
            $table->binary('pic8');
            $table->binary('pic9');
            $table->binary('pic10');

            $table->integer('bodyshop_id')->unsigned(); //create column BEFORE added FK
            $table->foreign('bodyshop_id')->references('bodyshop_id')->on('bodyshop_main'); //foreign key

            $table->timestamps();
        });

        //bodyshop hours table
        Schema::create('bodyshop_hours', function (Blueprint $table) {
            $table->increments('hours_id');

            $table->string('mon-fri'); //text not string(varchar)
            $table->string('sat');
            $table->string('sun');

            $table->integer('bodyshop_id')->unsigned(); //create column BEFORE added FK
            $table->foreign('bodyshop_id')->references('bodyshop_id')->on('bodyshop_main'); //foreign key

            $table->timestamps();
        });

        //bodyshop speciality table
        Schema::create('bodyshop_speciality', function (Blueprint $table) {
            $table->increments('speciality_id');

            $table->string('spec1'); //text not string(varchar)
            $table->string('spec2');
            $table->string('spec3');
            $table->string('spec4');
            $table->string('spec5');
            $table->string('spec6');
            $table->string('spec7');
            $table->string('spec8');
            $table->string('spec9');
            $table->string('spec10');

            $table->integer('bodyshop_id')->unsigned(); //create column BEFORE added FK
            $table->foreign('bodyshop_id')->references('bodyshop_id')->on('bodyshop_main'); //foreign key

            $table->timestamps();
        });

        //bodyshop otherinfo table
        Schema::create('bodyshop_otherinfo', function (Blueprint $table) {
            $table->increments('otherinfo_id');

            $table->string('otherinfo1'); //text not string(varchar)
            $table->string('otherinfo2');
            $table->string('otherinfo3');
            $table->string('otherinfo4');
            $table->string('otherinfo5');
            $table->string('otherinfo6');
            $table->string('otherinfo7');
            $table->string('otherinfo8');
            $table->string('otherinfo9');
            $table->string('otherinfo10');

            $table->integer('bodyshop_id')->unsigned(); //create column BEFORE added FK
            $table->foreign('bodyshop_id')->references('bodyshop_id')->on('bodyshop_main'); //foreign key

            $table->timestamps();
        });

        //bodyshop examples table
        Schema::create('bodyshop_examples', function (Blueprint $table) {
            $table->increments('examples_id');

            $table->binary('pic1'); //blob
            $table->string('repairname1'); //text not string(varchar)
            $table->string('hashtag1');
            $table->string('hashtag2');
            $table->string('hashtag3');
            $table->float('amount1');

            $table->binary('pic2');
            $table->string('repairname2');
            $table->string('hashtag4');
            $table->string('hashtag5');
            $table->string('hashtag6');
            $table->float('amount2');

            $table->integer('bodyshop_id')->unsigned(); //create column BEFORE added FK
            $table->foreign('bodyshop_id')->references('bodyshop_id')->on('bodyshop_main'); //foreign key

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
        //bodyshop pics table
        Schema::drop('bodyshop_pics');

        //bodyshop hours table
        Schema::drop('bodyshop_hours');

        //bodyshop speciality table
        Schema::drop('bodyshop_speciality');

        //bodyshop otherinfo table
        Schema::drop('bodyshop_otherinfo');

        //bodyshop examples table
        Schema::drop('bodyshop_examples');

        //main table - drop last because of FKs
        Schema::drop('bodyshop_main');
    }
}
