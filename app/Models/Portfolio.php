<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Portfolio extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'name','description','slug','link','technology','image','full_image',
    ];

    public $timestamps = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function upload($name,$file,$oldname)
    {
                $file->move('asset/upload/portfolio/',$name);
                if($oldname != null)
                {
                    if (file_exists(public_path().'/asset/upload/portfolio/'.$oldname)) {
                        unlink(public_path().'/asset/upload/portfolio/'.$oldname);
                    }
                }
    }
}