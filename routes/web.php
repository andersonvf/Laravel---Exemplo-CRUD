<?php

use App\Http\Controllers\UsersController;
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

Route::prefix('users')->group(function(){
    Route::get('/', [UsersController::class, 'index'])->name('users.index');
    Route::get('/create',[UsersController::class,'create'])->name('users.create');
    Route::post('/',[UsersController::class,'store'])->name('users.store');
    Route::get('/{id}/edit',[UsersController::class, 'edit'])->where('id', '[0-9]+')->name('users.edit');
    Route::put('/{id}',[UsersController::class, 'update'])->where('id', '[0-9]+')->name('users.update');
    Route::delete('/{id}',[UsersController::class, 'destroy'])->where('id', '[0-9]+')->name('users.destroy');
});


