<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateMessagesTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('messages', function(Blueprint $table)
		{
			$table->increments('id');
			$table->string('email_recpter');
			$table->string('nom_recpter');
			$table->string('prenom_recpter');
			$table->string('email_sender');
			$table->string('nom_sender');
			$table->string('prenom_sender');
			$table->string('objet');
			$table->text('message');
			$table->enum('type', ['recu', 'env', 'brou']);
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
		Schema::drop('messages');
	}

}
