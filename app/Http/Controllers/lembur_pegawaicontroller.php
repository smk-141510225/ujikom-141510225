<?php

namespace App\Http\Controllers;
use App\lembur_pegawai;
use App\pegawai;
use App\kategori_lembur;

use Illuminate\Http\Request;

class lembur_pegawaicontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $lembur_pegawai=lembur_pegawai::all();
        return view('lembur_pegawai.index',compact('lembur_pegawai'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $kategori_lembur=kategori_lembur::all();
        $pegawai=pegawai::all();
        return view('lembur_pegawai.create',compact('kategori_lembur','pegawai'));
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
        $lembur_pegawai= new lembur_pegawai;
        $lembur_pegawai->kode_lembur_id=$request->get('kode_lembur_id');
        $lembur_pegawai->id_pegawai=$request->get('id_pegawai');
        $lembur_pegawai->jumlah_jam=$request->get('jumlah_jam');
        $lembur_pegawai->save();
        return redirect('/lembur_pegawai');
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
        $lembur_pegawai=lembur_pegawai::find($id);
        $pegawai=pegawai::all();
        $kategori_lembur=kategori_lembur::all();
        return view('lembur_pegawai.edit',compact('lembur_pegawai','pegawai','kategori_lembur'));

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
        $lembur_pegawaiupdate=Request::all();
        $lembur_pegawai=lembur_pegawai::find($id);
        $lembur_pegawai->update($lembur_pegawaiupdate);
        return redirect('lembur_pegawai');
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
        lembur_pegawai::find($id)->delete();
        return redirect('lembur_pegawai');
    }
}
