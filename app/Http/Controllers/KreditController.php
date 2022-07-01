<?php

namespace App\Http\Controllers;

use App\Models\Debit;
use App\Models\Haribaru;
use App\Models\Kredit;
use Illuminate\Http\Request;


class KreditController extends Controller
{
    public function index()
    {
         $nomor =1;
         $kredit = Kredit::all();

        // menghitung saldo
         $debit=Debit::all();
         $totaldebit=0;
         foreach ($debit as $item) {
            $totaldebit = $totaldebit + $item->uangmasuk;
         }
         $keluar=Kredit::all();
         $totalkredit=0;
         foreach ($keluar as $item) {
            $totalkredit = $totalkredit + $item->uangkeluar;
         }

         $saldo = $totaldebit - $totalkredit;
        //  akhir saldo

        return view('page.kredit.index',compact('kredit','nomor','saldo'));
        // dd($totalkeseluruhan);
    }
    
    
    public function form(){
        return view('page.kredit.form');
    }
    
    
    public function formsubmit(Request $request){
        
        $kredit = new Kredit();
        $kredit->tanggal = date('Y-m-d');
        $kredit->keterangan = $request->keterangan;
        $kredit->uangkeluar = $request->jumlah;
        $kredit->save();
        // return view('page.kredit.form');

       

        return redirect('/kredit');
    }
}
