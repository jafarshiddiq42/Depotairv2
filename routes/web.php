<?php

use App\Http\Controllers\DebitController;
use App\Http\Controllers\KreditController;
use App\Http\Controllers\UtamaController;
use App\Models\Barang;
use App\Models\Debit;
use App\Models\Kredit;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Route::get('/', function () {
//     return view('welcome');
// });

Route::group(['middleware'=>'auth'],function(){

    // if (Barang::all()->count()=== 0) {
    //     Route::get('/barang',[UtamaController::class,'barangindex'])->name('home');
    //     Route::get('/',[UtamaController::class,'index']);
    // }else {
    //     Route::get('/barang',[UtamaController::class,'barangindex']);
    //     Route::get('/',[UtamaController::class,'index'])->name('home');
    // }

    // if (User::all()->count()!=0) {
    //     Route::get('/',[UtamaController::class,'index'])->name('home');
    // }else {

    //     Route::get('/',function(){
    //         return redirect('/register');
    //     })->name('home');
    // }

Route::get('/',[UtamaController::class,'index'])->name('home');

Route::get('/barang',[UtamaController::class,'barangindex']);
Route::get('/editbarang/{id}',[UtamaController::class,'barangedit']);
Route::get('/tambahbarang',[UtamaController::class,'barangtambah']);
Route::post('/tambahbarang',[UtamaController::class,'barangadd']);


Route::get('/debit',[DebitController::class,'index']);
Route::get('/debit/{tanggal}',[DebitController::class,'finalisasi']);

Route::get('/kredit',[KreditController::class,'index']);
Route::get('/kredit/form',[KreditController::class,'form']);
Route::post('/kreditsubmit',[KreditController::class,'formsubmit']);

Route::post('/perbaikan/{id}',[UtamaController::class,'updatehome']);
});


if (User::all()->count()===0) {
    Auth::routes();
}else{
    Auth::routes([
        'register'=>false
    ]);
}


// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
