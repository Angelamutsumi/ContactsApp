<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ContactController;
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

Route::get('/contacts', [ContactController::class, 'index']);
Route::get('/contacts/create', [ContactController::class, 'create'])->name('contact_register');
Route::post('/contacts', [ContactController::class, 'store'])->name('contact_store');
Route::get('/contacts/{contact}', [ContactController::class, 'show']);
Route::get('/contacts/{contact}', [ContactController::class, 'edit'])->name('contact_edit');
Route::patch('/contacts/{contact}}', [ContactController::class, 'update'])->name('contact_update');
Route::delete('/contacts/{contact}', [ContactController::class, 'destroy'])->name('contact_destroy');