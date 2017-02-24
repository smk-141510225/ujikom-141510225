<?php

namespace App\Http\Controllers;
use Request; 
 use Validator; 
 use Input; 
 use App\golongan; 
 use App\jabatan; 
 use App\Pegawai; 
 use App\User; 

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\RegistersUsers;


class pegawaicontroller extends Controller
{
    use RegistersUsers;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

   public function __construct(){
      // $this->middleware('auth');
   }

    public function index()
    {
        //
        $pegawai=Pegawai::paginate(); 
        return view('pegawai.index',compact('pegawai')); 

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
          $user=User::all(); 
         return view('pegawai.create',compact('golongan','jabatan','user')); 

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

          $roles=[ 
             'nip'=>'required|unique:pegawais', 
             'id_jabatan'=>'required', 
             'id_golongan'=>'required', 
             'foto'=>'required', 
             'name' => 'required|max:255', 
             'type_users' => 'required', 
             'email' => 'required|email|max:255|unique:users', 
             'password' => 'required|min:6|confirmed', 

         ]; 
  $sms=[ 
             'nip.required'=>'jangan kosong', 
             'nip.unique'=>'jangan sama', 
             'id_jabatan.required'=>'jangan kosong', 
             'id.golongan.required'=>'jangan kosong', 
             'foto.required'=>'jangan kosong', 
             'name.required'=>'jangan kosong', 
             'name.max'=>'max 255', 
             'type_users.required'=>'jangan kosong', 
             'email.required'=>'jangan kosong', 
             'email.email'=>'harus berbentuk email', 
             'email.max'=>'max 255', 
             'email.unique'=>'sudah ada', 
             'password.required'=>'jangan kosong', 
             'password.min'=>'min 6', 
             'password.confirmed'=>'belum kompirmasi', 
         ]; 
         $validasi=Validator::make(Input::all(),$roles,$sms); 
         if($validasi->fails()){ 
             return redirect()->back() 
                 ->WithErrors($validasi) 
                ->WithInput(); 
         } 
         $user=new User; 
         $user->name = Request('name'); 
         $user->type_users = Request('type_users'); 
         $user->email = Request('email'); 
         $user->password = bcrypt(Request('password')); 
         $user->save(); 
         $user = User::all(); 
         foreach ($user as $data ) { 
             $di=$data->id; 
         } 
  
         $file= Input::file('foto'); 
         $destination= public_path().'/assets/image/'; 
         $filename=$file->getClientOriginalName(); 
         $uploadsuccess=$file->move($destination,$filename); 
         if(Input::hasFile('foto')){ 
                 $pegawai = new Pegawai; 
                 $pegawai->nip = Request('nip'); 
                 $pegawai->id_user = $di; 
                 $pegawai->id_jabatan = Request('id_jabatan'); 
                 $pegawai->id_golongan = Request('id_golongan'); 
                 $pegawai->foto=$filename; 
                 $pegawai->save(); 
                 return redirect('pegawai'); 
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
        $pegawai=Pegawai::find($id);; 
         $golongan=golongan::all(); 
          $jabatan=jabatan::all(); 
          $user=User::all(); 
         return view('pegawai.edit',compact('golongan','jabatan','user','pegawai')); 

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
       $pegawai=Pegawai::where('id',$id)->first(); 
         $user=User::where('id',$pegawai->user_id)->first(); 
         if($pegawai['nip'] != Request('nip') || $user['email'] != Request('email')){ 
             $roles=[ 
             'nip'=>'required|unique:pegawais', 
             'id_jabatan'=>'required', 
             'id_golongan'=>'required', 
             'Foto'=>'required', 
             'name' => 'required|max:255', 
             'type_user' => 'required', 
             'email' => 'required|email|max:255|unique:users', 
         ]; 
         } 
         else{ 
             $roles=[ 
             'nip'=>'required', 
             'id_jabatan'=>'required', 
             'id_golongan'=>'required', 
             'Foto'=>'required', 
             'name' => 'required|max:255', 
             'type_users' => 'required', 
             'email' => 'required|email|max:255', 
         ]; 
         } 
         $sms=[ 
             'nip.required'=>'jangan kosong', 
             'nip.unique'=>'jangan sama', 
             'id_jabatan.required'=>'jangan kosong', 
             'id_golongan.required'=>'jangan kosong', 
            'photo.required'=>'jangan kosong', 
             'name.required'=>'jangan kosong', 
             'name.max'=>'max 255', 
             'type_users.required'=>'jangan kosong', 
             'email.required'=>'jangan kosong', 
             'email.email'=>'harus berbentuk email', 
             'email.max'=>'max 255', 
             'email.unique'=>'sudah ada', 
              
         ]; 
         $validasi=Validator::make(Input::all(),$roles,$sms); 
        if($validasi->fails()){ 
             return redirect()->back() 
                 ->WithErrors($validasi) 
                 ->WithInput(); 
         } 
         $user=User::find($pegawai->user_id); 
         $user->name = Request('name'); 
         $user->type_users = Request('type_users'); 
         $user->email = Request('email'); 
         $user->update(); 
          
         $file= Input::file('Foto'); 
         $destination= '/assets/image/'; 
         $filename=$file->getClientOriginalName(); 
         $uploadsuccess=$file->move($destination,$filename); 
         if($uploadsuccess){ 
  
          
             $pegawai =Pegawai::find($id); 
             $pegawai->nip = Request('nip'); 
             $pegawai->user_id = $user->id; 
             $pegawai->id_jabatan = Request('id_jabatan'); 
             $pegawai->id_golongan = Request('id_golongan'); 
             $pegawai->foto=$filename; 
            $pegawai->update(); 
        return redirect('pegawai'); 
        } 
 
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
       $pegawai=Pegawai::find($id); 
         $user=User::where('id',$pegawai->user_id)->delete(); 
         $pegawai->delete(); 
  
        return redirect('pegawai'); 
    } 
} 

