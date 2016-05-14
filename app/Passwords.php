<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Passwords extends Model {

	//tblPasswords
    protected $table = 'tblPasswords';

    protected $primaryKey = 'iIdPassword';

    protected $fillable = array('iIdPassword, iIdUsuario, lActual');

    public function Usuarios(){
        $this->belongsTo('Usuarios');
    }
}
