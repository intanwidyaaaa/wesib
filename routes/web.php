<?php

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

Auth::routes();

Route::middleware('auth')->group(function(){

//Dashboard
Route::get('/dashboard', [App\Http\Controllers\dashboard\DashboardController::class, 'index'])->name('dashboard');

//Users
Route::get('/dashboard/users', [App\Http\Controllers\Dashboard\Usercontroller::class, 'index'])->name('dashboard.user');
Route::get('/dashboard/user/create', [App\Http\Controllers\Dashboard\Usercontroller::class, 'create'])->name('dashboard.user.create');
Route::post('/dashboard/user', [App\Http\Controllers\Dashboard\Usercontroller::class, 'store'])->name('dashboard.user.store');
Route::get('/dashboard/user/edit/{user}', [App\Http\Controllers\Dashboard\UserController::class, 'edit'])->name('dashboard.user.edit');
Route::put('/dashboard/user/update/{user}', [App\Http\Controllers\Dashboard\UserController::class, 'update'])->name('dashboard.user.update');
Route::delete('/dashboard/user/delete/{user}', [App\Http\Controllers\Dashboard\UserController::class, 'destroy'])->name('dashboard.user.delete');
 
//Siswa
Route::get('/dashboard/Siswa', [App\Http\Controllers\Dashboard\Siswacontroller::class, 'index'])->name('dashboard.siswa');
Route::get('/dashboard/Siswa/create', [App\Http\Controllers\Dashboard\Siswacontroller::class, 'create'])->name('dashboard.siswa.create');
Route::get('/dashboard/Siswa/edit/{siswa}', [App\Http\Controllers\Dashboard\SiswaController::class, 'edit'])->name('dashboard.siswa.edit');
Route::put('/dashboard/Siswa/edit/{siswa}', [App\Http\Controllers\Dashboard\SiswaController::class, 'update'])->name('dashboard.siswa.update');
Route::post('/dashboard/Siswa', [App\Http\Controllers\Dashboard\Siswacontroller::class, 'store'])->name('dashboard.siswa.store');
Route::delete('/dashboard/Siswa/delete/{siswa}', [App\Http\Controllers\Dashboard\Siswacontroller::class, 'destroy'])->name('dashboard.siswa.delete');
Route::get('/dashboard/Siswa/{siswa}', [App\Http\Controllers\Dashboard\Siswacontroller::class, 'show'])->name('dashboard.siswa.show');
});