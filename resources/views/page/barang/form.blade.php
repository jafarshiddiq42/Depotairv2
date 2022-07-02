@extends('layout.master')
@section('content')
    <div class="card mx-4">
        <div class="card-header">Tambah Barang</div>
        <div class="card-body">
            <form action="/tambahbarang" method="post">
                @csrf
                <div class="form-group">
                    <label for="keterangan">Nama Barang</label>
                    <input type="text" class="form-control " name="nama" id="">
                </div>
                <div class="form-group">
                    <label for="keterangan">Harga</label>
                    <input type="text" style="text-align: right" class="form-control" name="harga" id="">
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection



