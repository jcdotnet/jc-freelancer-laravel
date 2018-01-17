<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostCategoryTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
		/* Scheme generated automatically as of Laravel 5.5. In previous versions
		 * I had to implement it and I used the plural convention for the pivot
		 * table (it would be here posts_categories). I could have changed it for
		 * consistency but I have decided to leave it "as is" (post_category)  
		 */
        Schema::create('post_category', function (Blueprint $table) {
            $table->increments('id');
			$table->integer('post_id');
			$table->integer('category_id');
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
        Schema::dropIfExists('post_category');
    }
}
