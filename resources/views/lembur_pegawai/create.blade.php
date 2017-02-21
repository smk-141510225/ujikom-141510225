@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Tambah Lembur Pegawai</center></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('lembur_pegawai.store') }}">
                        {{ csrf_field() }}
                       

                        <div class="form-group{{ $errors->has('kode_lembur_id') ? ' has-error' : '' }}">
                                <label for="name" class="col-md-4 control-label">Uang Kategori Lembur</label>
                                <div class="col-md-6">
                                <select class="form-control" name="kode_lembur_id" required>
                                    <option>pilih</option>
                                    @foreach ($kategori_lembur as $data)
                                    <option value="{!! $data->id!!}">{!! $data->besaran_uang!!}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('id_pegawai') ? ' has-error' : '' }}">
                               <label for="name" class="col-md-4 control-label">Nip Pegawai</label>
                               <div class="col-md-6">
                               <select class="form-control" name="id_pegawai" required>
                                <option>pilihan</option>
                                @foreach ($pegawai as $data)
                                <option value="{!! $data->id!!}">{!! $data->nip!!}</option>
                                @endforeach
                               </select>
                            </div>
                        </div>

                          <div class="form-group{{ $errors->has('jumlah_jam') ? ' has-error' : '' }}">
                            <label for="jumlah_jam" class="col-md-4 control-label">Jumlah Jam</label>
                            <div class="col-md-6">
                                <input id="jumlah_jam" type="text" class="form-control" name="jumlah_jam" value="{{ old('jumlah_jam') }}" required autofocus>
                            </div>
                        </div>

                       
                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <button type="submit" class="btn btn-primary">
                                    save
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
