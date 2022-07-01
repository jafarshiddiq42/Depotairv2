@extends('layout.master')
@section('dt', 'active')
{{-- @section('headerplus')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>

@endsection --}}
@section('content')
    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-4 text-gray-800">Cot Prabeu RO</h1>
        
    </div>
    <!-- /.container-fluid -->
    <div class="card mx-4">
        <div class="card-header py-6">
            {{ date('D m/Y') }}
        </div>
        <div class="card-body">
            <table class="table table-hover table-responsive" style="width: 100%">
                <thead>
                    {{-- <th>no</th> --}}
                    <th>Nama Barang</th>
                    <th>Terjual</th>
                    <th class="text-center">tambah</th>
                    {{-- <th class="text-center">total</th> --}}
                </thead>
                <tbody>
                    @forelse ($baru2 as $item)
                        <tr>
                            {{-- <td>{{ $nomor++ }}</td> --}}
                            <td style="width:25%">{{ $item->namaBarang }}</td>
                            <td style="width:15%">{{ $item->jumlah }}</td>
                            <td style="width:25%">
                                <form action="/perbaikan/{{ $item->idbarang }}" method="post" name="formisi">
                                    @csrf
                                    <input class="form-control" type="number" name="jumlahisi" id="jumlahtambah">
                                </form>
                            </td>
                            {{-- <td class="text-right" style="width:35%">{{ 'Rp-.'. $item->jumlah*$item->harga }}</td> --}}
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3"> Belum ada Data</td>
                        </tr>
                    @endforelse
                    
                </tbody>
            </table>
        </div>
    </div>
    {{-- <form name="finalisasi" action="/debit" method="post"> --}}
    <div class="card mx-4 my-2">
       
        <div class="card-header">
           
                @csrf

                <div style="font-size: 20px">Pemasukan</div>
              
              
               
                {{-- <button type="submit" class="btn btn-success">Finalisasi</button> --}}
    
        <div class="card-body">
            <table class="table px-4">
                <thead>
                    <th class="">Nama Barang</th>
                    <th class="text-center">Keuntungan</th>
                </thead>
                <tbody>
                    <tr>
                        @forelse ($baru2 as $item)
                    <tr>
                        <td class="text-left">{{ $item->namaBarang }}</td>
                        <td><span style="float:left">{{ 'Rp.-  ' }}</span><span style="float: right"
                                class="normaloffertotalspan">{{ number_format($item->jumlah * $item->harga, 0, ',', '.') }}</span>
                        </td>

                        {{-- <td class=""> <span class="text-left"> Rp.</span> <span class="text-right">{{  number_format($item->jumlah*$item->harga,0,',','.') }}</span> </td> --}}
                    </tr>
                @empty
                    @endforelse
                   
                   {{-- @csrf --}} @method('POST')
                    <tr>
                        <td class="text-center"><b> Total</b>

                        </td>

                        <td>
                            <b>
                                <span style="float:left">{{ 'Rp.-  ' }}</span>
                                {{-- <input type="text" class="" style="float: right" name="halo"
                                    value="{{ number_format($total, 0, ',', '.') }}"> --}}
                                <span id="subtotal"  class="" style="float: right" name="halo">{{ number_format($total, 0, ',', '.') }}</span>
                            </b>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2"><a href="/debit/{{ $baru2[0]->tanggal }}" class="form-control bg-success text-center text-light">Finalisasi</a></td>
                    </tr>
                  
                </tbody>
            </table>

        </div>
    </div>
    {{-- </form> --}}
@endsection
@section('footerplus')
    <script>
        $('#jumlahtambah').on('keyup', function() {
            if ($(this).val().length > 0) {
                $('formisi').submit();
            }
        });
    </script>
    {{-- <script>
        var sum = 0;
        $('.normaloffertotalspan').each(function() {
            sum +=+$(this).text() || 0;

        });
        $("#subtotal").text(sum);
    </script> --}}
@endsection
