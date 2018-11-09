<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class File extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $data = \App\File::all();
		return view('file',compact('data'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('file_create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = new \App\File();
        $data->nama = $request->input('name');  //mengambil name di form nya
        $file = $request->file('file');         // mengambil file
        $ext = $file->getClientOriginalExtension();     // mengambil file ekstensi nya
        $newName = rand(100000,1001238912).".".$ext;    // merubah nama file jadi random
        $file->move('uploads/file',$newName);       // menaruh nama file, dan di simpan di suatu folder
        $data->file = $newName;
        $data->save();
        return redirect()->route('file.index')->with('alert.success','Data Berhasil di tambahkan!');
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
