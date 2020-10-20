<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
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
//     return view('master');
// });

Route::get('/',[TodoController::class, 'index'])->name('todoDashboard');

Route::delete('/destroy',[TodoController::class, 'destroy'])->name('destroy');

Route::post('/update',[TodoController::class, 'update'])->name('update');

// Route::resource('todo','TodoController');

Route::post('/create',[TodoController::class, 'create'])->name('todo');

Route::put('/edit',[TodoController::class, 'edit'])->name('edit');