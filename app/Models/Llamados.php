<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Llamados extends Model
{
	protected $table="llamados";

    protected $fillable = [
    	'cliente','respuesta','factible','usuario','estatus','respuesta2'
    ];

   
}
