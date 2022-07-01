@extends('layout.master')
@section('dbt')
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
        <h3> {{ Str::upper('Uang Masuk') }}</h3>
        {{-- <div class="" style="float: right">
            <a href="" class="btn btn-primary">tambah data</a>
        </div> --}}
    </div>
    <div class="card-body">
        <table class="table table-hover">
            <thead>
                <th>no</th>
                <th>Tanggal</th>
                <th class="text-center">Uang masuk</th>
                {{-- <th>stock</th> --}}
                {{-- <th class="text-center">action </th> --}}
            </thead>
            <tbody>
                @forelse ($debit as $item)
                    <tr>
                        <td>{{ $nomor++ }}</td>
                        <td>{{ $item->tanggal }}</td>
                        <td>
                            <span class="" style="float: left">Rp.-</span>
                            <span class="" style="float: right">{{ number_format($item->uangmasuk,0,',','.') }}</span>
                        </td>
                    </tr>
                @empty
                    
                @endforelse
            </tbody>
        </table>
    </div>
</div>
@endsection