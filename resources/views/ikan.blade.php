@extends('master')

@section('title','Data Ikan')

@section('konten')

	<h3>Data Ikan</h3>

	<a href="/ikan/tambahikan" class="btn btn-primary"> + Tambah Nilai Baru</a>

	<br/>
	<br/>

	<table class="table table-striped table-hover">
		<tr>
			<th>Kode Ikan</th>
			<th>Nama Ikan</th>
			<th>Jumlah Ikan</th>
			<th>Ketersediaan</th>
            <th>Opsi</th>

		</tr>
		@foreach($ikan as $i)
		<tr>
			<td>{{ $i->kodeikan }}</td>
			<td>{{ $i->namaikan }}</td>
			<td>{{ $i->jumlahikan }}</td>
			<td>@php
                $ketersediaan = $i->tersedia;
                $status = '';

                if ($ketersediaan == 'Y') {
                    $status = 'Tersedia';
                } elseif ($ketersediaan <= 'N') {
                    $status = 'Tidak Tersedia';
                }
                echo $status;
                @endphp</td>
            <td>
                <a href="/ikan/view/{{ $i->kodeikan }}" class="btn btn-success">View</a>
                |
				<a href="/ikan/edit/{{ $i->kodeikan }}" class="btn btn-warning">Edit</a>
                |
				<a href="/ikan/hapus/{{ $i->kodeikan }}" class="btn btn-danger">Hapus</a>
			</td>
		</tr>
		@endforeach
	</table>
@endsection

