<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicios extends Model
{
	protected $table="servicios";

    protected $fillable = [
    	'ciudad','municipio','estado','edif','urb','avenidad','num','equipo','modelo','serial','fabricante','vendedor','usuario','plan','uso'
    ];

   
}
