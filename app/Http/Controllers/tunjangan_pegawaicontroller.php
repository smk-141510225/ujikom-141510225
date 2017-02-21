<?php

namespace App\Http\Controllers;
use App\tunjangan_pegawai;
use App\pegawai;
use App\tunjangan;

use Request;

class tunjangan_pegawaicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // 
        $tunjangan_pegawai=tunjangan_pegawai::all();
        return view ('tunjangan_pegawai.index',compact('tunjangan_pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $tunjangan=tunjangan::all();
        $pegawai=pegawai::all();
        return view ('tunjangan_pegawai.create',compact('tunjangan','pegawai'));
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
        $tunjangan_pegawai= new tunjangan_pegawai;
        $tunjangan_pegawai->kode_tunjangan_id=$request->get('kode_tunjangan_id');
        $tunjangan_pegawai->id_pegawai=$request->get('id_pegawai');
        $tunjangan_pegawai->save();
        return redirect('/tunjangan_pegawai');

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
        $tunjangan_pegawai=tunjangan_pegawai::find($id);
        $pegawai=pegawai::all();
        $tunjangan=tunjangan::all();
        return view('tunjangan_pegawai.edit',compact('tunjangan_pegawai','tunjangan','pegawai'));
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
        tunjangan_pegawai::find($id)->delete();
        return redirect('tunjangan_pegawai');
    }
}
