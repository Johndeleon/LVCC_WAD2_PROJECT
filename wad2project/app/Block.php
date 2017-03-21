<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Block extends Model
{
	        public function Block()
	{
		return $this->belongsTo('App\type');
	}

	    protected $fillable = [
        'type_id', 'block_name', 'transparency','luminance','blast_resistance','renewable',
        'stackable','flammable','drops','description'
    ];
}
