<?php

namespace App\Http\Controllers;
use App\snr;
use DB;
use Illuminate\Http\Request;

class SnrController extends Controller
{
    //
    public function getAll(){
        // $alldata = snr::where('is_active', 1)->get();
        $alldata = DB::table('snr')
                
                ->join('nikay', 'snr.nikai_id', '=', 'nikay.id_nikey') ->where('is_active', 1) ->get();
  
                return $alldata;
    }
}
