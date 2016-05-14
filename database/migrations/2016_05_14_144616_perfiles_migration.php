<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class PerfilesMigration extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblPerfiles', function(Blueprint $table)
		{
			$table->increments('iIdPerfil');
			$table->string('cNombre');
			$table->boolean('lActivo');
			$table->string('cRutaIcono');
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
		Schema::drop('tblPerfil');
	}

}