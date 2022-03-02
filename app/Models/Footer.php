<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Footer extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'address','email','phone','description','twitter','is_twitter','facebook','is_facebook','linkedin','is_linkedin','pinterest','is_pinterest',
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