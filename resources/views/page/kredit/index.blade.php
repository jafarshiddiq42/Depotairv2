@extends('layout.master')
@section('krdt')
    active
@endsection
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <h1 class="h3 mb-4 text-gray-800">Cot Prabeu RO</h1>

</div>
<!-- /.container-fluid -->
<div class="card mx-4">
    <div class="card-header py-6">
        <h3> {{ Str::upper('Uang Keluar') }}</h3>
        <div class="" style="float: right">
            <a href="/kredit/form" class="btn btn-primary">tambah data</a>
        </div>
    </div>
    <div class="card-body">
        <table class="table  table-hover">
            <thead>
                <th>no</th>
                <th>Tanggal</th>
                <th class="text-center">Keterangan</th>
                <th class="text-center">Uang Keluar</th>
                {{-- <th>stock</th> --}}
                {{-- <th class="text-center">action </th> --}}
            </thead>
            <tbody>
                @forelse ($kredit as $item)
                    <tr>
                        <td>{{ $nomor++ }}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td>{{ $item->keterangan }}</td>
                        <td>
                            <span class="" style="float: left">Rp.-</span>
                            <span class="" style="float: right">{{ number_format($item->uangkeluar,0,',','.') }}</span>
                        </td>
                    </tr>
                @empty
                <tr>
                    <td colspan="4" class="text-center" >belum ada data</td>
                </tr>
                @endforelse
                <tr>
                    <td colspan="3" class="text-center"><b>sisa saldo</b></td>
                    <td class=""><b>
                        <span style="float: left">Rp.-</span>
                        <span style="float: right">{{ number_format($saldo,0,',','.') }}</span></td>
                    </b> </tr>
            </tbody>
        </table>
    </div>
</div>
@endsection