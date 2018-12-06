<?php

namespace corriendo;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    public function organizer()
    {
    	return $this->belongsTo(Organizer::class);
    }

    public function sport()
    {
    	return $this->belongsTo(Sport::class);
    }

    public function athletes() {

    	return $this->belongsToMany(Athlete::class);
    }

}
