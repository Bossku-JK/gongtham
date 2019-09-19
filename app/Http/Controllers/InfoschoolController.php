<?php

namespace App\Http\Controllers;

use App\infoschool;
use Illuminate\Http\Request;
use PDF;

class InfoschoolController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function generatepdf(Request $request){

        // dd($request->all());
        $data = $request->all();
        $item['1'] = 'แบบฟอร์มขอชื่อผู้ใช้และรหัสผ่าน';
        $item['2'] = 'สำหรับสถานศึกษา';
        $pdf = PDF::loadView('pdf', compact('data','item'));
        PDF::setOptions(['dpi' => 150, 'defaultFont' => 'sans-serif']);
        // $path = public_path() . '/file/' . $data['schoolcode'] . '.pdf';
        $path = public_path().'/file/school/' . $data['schoolcode'] . '.pdf';
        $pdf->save($path);
        // def("DOMPDF_ENABLE_REMOTE", false);
        return response()->download($path);
        // return $pdf->download('infoschool.pdf');
        // dd($pdf->download('บัญชี.pdf'));

    }
    public function create()
    {
        //
        return view('infoschool.create');
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
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\infoschool  $infoschool
     * @return \Illuminate\Http\Response
     */
    public function show(infoschool $infoschool)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\infoschool  $infoschool
     * @return \Illuminate\Http\Response
     */
    public function edit(infoschool $infoschool)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\infoschool  $infoschool
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, infoschool $infoschool)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\infoschool  $infoschool
     * @return \Illuminate\Http\Response
     */
    public function destroy(infoschool $infoschool)
    {
        //
    }
}
