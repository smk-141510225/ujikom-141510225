<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\penggajian;

class penggajiancontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
         $penggajian=penggajian::all();
        return view('penggajian.index',compact('penggajian'));

    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
        $penggajian=penggajian::all();
        $tunjangan_pegawai=tunjangan_pegawai::all();
        return view('tunjangan_pegawai.create',compact('tunjangan_pegawai','penggajian'));
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
        $penggajian=Request::all();
        penggajian::create($penggajian);
        return redirect('penggajian');
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
         $penggajianupdate=Request::all();
          $penggajian=penggajian::find($id);
          $penggajian->update($penggajianupdate);
          return redirect('/penggajian');
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
         penggajian::find($id)->delete();
        return redirect('penggajian');
    }
}
