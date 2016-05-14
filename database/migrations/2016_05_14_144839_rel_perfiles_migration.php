<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class RelPerfilesMigration extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('rel_PerfilesUsuario', function(Blueprint $table)
		{
			$table->increments('id');
			$table->integer('iIdPerfil')->unsigned();
			$table->foreign('iIdPerfil')->references('iIdPerfil')->on('tblPerfiles');
			$table->integer('iIdUsuario')->unsigned();
			$table->foreign('iIdUsuario')->references('iIdUsuario')->on('tblUsuarios');
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
		Schema::drop('rel_PerfilesUsuario');
	}

}
