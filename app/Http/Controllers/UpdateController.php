<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Update;
use App\Models\Pengiriman;

class UpdateController extends Controller
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
        $update = Update::all();
        return view('update.index', compact('update','nomor'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $update = Update::all();
        return view('update.form',compact('pengiriman'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $update = new Update;

        $update->kode = $request->kode;
        $update->jeniss_id = $request->jenis;
        $update->cabang = $request->cabang;
        $update->jumlah = $request->jumlah;
        $update->harga = $request->harga;
        $update->save();

        return redirect('/update');
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
        $update = Update::find($id);
        $pengiriman = Pengiriman::all();
        return view('update.edit',compact('update'));
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
        $update = Update::find($id);

        $update->kode = $request->kode;
        $update->jeniss_id = $request->jenis;
        $update->cabang = $request->cabang;
        $update->jumlah = $request->jumlah;
        $update->harga = $request->harga;
        $update->save();

        return redirect('/update');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $update = Update::find($id);
        $update->delete();

        return redirect('/update');
    }
}
