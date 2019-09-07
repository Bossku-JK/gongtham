<?php

namespace App\Http\Controllers;
use App\ss;
use Illuminate\Http\Request;

class SsController extends Controller
{
    //
public function getid($snr_id){
    // dd($snr_id);
    $alldata = ss::where('snr_id', $snr_id)->where('is_active', 1)->get();
    // dd($alldata);
    return $alldata;
}
}
