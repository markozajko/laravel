<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateArticleTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('articles', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('title');
			$table->string('category');
			$table->text('imageUrl');
			$table->timestamps();
		});

		// vnos za testiranje
	    DB::table('articles')->insert(
	        array(
	            'title' 	=> 'testni naslov',
	            'category' 	=> 'testna kategorija',
	            'imageUrl' 	=> 'http://cdn.kme.si/public/images-cache/237x237/2015/04/02/0fffa557ae372ae705877cb61467d3dd/551d283ac34ac/0fffa557ae372ae705877cb61467d3dd.jpeg'
	        )
	    );

	}

	/**
	 * Reverse the migrations.
	 *
	 * @return void
	 */
	public function down()
	{
		Schema::drop('articles');
	}

}
