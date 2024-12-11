<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\nqtKhoaController;
use App\Http\Controllers\nqtMonHocController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});



Route::get('/khoas', [nqtKhoaController::class, 'index'])->name('NqtKhoa.getallkhoa');
Route::get('/khoa/detail/{nqtMaKhoa}',[nqtKhoaController::class,'detail'])->name('NqtKhoa.nqtdetail');
Route::get('/khoa/edit/{nqtMaKhoa}',[nqtKhoaController::class,'nqtEdit'])->name('NqtKhoa.nqtedit');
Route::post('/khoa/edit',[nqtKhoaController::class,'nqtEditSubmit'])->name('NqtKhoa.nqtEditSubmit');

Route::get('/khoa/new',[nqtKhoaController::class,'nqtNew'])->name('NqtKhoa.nqtNew');
Route::post('/khoa/new',[nqtKhoaController::class,'nqtNewSubmit'])->name('NqtKhoa.nqtNewSubmit');
Route::get('/khoa/delete/{makh}',[nqtKhoaController::class,'delete'])->name('NqtKhoa.delete');



Route::get('/monhocs', [nqtMonHocController::class, 'ListMH'])->name('nqtMonHoc.getallmonhoc');
Route::get('/monhoc/detail/{nqtmamh}',[nqtMonHocController::class,'detail'])->name('nqtMonHoc.nqtdetail');
Route::get('/monhoc/edit/{nqtmamh}',[nqtMonHocController::class,'nqtEdit'])->name('nqtMonHoc.nqtedit');
Route::post('/monhoc/edit',[nqtMonHocController::class,'nqtEditSubmit'])->name('nqtMonHoc.nqtEditSubmit');
Route::get('/monhoc/create',[nqtMonHocController::class,'nqtNew'])->name('nqtMonHoc.nqtNew');
Route::post('/monhoc/create',[nqtMonHocController::class,'nqtNewSubmit'])->name('nqtMonHoc.nqtNewSubmit');