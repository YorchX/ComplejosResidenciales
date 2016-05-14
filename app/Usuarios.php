<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Usuarios extends Model {
    //tblPasswords
    protected $table = 'tblUsuarios';

    protected $primaryKey = 'iIdUsuarios';

    protected $fillable = array('iIdUsuarios, cNombre, cApellidoP, cApellidoM, dtFechaNacimiento, cTelefono, cCorreo, cCurp, bFoto');

    public function Usuarios(){
        $this->hasMany('Passwords');
    }
}
