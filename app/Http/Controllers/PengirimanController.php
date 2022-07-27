<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengiriman;

class PengirimanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct()
    {
        $this->middleware('auth');
    }
    public function index()
    {
        $nomor = 1;
        $pengiriman = Pengiriman::all();
        return view('pengiriman.index',compact('pengiriman','nomor',));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('pengiriman.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $pengiriman = new Pengiriman;

        $pengiriman->kode = $request->kode;
        $pengiriman->jenis = $request->jenis;
        $pengiriman->jumlah = $request->jumlah;
        $pengiriman->harga = $request->harga;
        $pengiriman->tgl_kirim = $request->tgl_kirim;
       
        $pengiriman->save();

        return redirect('/pengiriman');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $pengiriman = Pengiriman::find($id);
        return view('pengiriman.edit',compact('pengiriman'));
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
        $pengiriman = Pengiriman::find($id);

        $pengiriman->kode = $request->kode;
        $pengiriman->jenis = $request->jenis;
        $pengiriman->jumlah = $request->jumlah;
        $pengiriman->harga = $request->harga;
        $pengiriman->tgl_kirim = $request->tgl_kirim;
       
        $pengiriman->save();

        return redirect('/pengiriman');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $pengiriman = Pengiriman::find($id);
        $pengiriman->delete();

        return redirect('/pengiriman');
    }
}
