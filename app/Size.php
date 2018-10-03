<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Size extends Model
{
	use SoftDeletes;

    protected $fillable = [
    	'height', 'width'
	];

    public function books()
    {
        return $this->hasMany('App\Book');
    }

    public function scopeLastTwo($query){
        return $query->limit(2);
    }

}
