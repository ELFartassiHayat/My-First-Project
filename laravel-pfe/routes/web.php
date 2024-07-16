<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ImageController;
use App\Http\Controllers\reservationsController;
use App\Http\Controllers\adminController;

use App\Http\Controllers\adminLogin;
use Illuminate\Support\Facades\Route;

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
    return view('welcome2');
});



Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');
Route::get('/images', [ImageController::class,'index'])->middleware(['auth', 'verified'])->name('images');
Route::get('/reservations', [reservationsController::class,'index'])->middleware(['auth', 'verified'])->name('reservations');
Route::get('/ReserVationdelete/{id}', [reservationsController::class,'delete'])->middleware(['auth', 'verified']);
Route::get('/ReserVationAdd', [reservationsController::class,'add'])->middleware(['auth', 'verified']);
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::get('/admin', [adminLogin::class,'index']);
Route::get('/adminPanel', [adminController::class,'index']);
Route::get('/adminReservation', [adminController::class,'reservation']);
Route::get('/adminReserVationdelete/{id}', [adminController::class,'delete']);
Route::get('/adminReserVationAccept/{id}', [adminController::class,'accept']);
Route::get('/adminchambre', function(){
    return view('chambresAdmind');
});
Route::get('/employe', function(){
    return view('');
});

Route::get('/images', [adminController::class,'image']);
Route::get('/employe', function(){
    return view('employeLogin');
});
Route::get('/employerPanel', function(){
    return view('employePanel');
});

require __DIR__.'/auth.php';
