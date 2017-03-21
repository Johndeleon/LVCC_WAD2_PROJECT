<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Type extends Model
{
        public function Type()
    	{
    		return $this->hasMany('App\block');	
    	}
}
