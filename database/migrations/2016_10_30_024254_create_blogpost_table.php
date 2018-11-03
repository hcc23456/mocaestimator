<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateBlogpostTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        Schema::create('blog_post', function (Blueprint $table) {
            $table->increments('post_id');

            $table->string('title');
            $table->text('text_body1'); //text not string(varchar)
            $table->text('text_body2');
            $table->text('text_body3');
            $table->text('text_body4');
            $table->text('text_body5');
            $table->text('text_body6');
            $table->text('text_body7');
            $table->text('text_body8');
            $table->text('text_body9');
            $table->text('text_body10');
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

            $table->integer('user_id')->unsigned(); //create column BEFORE added FK
            $table->foreign('user_id')->references('id')->on('users'); //foreign key

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
        //
        Schema::table('blog_post', function($table){
            $table->dropForeign(['user_id']);
        });
        Schema::drop('blog_post');
    }
}
