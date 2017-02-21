<?php

namespace App\Http\Controllers;
use App\tunjangan;
use App\golongan;
use App\jabatan;


use Illuminate\Http\Request;

class tunjangancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
        $tunjangan=tunjangan::all();
        return view('tunjangan.index',compact('tunjangan'));


    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $golongan=golongan::all();
        $jabatan=jabatan::all();
        return view('tunjangan.create',compact('golongan','jabatan'));
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

        $tunjangan= new tunjangan;
        $tunjangan->kode_tunjangan=$request->get('kode_tunjangan');
        $tunjangan->id_jabatan=$request->get('id_jabatan');
        $tunjangan->id_golongan=$request->get('id_golongan');
        $tunjangan->status=$request->get('status');
        $tunjangan->jumlah_anak=$request->get('jumlah_anak');
        $tunjangan->besaran_uang=$request->get('besaran_uang');
        $tunjangan->save();
        return redirect('/tunjangan');
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
        $tunjangan=tunjangan::find($id);
        $golongan=golongan::all();
        $jabatan=jabatan::all();
        return view('tunjangan.edit',compact('tunjangan','jabatan','golongan'));
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
        $tunjanganupdate=Request::all();
        $tunjangan=tunjangan::find($i);
        $tunjangan->update($tunjanganupdate);
        return redirect('tunjangan');
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
        tunjangan::find($id)->delete();
        return redirect ('tunjangan');
    }
}
