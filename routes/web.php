<?php
use App\Http\Controllers\crudcontroller;
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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/show',[crudcontroller::class,'index']);
Route::post('/store',[crudcontroller::class,'store'])->name('/store');
Route::get('/display',[crudcontroller::class,'display']);
Route::get('/edite/{id}',[crudcontroller::class,'edite'])->name('/edite');
Route::post('/update/{id}',[crudcontroller::class,'update'])->name('/update');
Route::get('/delete/{id}',[crudcontroller::class,'delete'])->name('/delete');




