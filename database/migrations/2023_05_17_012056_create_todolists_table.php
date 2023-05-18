<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('todolists', function (Blueprint $table) {
            $table->id();

            $table->string('title', 255); //'name' > 'title' of column title, use colstring and tab, but erase nullable part?

            $table->text('description'); //coltext

            $table->integer('status')->unsigned()->default(1);//colint

            $table->bigInteger('user_id')->unsigned();//table relationship, 'user_id' be foreign id

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');//colforeign, needed for foreign key?


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
        Schema::dropIfExists('todolists');
    }
};
