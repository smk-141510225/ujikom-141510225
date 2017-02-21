@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading">Dashboard</div>

                <div class="panel-body">
                    <table class="table"d border="2">
                        <thead>
                            <tr>
                                <th><center>No</th></center>
                                <th><center>Nip Pegawai</th></center>
                                <th><center>uang Tunjangan</th></center>
                                <th><center>Opsi</th></center>
                            </tr>
                        </thead>
                        @php
                        $a=1;
                        @endphp
                        @foreach($tunjangan_pegawai as $data)
                        <tbody>
                            <td><center>{{$a++}}</td></center>
                            <td><center>{{$data->pegawai->nip}}</td></center>
                            <td><center>{{$data->tunjangan->besaran_uang}}</td></center>
                            <td >
                                  <center><a data-toggle="modal" href="#delete{{ $data->id }}" class="btn btn-danger" title="Delete" data-toggle="tooltip">Delete</a></center>
                                  @include('modals.delete', [
                                    'url' => route('tunjangan_pegawai.destroy', $data->id),
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
