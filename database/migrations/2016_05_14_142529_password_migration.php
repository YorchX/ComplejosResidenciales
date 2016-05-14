<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PasswordMigration extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblPasswords', function(Blueprint $table)
		{
			$table->increments('iIdPassword');
			$table->integer('iIdUsuario')->unsigned();
			$table->foreign('iIdUsuario')->references('iIdUsuario')->on('tblUsuarios');
			$table->boolean('lActual');
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
		Schema::drop('tblPasswords');
	}

}
