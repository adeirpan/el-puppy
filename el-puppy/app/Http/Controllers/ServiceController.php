<?php

namespace App\Http\Controllers;

use App\Models\Service;
use Illuminate\Http\Request;

class ServiceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $service = Service::get();
        return view('service.index', ['list' => $service]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('service.form', [
            'title' => 'Tambah',
            'method' => 'POST',
            'action' => 'service'
            ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $service = new Service;
        $service->nama = $request->nama;
        $service->alamat = $request->alamat;
        $service->nomorTelepon = $request->nomorTelepon;
        $service->jenisPerawatan = $request->jenisPerawatan;
        $service->jamService = $request->jamService;
        $service->Catatan = $request->Catatan;
        $service->save();
        return redirect('/service')->with('msg', 'Tambah berhasil');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return Service::find($id);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('service.form', [
            'title' => 'Edit',
            'method' => 'PUT',
            'action' => "product/$id",
            'data' => Service::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $service = Service::find($id);
        $service->nama = $request->nama;
        $service->alamat = $request->alamat;
        $service->nomorTelepon = $request->nomorTelepon;
        $service->jenisPerawatan = $request->jenisPerawatan;
        $service->jamService = $request->jamService;
        $service->Catatan = $request->Catatan;
        $service->save();
        return redirect('/service')->with('msg', 'Edit berhasil');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Service::destroy($id);
        return redirect('/service')->with('msg', 'Hapus berhasil');
    }
}
