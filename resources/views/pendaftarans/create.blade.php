@extends('pendaftarans.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Tambah Pendaftaran</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('pendaftarans.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('pendaftarans.store') }}" method="POST">
    @csrf
  
     <div class="row">
     <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>NIS:</strong>
                <input type="text" name="nis" class="form-control" placeholder="NIS">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Nama:</strong>
                <input type="text" name="nama" class="form-control" placeholder="Nama">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
          <strong>Jenis Kelamin:</strong>
          <input type="radio" id="male" name="jns_kelamin" class="form-control"  value="male" placeholder="Jenis Kelamin">
          <label for="male">Male</label>
          <input type="radio" id="female" name="jns_kelamin" class="form-control" value="female" placeholder="Jenis Kelamin">
          <label for="female">Female</label>
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Tempat Lahir:</strong>
              <input type="text" name="tmp_lahir" class="form-control" placeholder="Tempat Lahir">
          </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>Tanggal Lahir:</strong>
                <input type="date" name="tgl_lahir" class="form-control" placeholder="Tanggal Lahir">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>Alamat:</strong>
                <input type="text" name="alamat" class="form-control" placeholder="Alamat">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
                <strong>Asal  Sekolah:</strong>
                <input type="text" name="asal_sekolah" class="form-control" placeholder="Asal Sekolah">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
        <div class="form-group">
            <strong>Kelas:</strong>
            <input type="text" name="kelas" class="form-control" placeholder="kelas">
        </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
          <div class="form-group">
              <strong>Jurusan:</strong>
              <input type="text" name="jurusan" class="form-control" placeholder="jurusan">
          </div>
        </div>
        
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>
@endsection