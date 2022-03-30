<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SpotifyController;
use App\Models\spotify;

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

Route::get('/dashboard',  [SpotifyController::class, 'index'])->middleware(['auth'])->name('dashboard');

// Route::get('/dashboard', function () {
//     return view('dashboard');
// })->middleware(['auth'])->name('dashboard');

Route::get('/tambah', [SpotifyController::class, 'tambah'])->name('tambah');

Route::post('/insert', [SpotifyController::class, 'insert'])->name('insert');

Route::get('/show/{id}', [SpotifyController::class, 'show'])->name('show');
Route::post('/Update/{id}', [SpotifyController::class, 'Update'])->name('Update');

Route::get('/delete/{id}', [SpotifyController::class, 'delete'])->name('delete');

Route::get('/detailData/{id}', [SpotifyController::class, 'detailData'])->name('detailData');

require __DIR__.'/auth.php';
