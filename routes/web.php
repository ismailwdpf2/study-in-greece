<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\User\CategoryController;
use App\Http\Controllers\User\UserController;
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
    return view('user.home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// user_route......

Route::controller(UserController::class)->group(function () {
    Route::get('home', 'home')->name('home');
    Route::get('bechelor', 'bechelor')->name('bechelor');
    Route::get('masters', 'masters')->name('masters');
    Route::get('intstudent', 'intstudent')->name('intstudent');
    Route::get('living', 'living')->name('living');
    Route::get('contact', 'contact')->name('contact');
 
});

Route::controller(CategoryController::class)->group(function(){
    Route::get('cat_main', 'cat_main')->name('cat_main');
    Route::get('cat_detail', 'cat_detail')->name('cat_detail');
});

require __DIR__.'/auth.php';
