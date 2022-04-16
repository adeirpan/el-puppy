<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klinik;
class KlinikController extends Controller
{
    public function index(){

        $data = klinik::all();
        return view('klinik',compact('data'));
    }

    public function tambahklinik(){
        return view('tambahdata');
    }

    public function insertdata(Request $request){
        //dd($request->all());
        klinik::create($request->all());
        return redirect()->route('klinik');

    }

    public function tampildata($kode){
        $data = klinik::find($kode);
        //dd($data);
        return view('tampildata',compact('data'));
    }

    public function updatedata(Request $request, $kode){
        $data = klinik::find($kode);
        $data->update($request->all());
        return redirect()->route('klinik');
    }

    public function delete($kode){
        $data = klinik::find($kode);
        $data->delete();
        return redirect()->route('klinik');

    }
}


