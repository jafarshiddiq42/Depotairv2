<?php

namespace App\Providers;

use App\Models\Debit;
use App\Models\Kredit;
use Illuminate\Contracts\View\View;
use Illuminate\Support\ServiceProvider;


class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
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
            view()->share('saldo', $saldo);
        //  akhir saldo

    }
}
