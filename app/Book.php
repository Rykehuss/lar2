<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Support\Facades\Auth;

class Book extends Model
{
	use SoftDeletes;

    protected $fillable = [
    	'title', 'author', 'price', 'publisher',
		'pages', 'year', 'size_id', 'hardcover'
	];

    public function size()
    {
        return $this->belongsTo('App\Size');
    }

    public function genres()
    {
        return $this->belongsToMany('App\Genre');
    }

    public static function boot()
    {
        parent::boot();

        static::creating(function ($table) {
            $table->created_by = Auth::user()->id;
        });
    }

    public function scopeOwned($query){
        return $query->where('created_by', Auth::user()->id);
}
}
