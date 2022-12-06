<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
use App\Http\Controllers\AdminController;


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


Route::get('/duyuk', function () {
     return view('duyuk.duyuk');
});


//UserProfile
Route::get('/userProfile/{id}',[IndexController::class,'callUserprofile'])->middleware(['auth', 'verified'])->name('userProfile');
Route::get('/profileGet/{id}',[IndexController::class,'profileGet'])->middleware(['auth', 'verified'])->name('profileGet');
Route::put('/profilePost/{id}',[IndexController::class,'profilePost'])->name('profilePost');


//index blade
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

//_________________________________________________________________________________________________________________________

//___Admin___

//Route::get('/admin',[AdminController::class,'indexA'] )->middleware(['auth', 'verified'])->name('indexA');;
Route::get('/admin',[AdminController::class,'index'])->name('gate.index')->middleware('can:isAdmin');
Route::get('/usersInfo',[AdminController::class,'userInfo'])->name('gate.userInfo')->middleware('can:isAdmin');
Route::get('/usersDelete/{id}',[AdminController::class,'usersDelete'])->name('gate.usersDelete')->middleware('can:isAdmin');
Route::get('/usersGetEdit/{id}',[AdminController::class,'usersGetEdit'])->name('gate.usersGetEdit')->middleware('can:isAdmin');
Route::put('/userEditPost/{id}',[AdminController::class,'userEditPost'])->name('gate.userEditPost')->middleware('can:isAdmin');
