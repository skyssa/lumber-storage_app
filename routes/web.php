<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\WoodController;
use App\Http\Controllers\ResourceController;
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
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/wood',[WoodController::class,'index'])->name('wood.index');
Route::get('/wood/create',[WoodController::class,'create'])->name('wood.create');
Route::post('/wood/store',[WoodController::class,'store'])->name('wood.store');

Route::get('/resource',[ResourceController::class, 'index'])->name('resource.index');
Route::get('/resource/create',[ResourceController::class, 'create'])->name('resource.create');
Route::post('/resource/store',[ResourceController::class, 'store'])->name('resource.store');

Route::get('/resource/show/{id}',[ResourceController::class, 'show'])->name('resource.show');
Route::get('/resource/edit/{id}',[ResourceController::class, 'edit'])->name('resource.edit');
Route::put('/resource/update/{id}',[ResourceController::class, 'update'])->name('resource.update');
Route::delete('/resource/destroy/{id}',[ResourceController::class, 'destroy'])->name('resource.destroy');


Route::get('/wood/show/{id}',[WoodController::class,'show'])->name('wood.show');
Route::get('/wood/edit/{id}',[WoodController::class,'edit'])->name('wood.edit');
Route::put('/wood/update/{id}',[WoodController::class,'update'])->name('wood.update');
Route::delete('/wood/destroy/{id}',[WoodController::class,'destroy'])->name('wood.destroy');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
