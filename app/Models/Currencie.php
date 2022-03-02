<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Currencie extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'title','code','symbol_left','symbol_right','status',
    ];

    public $timestamps = false;
}