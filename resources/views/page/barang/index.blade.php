@extends('layout.master')
@section('brg', 'active')

@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Cot Prabeu RO</h1> 

    </div>
    <!-- /.container-fluid -->
    <div class="card mx-4">
        <div class="card-header py-6">
            <h3> {{ Str::upper('daftar barang') }}</h3>
            <div class="" style="float: right">
                <a href="/tambahbarang" class="btn btn-primary">tambah data</a>
            </div>
        </div>
        <div class="card-body  ">
            <div class="center px-auto">
            <table class="table table-hover "  style="width: 100%">
                <thead>
                    <th style="width: 5%">no</th>
                    <th style="width: 35%">Nama Barang</th>
                    <th style="width: 20%">harga</th>
                    {{-- <th style="width: 20%">stock</th> --}}
                    <th class="text-center" style="width: 20%">action </th>
                </thead>
                <tbody>
                    @forelse ($barang as $item)
                        <tr>
                            <td>{{ $nomor++ }}</td>
                            <td>{{ $item->namaBarang }}</td>
                            <td>{{ $item->harga }}</td>
                            {{-- <td>{{ $item->stok }}</td> --}}
                            <td class="text-center">
                                <a href="/editbarang/{{ $item->id }}" class="btn btn-primary">Edit</a>
                                {{-- <a href="/edit/{{ $item->id }}" data-bs-toggle="modal" data-bs-target="#exampleModal" class="btn btn-danger">hapus</a> --}}
                                {{-- <a class="btn btn-danger" href="#" data-toggle="modal" data-target="#l{{ $item->id }}">
                                    Hapus
                                </a> --}}
                                <!-- Logout Modal-->
                                {{-- <div class="modal fade" id="l{{ $item->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                                <button class="close" type="button" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">×</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">yakin ingin menghapus {{ $item->namaBarang }}</div>
                                            <div class="modal-footer">
                                                <button class="btn btn-secondary" type="button"
                                                    data-dismiss="modal">Cancel</button>
                                                <a class="btn btn-primary" href="login.html">hapus</a>
                                            </div>
                                        </div>
                                    </div>
                                </div> --}}
                            </td>
                        </tr>
                    @empty
                    @endforelse
                </tbody>
            </table>
        </div>
        </div>
    </div>
@endsection
