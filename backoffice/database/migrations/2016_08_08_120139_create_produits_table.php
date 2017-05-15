<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateProduitsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('produits', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('image');
			$table->text('description');
			$table->float('poids');
			$table->integer('quantite');
			$table->integer('codeabarre');
			$table->integer('prix');
			$table->integer('vendeur_id')->unsigned()->index();
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
		Schema::drop('produits');
	}

}
