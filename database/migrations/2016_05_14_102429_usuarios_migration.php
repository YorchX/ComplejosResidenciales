<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class UsuariosMigration extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
		Schema::create('tblUsuarios', function(Blueprint $table)
		{
			$table->increments('iIdUsuario');
			$table->string('cNombre');
			$table->string('cApellidoP');
			$table->string('cApellidoM');
			$table->date('dtFechaNacimiento');
			$table->string('cTelefono');
			$table->string('cCorreo');
			$table->string('cCurp');
			$table->binary('bFoto');
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
		Schema::drop('tblUsuarios');
	}

}
