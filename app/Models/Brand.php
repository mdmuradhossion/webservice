<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Brand extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'name','image',
    ];

    public $timestamps = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function upload($name,$file,$oldname)
    {
                $file->move('asset/upload/brand/',$name);
                if($oldname != null)
                {
                    if (file_exists(public_path().'/asset/upload/brand/'.$oldname)) {
                        unlink(public_path().'/asset/upload/brand/'.$oldname);
                    }
                }
    }
}