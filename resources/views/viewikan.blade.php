@extends('master')
 @section('title', 'Data Ikan')

 @section('konten')

     <h3 class="d-flex justify-content-center">Data Ikan</h3>

     <div class="row">
         <div class="col-6"></div>
         <div class="col-6 flex-column mt-5 mb-5">
             @foreach ($ikan as $i)
                 <div name="nama" id="nama" class="mb-2">Kode Ikan: {{ $i->kodeikan }} </div>
                 <div name="jabatan" id="jabatan" class="mb-2">Nama Ikan: {{ $i->namaikan }} </div>
                 <div name="umur" id="umur" class="mb-2">Jumlah Ikan: {{ $i->jumlahikan }} </div>
                 <div name="alamat" id="alamat" class="mb-2">Ketersediaan: @php
                    $ketersediaan = $i->tersedia;
                    $status = '';

                    if ($ketersediaan == 'Y') {
                        $status = 'Tersedia';
                    } elseif ($ketersediaan <= 'N') {
                        $status = 'Tidak Tersedia';
                    }
                    echo $status;
                    @endphp</td> </div>
                 <div class="d-flex justify-content-center">
                 <a href="/ikan" class="btn btn-primary pl-5 pr-5 mt-5">OK</a>
                 </div>
             @endforeach
         </div>
     </div>

 @endsection
