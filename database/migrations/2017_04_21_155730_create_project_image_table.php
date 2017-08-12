<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectImageTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		Schema::create('projects_images', function (Blueprint $table) {
            $table->increments('id');
            $table->timestamps();
			$table->integer('project_id');
			$table->integer('image_id')->unsigned();
			
			$table->foreign('image_id')->references('id')->on('images');// ->onDelete('cascade')...
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects_images');
    }
}