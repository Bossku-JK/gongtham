<?php

namespace App\Http\Controllers;
use App\sheet_img_info;
use App\gongtham_sheet_info;
use Illuminate\Http\Request;
use File;
use DB;
class GongthamSheetInfoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $data = gongtham_sheet_info::all();
        // return $data;
        return view('sheet.index');
    }

   public function sheetdata()
    {
        $data = gongtham_sheet_info::all();
        return $data;
    }
    public function sheetshow($id)
    {
        $data = gongtham_sheet_info::findorfail($id);
        $dataimg = DB::table('gongtham_sheet_infos')
        ->where('gongtham_sheet_infos.id', $id)
        ->join('sheet_img_infos', 'sheet_img_infos.gongtham_sheet_info_id', '=', 'gongtham_sheet_infos.id')  ->get();

        // dd($data);
        return response()->json([
            'data' => $data,
            'dataimg' => $dataimg
        ]);
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        return view('sheet.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
        // dd($request->all());
        if($request){
        $sheet = new gongtham_sheet_info();
        $sheet->ss_id = $request->ss;
        $sheet->fullname = $request->fullname;
        $sheet->position = $request->position;
        $sheet->phone = $request->phone;
        $sheet->memo = $request->memo;
        $sheet->save();


       

        if($request->hasfile('img1'))
        {

           foreach($request->file('img1') as $image)
           {
            $img = new sheet_img_info();
            $img->type_sheet_id= 1;
            $img->gongtham_sheet_info_id= $sheet->id;
            $path = public_path().'/images/type1/' . $sheet->ss_id;
            File::makeDirectory($path, $mode = 0777, true, true);
            $name= $sheet->ss_id.'_'.$image->getClientOriginalName().'.'.$image->getClientOriginalExtension();
               $image->move(public_path().'/images/type1/'.$sheet->ss_id, $name);  
               $img->img_name = $name;  
               $img->save();
           }
        }
    
  

        if($request->hasfile('img2'))
        {

           foreach($request->file('img2') as $image)
           {
            $img = new sheet_img_info();
            $img->type_sheet_id= 2;
            $img->gongtham_sheet_info_id= $sheet->id;
            $path = public_path().'/images/type2/' . $sheet->ss_id;
            File::makeDirectory($path, $mode = 0777, true, true);
            $name= $sheet->ss_id.'_'.$image->getClientOriginalName().'.'.$image->getClientOriginalExtension();
               $image->move(public_path().'/images/type2/'.$sheet->ss_id, $name);  
               $img->img_name = $name;  
               $img->save();
           }
        }

        if($request->hasfile('img3'))
        {

           foreach($request->file('img3') as $image)
           {
            
            $img = new sheet_img_info();
            $img->type_sheet_id= 3;
            $img->gongtham_sheet_info_id= $sheet->id;
            $path = public_path().'/images/type3/' . $sheet->ss_id;
            File::makeDirectory($path, $mode = 0777, true, true);
            $name= $sheet->ss_id.'_'.$image->getClientOriginalName().'.'.$image->getClientOriginalExtension();
               $image->move(public_path().'/images/type3/'.$sheet->ss_id, $name);  
               $img->img_name = $name;  
               $img->save();
           }
        }

        if($request->hasfile('img4'))
        {

           foreach($request->file('img4') as $image)
           {
            $img = new sheet_img_info();
            $img->type_sheet_id= 4;
            $img->gongtham_sheet_info_id= $sheet->id;
            $path = public_path().'/images/type4/' . $sheet->ss_id;
            File::makeDirectory($path, $mode = 0777, true, true);
            $name= $sheet->ss_id.'_'.$image->getClientOriginalName().'.'.$image->getClientOriginalExtension();
               $image->move(public_path().'/images/type4/'.$sheet->ss_id, $name);  
               $img->img_name = $name;  
               $img->save();
           }
        }

        if($request->hasfile('img5'))
        {

           foreach($request->file('img5') as $image)
           {
            $img = new sheet_img_info();
            $img->type_sheet_id= 5;
            $img->gongtham_sheet_info_id= $sheet->id;
            $path = public_path().'/images/type5/' . $sheet->ss_id;
            File::makeDirectory($path, $mode = 0777, true, true);
            $name= $sheet->ss_id.'_'.$image->getClientOriginalName().'.'.$image->getClientOriginalExtension();
               $image->move(public_path().'/images/type5/'.$sheet->ss_id, $name);  
               $img->img_name = $name;  
               $img->save();
           }
        }

        if($request->hasfile('img6'))
        {

           foreach($request->file('img6') as $image)
           {
            $img = new sheet_img_info();
            $img->type_sheet_id= 6;
            $img->gongtham_sheet_info_id= $sheet->id;
            $path = public_path().'/images/type6/' . $sheet->ss_id;
            File::makeDirectory($path, $mode = 0777, true, true);
               $name= $sheet->ss_id.'_'.$image->getClientOriginalName().'.'.$image->getClientOriginalExtension();
               $image->move(public_path().'/images/type6/'.$sheet->ss_id, $name);  
               $img->img_name = $name;  
               $img->save();
           }
        }


        return response()->json([
            'message' => 'sucess',
        ]);
    }else{
        return response()->json([
            'message' => 'error',
        ]);
    }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\gongtham_sheet_info  $gongtham_sheet_info
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $data = 
        DB::table('gongtham_sheet_infos')->join('ss', 'ss.id', '=', 'gongtham_sheet_infos.ss_id')
        ->select('gongtham_sheet_infos.*', 'ss.ss_name', 'ss.province_name')
        ->where('gongtham_sheet_infos.id', $id) ->first();
        $data1 = DB::table('sheet_img_infos')
        ->where('gongtham_sheet_info_id', $id)
        // ->join('type_of_sheets', 'type_of_sheets.id', '=', 'sheet_img_infos.type_sheet_id') 
        // ->join('gongtham_sheet_infos', 'sheet_img_infos.gongtham_sheet_info_id', '=', 'gongtham_sheet_infos.id')
        ->join('type_of_sheets', 'type_of_sheets.id', '=', 'sheet_img_infos.type_sheet_id')->get();
            // $dataimg->toArray();
            $dataimg  = collect($data1)->groupBy('type_name')->toArray();
        // dd($dataimg);
        // return response()->json([
        //     'data' => $data,
        //     'dataimg' => $dataimg
        // ]);
        //
        return view('sheet.show',compact('data','dataimg'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\gongtham_sheet_info  $gongtham_sheet_info
     * @return \Illuminate\Http\Response
     */
    public function edit(gongtham_sheet_info $gongtham_sheet_info)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\gongtham_sheet_info  $gongtham_sheet_info
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, gongtham_sheet_info $gongtham_sheet_info)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\gongtham_sheet_info  $gongtham_sheet_info
     * @return \Illuminate\Http\Response
     */
    public function destroy(gongtham_sheet_info $gongtham_sheet_info)
    {
        //
    }
}
