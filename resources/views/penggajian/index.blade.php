@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Index Penggajian</center></div>
                <a class="btn btn-succes" href="{{url('penggajian/create')}}"></a>
                 <div class="panel-body">
                <table class="table" border='2'>
                <thead>

                    <tr>
                        <th><center>Id</th></center>
                        <th><center>Tunjangan Pegawai Id</th></center>
                        <th><center>Jumlah Jam Lembur</th></center>
                        <th><center>Jumlah Uang Lembur</th></center>
                        <th><center>Gaji Pokok</th></center>
                        <th><center>Total Gaji</th></center>
                        <th><center>Tanggal Pengambilan</th></center>
                        <th><center>Status Pengambilan</th></center>
                        <th><center>Petugas Penerima</th></center>
                        <th><center>Opsi</th></center>

                    </tr>
                </head>
                @php
                $a=1;
                @endphp
                @foreach ($penggajian as $data)
                <tbody>
                    <td><center>{{$a++}}</td></center>
                    <td><center>{{$data->pegawai->Tunjangan_Pegawai_Id}}</td></center>
                    <td><center>{{$data->lembur_pegawai->Jumlah_Jam_Lembur}}</td></center>
                    <td><center>{{$data->kategori_lembur->Jumlah_Uang_Lembur}}</td></center>
                    <td><center>{{$data->Gaji_Pokok}}</td></center>
                    <td><center>{{$data->Total_gaji}}</td></center>
                    <td><center>{{$data->Tanggal_Pengambilan}}</td></center>
                    <td><center>{{$data->Status_Pengambilan}}</td></center>
                    <td><center>{{$data->Petugas_Penerima}}</td></center>
                     <td >
                                  <center><a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" data-toggle="tooltip">Delete</a></center>
                                  @include('modals.delete', [
                                    'url' => route('penggajian.destroy', $data->id),
                                    'model' => $data
                                  ])
                            </td>
                </tbody>
                @endforeach

                </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
