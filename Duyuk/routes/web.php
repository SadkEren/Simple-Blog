<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;


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
require __DIR__.'/auth.php';

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/duyuk', function () {
//     return view('duyuk.duyuk');
// });


Route::get('/dashboard',[IndexController::class,'callEntries'])->middleware(['auth', 'verified'])->name('dashboard');

//New Duyuk
Route::get('/duyuk',[IndexController::class,'callDuyuk'])->middleware(['auth', 'verified'])->name('callDuyuk');
Route::post('/newDuyuk',[IndexController::class,'newDuyuk'])->middleware(['auth', 'verified'])->name('newDuyuk');

//Profile
Route::get('/profile/{user_id}',[IndexController::class,'callProfile'])->middleware(['auth', 'verified'])->name('callProfile');
Route::get('/entrySil/{id}',[IndexController::class,'entrySil'])->middleware(['auth', 'verified'])->name('entrySil');
Route::get('/entryEditGet/{id}',[IndexController::class,'entryEditGet'])->name('entryEditGet');
Route::put('/entryEditPost/{id}',[IndexController::class,'entryEditPost'])->name('entryEditPost');

//About
Route::get('/callAbout',[IndexController::class,'callAbout'])->middleware(['auth', 'verified'])->name('callAbout');
Route::get('/callContact',[IndexController::class,'callContact'])->middleware(['auth', 'verified'])->name('callContact');


