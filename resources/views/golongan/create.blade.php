@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-primary">
                <div class="panel-heading"><center>Tambah Golongan</center></div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ route('golongan.store') }}">
                        {{ csrf_field() }}

                        <div class="form-group{{ $errors->has('kode_golongan') ? ' has-error' : '' }}">
                            <label for="kode_golongan" class="col-md-4 control-label">Kode Golongan</label>

                            <div class="col-md-6">
                                <div class="form-group {{$errors->has('kode_golongan') ? 'has-errors':'message'}}" >
                                <input id="kode_golongan" type="text" class="form-control" name="kode_golongan" value="{{ old('kode_golongan') }}" required autofocus>
                                 @if($errors->has('kode_golongan'))
                                         <span class="help-block">
                                            <strong>{{$errors->first('kode_golongan')}}</strong>
                                         </span>
                                 @endif
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('nama_golongan') ? ' has-error' : '' }}">
                            <label for="nama_golongan" class="col-md-4 control-label">Nama Golongan</label>

                            <div class="col-md-6">
                                <input id="nama_golongan" type="text" class="form-control" name="nama_golongan" value="{{ old('nama_golongan') }}" required autofocus>
                            </div>
                        </div>

                         <div class="form-group{{ $errors->has('besaran_uang') ? ' has-error' : '' }}">
                            <label for="besaran_uang" class="col-md-4 control-label">Besaran Uang</label>

                            <div class="col-md-6">
                                <input id="besaran_uang" type="text" class="form-control" name="besaran_uang" value="{{ old('besaran_uang') }}" required autofocus>
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
