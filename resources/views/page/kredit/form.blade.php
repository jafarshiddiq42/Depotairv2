@extends('layout.master')
@section('content')
    <div class="card mx-4">
        <div class="card-header">Form Pengeluaran</div>
        <div class="card-body">
            <form action="/kreditsubmit" method="post">
                @csrf
                <div class="form-group">
                    <label for="keterangan">Keterangan</label>
                    <input type="text" class="form-control " name="keterangan" id="">
                </div>
                <div class="form-group">
                    <label for="keterangan">Jumlah Pengeluaran</label>
                    <input type="text" style="text-align: right" class="form-control" name="jumlah" id="">
                </div>
                <div class="form-group">
                <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
@endsection



