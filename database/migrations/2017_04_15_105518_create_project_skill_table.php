<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProjectSkillTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects_skills', function (Blueprint $table) {

            $table->increments('id');
            $table->timestamps();
			$table->integer('project_id');
			$table->integer('skill_id')->lenght(10)->unsigned();
				$table->foreign('skill_id')->references('id')->on('skills');
		
        });
	
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects_skills');
    }
}
