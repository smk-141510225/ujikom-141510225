@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Tambah Penggajian</center></div>
                <div class="panel-body">
                <form method="POST" action="{{url('penggajian')}}">
                {{csrf_field()}}

                    <form class="form-horizontal" role="form" method="POST" action="{{ route('penggajian.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('tunjangan_pegawai_id') ? ' has-error' : '' }}">
                            <label for="tunjangan_pegawai_id" class="col-md-4 control-label">Tunjangan Pegawai Id</label>

                            <div class="col-md-6">
                                <input id="tunjangan_pegawai_id" type="text" class="form-control" name="tunjangan_pegawai_id" value="{{ old('tunjangan_pegawai_id') }}" required autofocus>
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('jumlah_jam_lembur') ? ' has-error' : '' }}">
                            <label for="jumlah_jam_lembur" class="col-md-4 control-label">Jumlah Jam Lembur</label>

                            <div class="col-md-6">
                                <input id="jumlah_jam_lembur" type="text" class="form-control" name="jumlah_jam_lembur" value="{{ old('jumlah_jam_lembur') }}" required autofocus>
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('jumlah_uang_lembur') ? ' has-error' : '' }}">
                            <label for="jumlah_uang_lembur" class="col-md-4 control-label">Jumlah Uang Lembur</label>

                            <div class="col-md-6">
                                <input id="jumlah_uang_lembur" type="text" class="form-control" name="jumlah_uang_lembur" value="{{ old('jumlah_uang_lembur') }}" required autofocus>
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('gaji_pokok') ? ' has-error' : '' }}">
                            <label for="gaji_pokok" class="col-md-4 control-label">Gaji Pokok</label>

                            <div class="col-md-6">
                                <input id="gaji_pokok" type="text" class="form-control" name="gaji_pokok" value="{{ old('gaji_pokok') }}" required autofocus>
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('total_gaji') ? ' has-error' : '' }}">
                            <label for="total_gaji" class="col-md-4 control-label">Total Gaji</label>

                            <div class="col-md-6">
                                <input id="total_gaji" type="text" class="form-control" name="total_gaji" value="{{ old('total_gaji') }}" required autofocus>
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('tanggal_pengambilan') ? ' has-error' : '' }}">
                            <label for="tanggal_pengambilan" class="col-md-4 control-label">Tanggal Pengambilan</label>

                            <div class="col-md-6">
                                <input id="tanggal_pengambilan" type="text" class="form-control" name="tanggal_pengambilan" value="{{ old('tanggal_pengambilan') }}" required autofocus>
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('status_pengambilan') ? ' has-error' : '' }}">
                            <label for="status_pengambilan" class="col-md-4 control-label">Status Pengambilan</label>

                            <div class="col-md-6">
                                <input id="status_pengambilan" type="text" class="form-control" name="status_pengambilan" value="{{ old('status_pengambilan') }}" required autofocus>
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('petugas_penerima') ? ' has-error' : '' }}">
                            <label for="petugas_penerima" class="col-md-4 control-label">Petugas Penerima</label>

                            <div class="col-md-6">
                                <input id="petugas_penerima" type="text" class="form-control" name="petugas_penerima" value="{{ old('petugas_penerima') }}" required autofocus>
                            </div>
                        </div>

                        

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    Save
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
