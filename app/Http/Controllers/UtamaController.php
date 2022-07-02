<?php

namespace App\Http\Controllers;

use App\Models\Barang;
use App\Models\Debit;
use App\Models\Haribaru;
use App\Models\Kredit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class UtamaController extends Controller
{
    public function index()
    {   

        if (Barang::all()->count()=== 0){
            return redirect('/barang');
        }else{

        $nomor = 1;
        $barang=Barang::all();
        $baru = Haribaru::where('tanggal','=',date('Y-m-d'))->count();
        if ($baru === 0) {
            foreach ($barang as $satuan) {
                Haribaru::create(
                    [
                        'tanggal'=>date('Y-m-d'),
                        'idbarang'=>$satuan->id
                    ]
                );
          
        }
        }else {
          
        }
        
        $baru2=Haribaru::join('barangs','haribarus.idbarang','=','barangs.id')
        ->select('haribarus.*','barangs.namaBarang','barangs.harga')
        ->where('tanggal','=',date('Y-m-d'))
        ->get();
        $total = 0;
        foreach ($baru2 as $item) {
          
            $total = $total + $item->harga * $item->jumlah ;
        }

         // menghitung saldo
        //  $debit=Debit::all();
        //  $totaldebit=0;
        //  foreach ($debit as $item) {
        //     $totaldebit = $totaldebit + $item->uangmasuk;
        //  }
        //  $keluar=Kredit::all();
        //  $totalkredit=0;
        //  foreach ($keluar as $item) {
        //     $totalkredit = $totalkredit + $item->uangkeluar;
        //  }

        //  $saldo = $totaldebit - $totalkredit;
        //  akhir saldo

        

       return view('beranda',compact('baru2','nomor','total'));
    // dd($total);
        }


    }

    public function updatehome($id , Request $request)
    {

        $haribaru = Haribaru::where('idbarang','=',$id)->where('tanggal','=',date('Y-m-d'))->first();
        // $haribaru->jumlah
        $haribaru->jumlah = $haribaru->jumlah + $request->jumlahisi;
        $haribaru->save();
        return redirect('/');
        // dd($haribaru->jumlah);
        // dd($request->jumlahisi);
    }
    public function barangindex()
    {
        $nomor = 1;
        $barang=Barang::all();
        return view('page.barang.index',compact('barang','nomor'));
    }
    public function barangtambah()
    {
        return view('page.barang.form');
    }
    public function barangadd(Request $request)
    {
        // return view('page.barang.form');
        $barang = new Barang();
        $barang->namaBarang = $request->nama;
        $barang->harga = $request->harga;
        $barang->save();

        return redirect('/barang');
    }
}
