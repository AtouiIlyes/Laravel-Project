<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateVendeursTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('vendeurs', function(Blueprint $table)
		{
			$table->increments('id');
			$table ->string('nom');
			$table ->string('prenom');
			$table ->string('passwd');
			$table ->string('email')->unique();
			$table ->date('date_de_naissance');
			$table ->text('description');
			$table ->string('telephone');
			$table ->text('adresse');
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
		Schema::drop('vendeurs');
	}

}
