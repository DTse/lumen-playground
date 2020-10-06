<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pages extends Model
{

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table = 'pages';

    public function scopeGetPages($query){
        return $query->get();
    }
    public function scopeGetPage($query,$slug){
        return $query->where('slug',$slug)->get();
    }
}
