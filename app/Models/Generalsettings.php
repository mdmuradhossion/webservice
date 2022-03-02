<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Generalsettings extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    
    protected $fillable = [
        'logo','slider_1','title','text','icon','icon_title','slider_2','title2','text2','icon2','icon_title2','slider_3','title3','text3','icon3','icon_title3','slider_4','title4','text4','icon4','icon_title4','sitetitle','metatitel','metadescription','metakeywords','metaauthor','favicon',
    ];

    public $timestamps = false;

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    public function upload($name,$file,$oldname)
    {
                $file->move('asset/upload/images/',$name);
                if($oldname != null)
                {
                    if (file_exists(public_path().'/asset/upload/images/'.$oldname)) {
                        unlink(public_path().'/asset/upload/images/'.$oldname);
                    }
                }
    }
}
