<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Ourgoal extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'title','description', 'icon', 'status',
    ];

    public $timestamps = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    
}