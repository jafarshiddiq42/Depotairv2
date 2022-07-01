<?php

namespace App\Http\Controllers;

use App\Models\Debit;
use App\Models\Haribaru;
use Illuminate\Http\Request;

class DebitController extends Controller
{
    public function index()
    {
        $nomor = 1;
        $debit=Debit::all();
        return view('page.debit.index',compact('nomor','debit'));
    }
    public function finalisasi($tanggal)
    {
       

        $baru2=Haribaru::join('barangs','haribarus.idbarang','=','barangs.id')
        ->select('haribarus.*','barangs.namaBarang','barangs.harga')
        ->where('tanggal','=',$tanggal)
        ->get();
        $total = 0;
        foreach ($baru2 as $item) {
          
            $total = $total + $item->harga * $item->jumlah ;
        }

        $hariini=Debit::all()->where('tanggal','=',$tanggal)->count();
        
         if ($hariini === 0) {
            $finalisasi = new Debit();
            $finalisasi->tanggal = $tanggal;
            $finalisasi->uangmasuk = $total;
            $finalisasi->save();
         } else {
            $finalisasi = Debit::where('tanggal','=', $tanggal)->update(['uangmasuk'=>$total]);
           
          
         }
         
        
       

        return redirect('/debit');
        // return view('page.debit.index',compact('debit'));
        // dd($hariini);   
    }
}
