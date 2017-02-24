<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class pegawai extends Model
{
     protected $table='pegawais'; 
     protected $fillable=['id','nip','user_id','id_golongan','id_jabatan','Foto','type_users']; 
      public function golongan(){ 
      return $this->belongsTo('App\golongan','id_golongan'); 
     } 
     public function jabatan(){ 
      return $this->belongsTo('App\jabatan','id_jabatan'); 
     } 
     public function user(){ 
         return $this->belongsTo('App\User','user_id'); 
     } 
     public function lembur_pegawai(){ 
         return $this->hasMany('App\Lembur_pegawai','pegawai_id'); 
     } 
     public function tunjangan_pegawai(){ 
         return $this->hasMany('App\Tunjangan_pegawai','pegawai_id'); 
     } 
 } 

