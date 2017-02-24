@extends('layouts.app')  
 
 @section('content') 
 
 <div class="container">
    <div class="row">
        <div class="col-md-11 col-md-offset-1">
            <div class="panel panel-primary">
         <div class="panel-heading"><center>Pegawai</center></div> 
         <div class="form-group"><center>
                <br>
         <form action="{{url('pegawai')}}/?nama_pegawai=nama_pegawai">
        <input type="text" name="nama_pegawai" placeholder="Search"></form>
    </center></div>
             <table class="table table-striped table-bordered table-hover"> 
                  

                      <div class="panel-body">
                    <table class="table" border='2'>
                    <thead>

                    <tr>
                         <th>Id</th> 
                         <th>Nip</th> 
                         <th>Nama</th> 
                         <th>Email</th> 
                         <th>Jabatan</th> 
                         <th>Golongan</th> 
                         <th>Photo</th> 
                         <th colspan="3">Opsi</th> 
                     </tr> 
                 </thead> 
 
 
                 <?php $id=1; ?> 
                 @foreach ($pegawai as $data) 
                 <tbody> 
                     <tr>  
                         <td> {{$id++}} </td> 
                         <td> {{$data->nip}} </td> 
                         <td> {{$data->User->name}} </td> 
                         <td> {{$data->User->email}} </td> 
                         <td> {{$data->jabatan->nama_jabatan}} </td> 
                         <td> {{$data->golongan->nama_golongan}} </td> 
                         <td>  <img src = "{{asset('/assets/image/'.$data->foto )}}" class="img-circle" height="35" width="35"></td> 
                         <td><a href="{{route('pegawai.edit',$data->id)}}" class="btn btn-warning">Edit</a></td> 
                         <td> 
                         {!! Form::open(['method' => 'DELETE', 'route'=>['pegawai.destroy', $data->id]]) !!} 
                         {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!} 
                         {!! Form::close() !!} 
                         </td> 
                          
                     </tr> 
                 </tbody> 
                 @endforeach 
             </table> 
         </div> 
     </div> 
 </div>  
 
  @endsection 
