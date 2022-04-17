<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Klinik;

class KlinikController extends Controller
{
    public function index()
    {
        $klinik = Klinik::get();
        return view('klinik.index', ['list' => $klinik]);
    }

    public function create()
    {
        return view('klinik.form', [
            'title' => 'Tambah',
            'method' => 'POST',
            'action' => 'klinik'
            ]);
    }
    public function store(Request $request){
        $tambah = new Klinik;
        //$tambah->id = $request->id;
        $tambah->nama = $request->nama;
        $tambah->alamat = $request->alamat;
        $tambah->nomorTelepon = $request->nomorTelepon;
        $tambah->jamKonsultasi = $request->jamKonsultasi;
        $tambah->catatan = $request->catatan;
        $tambah->save();
        return redirect('/klinik')->with('msg', 'Tambah berhasil');
    }

    public function show($id)
    {
        return Klinik::find($id);
    }

    public function edit($id)
    {
        return view('klinik.form', [
            'title' => 'Edit',
            'method' => 'PUT',
            'action' => "klinik/$id",
            'data' => Klinik::find($id)
        ]);
    }

    public function update(Request $request, $id)
    {
        $klinik = Klinik::find($id);
        $klinik->nama = $request->nama;
        $klinik->alamat = $request->alamat;
        $klinik->nomorTelepon = $request->nomor;
        $klinik->jamKonsultasi = $request->Jam;
        $klinik->catatan = $request->catatan;
        $klinik->save();
        return redirect('/klinik')->with('msg', 'Edit berhasil');
    }

    public function destroy($id)
    {
        Klinik::destroy($id);
        // atau
        /* $prod = Product::find($id);
        $prod->delete(); */
        return redirect('/klinik')->with('msg', 'Hapus berhasil');
    }
}
