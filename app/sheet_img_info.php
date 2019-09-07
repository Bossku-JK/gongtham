<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class sheet_img_info extends Model
{
    //
    public function type()
    {
        return $this->hasMany('App\type_of_sheet');
    }
}
