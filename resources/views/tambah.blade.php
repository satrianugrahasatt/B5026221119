@extends('master')

@section('title','Data Pegawai')

@section('konten')

	<h2><a href="https://www.malasngoding.com">www.malasngoding.com</a></h2>
	<h3>Data Pegawai</h3>

	<a href="/pegawai"> Kembali</a>

	<br/>
	<br/>

	<form action="/pegawai/store" method="post" class="form-horizontal">
		{{ csrf_field() }}
        <div class="form-group row">
            <label for="nama" class="col-xs-3 col-form-label mr-3 ml-3">Nama</label>
            <div class="col-xs-9 ml-1">
            <input type="text" class="form-control" id="nama" name="nama" required='required'>
            </div>
        </div>

        <div class="form-group row">
            <label for="jabatan" class="col-xs-3 col-form-label mr-2 ml-3">Jabatan</label>
            <div class="col-xs-9">
            <input type="text" class="form-control" id="jabatan" name="jabatan" required='required'>
            </div>
        </div>

        <div class="form-group row">
            <label for="umur" class="col-xs-3 col-form-label mr-4 ml-3">Umur</label>
            <div class="col-xs-9">
            <input type="text" class="form-control" id="umur" name="umur" required='required'>
            </div>
        </div>

        <div class="form-group row">
             <label for="alamat" class="col-xs-3 col-form-label mr-2 ml-3 mb-1">Alamat</label>
             <div class="col-xs-9 ml-1">
             <input type="text" class="form-control" id="alamat" name="alamat" required='required'>
             </div>
         </div>
         <input type="submit" class="btn btn-primary" value="Simpan Data">
 	</form>

@endsection


