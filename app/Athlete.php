<?php

namespace corriendo;

use Illuminate\Database\Eloquent\Model;

class Athlete extends Model
{

	protected $fillable = ['nombre','apellido','dni','email','direccion','nacimiento','genero','telefono','avatar',];

    public function events() {
    	return $this->belongsToMany(Event::class);
    }
}
