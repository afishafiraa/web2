<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\ModelBarang;


class Barang extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = ModelBarang::all();
        return view('barang',compact('data'));    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('barang_create');    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
         $data = new ModelBarang();
        $data->nama_barang = $request->nama_barang;
        $data->stok = $request->stok;
        $data->harga = $request->harga;
        $data->expired_date = $request->expired_date;
        $data->tanggal_produksi = $request->tanggal_produksi;
        $data->save();
            return redirect()->route('barang.index')->with('alert-success','Berhasil Menambahkan Data!');
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
        //
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
        $data = ModelBarang::where('id',$id)->first();
        $data->nama_barang = $request -> nama_barang;
        $data->stok = $request -> stok;
        $data->harga = $request -> harga;
        $data->expired_date = $request -> expired_date;
        $data->tanggal_produksi = $request -> tanggal_produksi;
        $data -> save();
        return redirect()->route('barang.index')->with(
            'alert-success','Data Berhasil diubah'
        );
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $data = ModelBarang::where('id',$id)->first();
        $data-> delete();
            return redirect()->route('barang.index')->with(
                'alert-success','Data Berhasil di hapus'
            );
    }
}
