<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\DataController;
use App\Models\Iot;
use DB;

class DataController extends Controller
{
    public function tampildata()
    {
        return view('pasien.tampildata');
    }

    public function tampilsuhu()
    {
        $data = Iot::orderBy('id','desc')->limit(1)->get();
        return view('pasien.tampilsuhu', compact('data'));
    }
    public function tampilstatus()
    {
        $data = Iot::orderBy('id','desc')->limit(1)->get();
        return view('pasien.tampilstatus', compact('data'));
    }

    public function tampilkelembaban()
    {
        $data = Iot::orderBy('id','desc')->limit(1)->get();
        return view('pasien.tampilkelembaban', compact('data'));
    }

    public function inputdata(Request $request)
    {
        $data = array();
        $data['suhu'] = $request->suhu;
        $data['kelembaban'] = $request->kelembaban;
        $data = DB::table('iots')->insert($data);

        return redirect('pasien/tampildata');
    }

    public function tampilgrafik()
    {
        $datasuhu = Iot::orderBy('id','asc')->limit(10)->get();

        return view('pasien.tampilgrafik', compact('datasuhu'));
    }

    public function cobagrafik()
    {
        $datasuhu = Iot::orderBy('id','asc')->limit(10)->get();

        return view('pasien.cobagrafik', compact('datasuhu'));
    }

}
