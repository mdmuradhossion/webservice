<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Chooseu extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'title', 'subtitle', 'description', 'title1', 'title1des', 'icon1', 'title2', 'title2des', 'icon2', 'title3', 'title3des', 'icon3', 'image',
    ];

    public $timestamps = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function upload($name,$file,$oldname)
    {
                $file->move('asset/upload/choose/',$name);
                if($oldname != null)
                {
                    if (file_exists(public_path().'/asset/upload/choose/'.$oldname)) {
                        unlink(public_path().'/asset/upload/choose/'.$oldname);
                    }
                }
    }
}