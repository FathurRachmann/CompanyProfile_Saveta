<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ImageUploadController;
use App\Http\Controllers\Controller;

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

Route::get('/', function () {
    return view('index');
});
Route::get('/about', function () {
    return view('page1');
});
Route::get('/history', function () {
    return view('page2');
});
Route::get('/visim', function () {
    return view('page3');
});
Route::get('/contact', function () {
    return view('page4');
});
Route::get('/halamanadmin', function () {
    return view('login');
});

Route::put('login',[Controller::class,'login']);

Route::get('/tambah', function () {
    return view('tambah');
});

Route::get('hapus',[ImageUploadController::class,'hapusData']);

Route::get('/edit', function () {
    return view('edit');
});

Route::put('update',[ImageUploadController::class,'updateData'])->name('images.store');

Route::get('/detail', function () {
    $id=intval(@$_GET['id']);
    $produk= DB::table("produk")->where(["id"=>$id])->first();
    return view('detail', ['produk' => $produk]);
});
Route::get('listdata', function () {
    $produk = DB::table('produk')->get();
    return view('catalog', ['produk' => $produk]);
});
Route::get('/cari', function (Request $request) {
    $cari = $request->get('cari');
    $produk = DB::table('produk')
    ->where('name','LIKE','%'.$cari.'%')
    ->get();
    return view('catalog',['produk' => $produk]);

});

Route::put('tambah_aksi',[ImageUploadController::class,'storeImage'])
->name('images.store');

