<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Servicesitem extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'ser_id','item_name','image','image1','image2','image3',
    ];

    public $timestamps = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function upload($name,$file,$oldname)
    {
                $file->move('asset/upload/images/service/',$name);
                if($oldname != null)
                {
                    if (file_exists(public_path().'/asset/upload/images/service/'.$oldname)) {
                        unlink(public_path().'/asset/upload/images/service/'.$oldname);
                    }
                }
    }
}