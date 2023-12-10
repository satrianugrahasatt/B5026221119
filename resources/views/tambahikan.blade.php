@extends('master')

@section('title','Data Ikan')

@section('konten')

    <h3>Data Ikan</h3>

    <a href="/ikan"> Kembali</a>

    <br/>
    <br/>

    <form action="/ikan/store" method="post" class="form-horizontal">
        {{ csrf_field() }}

        <div class="form-group row">
            <label for="namaikan" class="col-sm-3 col-form-label text-right">Nama Ikan</label>
            <div class="col-sm-9">
                <input type="text" class="form-control" id="namaikan" name="namaikan">
            </div>
        </div>

        <div class="form-group row">
            <label for="jumlahikan" class="col-sm-3 col-form-label text-right">Jumlah Ikan</label>
            <div class="col-sm-9">
                <input type="number" class="form-control" id="jumlahikan" name="jumlahikan">
            </div>
        </div>

        <div class="form-group row">
            <label for="tersedia" class="col-sm-3 col-form-label text-right">Tersedia</label>
            <div class="col-sm-9">
                <select class="form-control" id="tersedia" name="tersedia">
                    <option value="Y">Tersedia</option>
                    <option value="N">Tidak Tersedia</option>
                </select>
                <script>
                    document.addEventListener('DOMContentLoaded', function () {
                        var jumlahIkanInput = document.getElementById('jumlahikan');
                        var tersediaSelect = document.getElementById('tersedia');

                        // Set opsi default menjadi "Tidak Tersedia"
                        tersediaSelect.value = 'N';

                        jumlahIkanInput.addEventListener('input', function () {
                            // Ambil nilai input jumlah ikan
                            var jumlahIkanValue = parseInt(jumlahIkanInput.value);

                            // Ubah opsi pada elemen select sesuai dengan nilai input
                            if (jumlahIkanValue > 0) {
                                tersediaSelect.value = 'Y';
                            } else {
                                tersediaSelect.value = 'N';
                            }
                        });
                    });
                </script>


            </div>
        </div>

            <input type="submit" class="btn btn-primary" value="Simpan Data">
        </div>
    </form>



@endsection
