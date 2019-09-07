<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class type_of_sheet extends Model
{
    //
    public function img()
    {
        return $this->belongsTo('App\sheet_img_info');
    }
}
