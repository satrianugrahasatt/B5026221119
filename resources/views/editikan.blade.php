@extends('master')
@section('title', 'Edit Data Pegawai')

@section('konten')

<a href="/ikan" class="btn btn-link"> Kembali</a>
<h3 class="mt-3">Edit Data Ikan</h3>

@foreach($ikan as $i)
<form action="/ikan/update" method="post">
    {{ csrf_field() }}
    <input type="hidden" name="id" value="{{ $i->kodeikan }}"> <br/>

    <div class="form-group row">
        <label for="namaikan" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-10">
            <input type="text" required="required" class="form-control" id="namaikan" name="namaikan" value="{{$i->namaikan}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="jumlahikan" class="col-sm-2 col-form-label">Jumlah</label>
        <div class="col-sm-10">
            <input type="number" required="required" class="form-control" id="jumlahikan" name="jumlahikan" value="{{$i->jumlahikan}}">
        </div>
    </div>

    <div class="form-group row">
        <label for="tersedia" class="col-sm-2 col-form-label">Ketersediaan</label>
        <div class="col-sm-10">
            <select class="form-control" id="tersedia" name="tersedia">
                @if ($i->jumlahikan <=1)
                <option value="N">Tidak Tersedia</option>
                <option value="Y">Tersedia</option>
                @else
                <option value="Y">Tersedia</option>
                <option value="N">Tidak Tersedia</option>
                @endif
            </select>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-10 offset-sm-2">
            <input type="submit" class="btn btn-warning" value="Edit Data">
        </div>
    </div>
</form>
@endforeach

@endsection
