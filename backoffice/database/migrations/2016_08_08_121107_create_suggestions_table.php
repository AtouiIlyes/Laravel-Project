<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateSuggestionsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('suggestions', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('libelle',200);
			$table->integer('vendeur_id')->unsigned()->index();
			$table->enum('etat', ['consultee', 'nonconsultee', 'refu']);
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
		Schema::drop('suggestions');
	}

}
