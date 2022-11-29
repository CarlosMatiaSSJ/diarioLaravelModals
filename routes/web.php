<?php

use App\Http\Controllers\controladorBD;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\controladorVistas;

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

/*
Route::get('/', function () {
    return view('welcome');
});*/

/*

Route::view('/', 'welcome');
Route::view('/registrar', 'registrar')->name('registro');
Route::view('/recuerdos', 'recuerdo');
Route::view('/home', 'home')->name('index');;

*/


//Rutas individuales para controlador
Route::get('/',[controladorVistas::class,'showWelcome']);  
Route::get('home',[controladorVistas::class,'showHome'])->name('apodoHome');
Route::get('recuerdos',[controladorVistas::class,'showRecuerdos'])->name('apodoRecuerdos');


Route::get('eliminar',[controladorVistas::class,'showEliminar']);  

//Rutas para controlador Resources
//Create
Route::get('recuerdo/create',[controladorBD::class,'create'])->name('recuerdo.create');
//Store 
Route::post('recuerdo',[controladorBD::class,'store'])->name('recuerdo.store');
//Index
Route::get('recuerdo',[controladorBD::class,'index'])->name('recuerdo.index');
//Edit
Route::get('recuerdo/{id}/edit',[controladorBD::class,'edit'])->name('recuerdo.edit');
//Update
Route::put('recuerdo/{id}',[controladorBD::class,'update'])->name('recuerdo.update');
//Show
Route::get('recuerdo/{id}/show',[controladorBD::class,'show'])->name('recuerdo.show');
//Destroy
Route::delete('recuerdo/{id}/destroy',[controladorBD::class,'destroy'])->name('recuerdo.destroy');





