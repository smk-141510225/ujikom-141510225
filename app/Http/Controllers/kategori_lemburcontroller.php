<?php

namespace App\Http\Controllers;
use App\kategori_lembur;
use App\golongan;
use App\jabatan;
use Request;
use Input;
use Validator;

class kategori_lemburcontroller extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function __construct(){
       //$this->middleware('auth');
    }
    public function index()
    {
        //
        $kategori_lembur=kategori_lembur::all();
        return view('kategori_lembur.index',compact('kategori_lembur'));
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
         return view('kategori_lembur.create',compact('golongan','jabatan'));
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

       $kategori_lembur=Request::all();
         $rules=['kode_lembur'=>'required|unique:kategori_lemburs',
         'id_jabatan'=>'required','id_golongan'=>'required'];
         $message=['id_jabatan.required'=>'Kolom Jangan Sampai Kosong','id_golongan.required'=>'Kolom Jangan Sampai Kosong','kode_lembur.unique'=>'Kode Yang Anda Masukan Sudah Ada'];
         $validator=Validator::make(Input::all(),$rules,$message);

        if ($validator->fails())
         {
            # code...
            return redirect()->back()
            ->withErrors($validator)
            ->withInput();
        }
        else
        {
         $kategori_lembur=Request::all();
         kategori_lembur::create($kategori_lembur);
         return redirect('kategori_lembur');
        }
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
        $kategori_lembur=kategori_lembur::find($id);
        $golongan=golongan::all();
        $jabatan=jabatan::all();
        return view('kategori_lembur.edit',compact('kategori_lembur','golongan','jabatan'));
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
        

        $kategori_lemburupdate=Request::all();
        $kategori_lembur=kategori_lembur::find($id);
        $kategori_lembur->update($kategori_lemburupdate);
        return redirect('kategori_lembur');

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
        kategori_lembur::find($id)->delete();
        return redirect('kategori_lembur');
    }
}
