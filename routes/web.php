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

// =====admin=========

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::middleware(['auth'])->group(function () {
    Route::controller(ClinteController::class)->group(function () {
        Route::get('/category/{id}/{slug}', 'categorypage')->name('category');
        Route::get('product-detail/{id}', 'singlepage')->name('singlepage');
        Route::get('add-to-cart', 'addtocart')->name('addtocart');
    });
});

// user_route......

Route::controller(UserController::class)->group(function () {
    Route::get('home', 'home')->name('home');
    Route::get('bechelor', 'bechelor')->name('bechelor');
    Route::get('masters', 'masters')->name('masters');
    Route::get('intstudent', 'intstudent')->name('intstudent');
    Route::get('living', 'living')->name('living');
    Route::get('contact', 'contact')->name('contact');
    Route::get('institute', 'institute')->name('institute');
});

Route::controller(CategoryController::class)->group(function () {
    Route::get('cat_main', 'cat_main')->name('cat_main');
    Route::get('cat_detail', 'cat_detail')->name('cat_detail');
});

// static inner page 

Route::get('bussiness', function () {
    return view('user.category.static-innerpage.bussi');
});
Route::get('finance', function () {
    return view('user.category.static-innerpage.finance');
});
Route::get('marcket', function () {
    return view('user.category.static-innerpage.marcket');
});
Route::get('law', function () {
    return view('user.category.static-innerpage.law');
});
Route::get('computer', function () {
    return view('user.category.static-innerpage.computer');
});
Route::get('art', function () {
    return view('user.category.static-innerpage.art');
});
Route::get('engineer', function () {
    return view('user.category.static-innerpage.engineer');
});
Route::get('tourism', function () {
    return view('user.category.static-innerpage.tourism');
});
Route::get('shipping', function () {
    return view('user.category.static-innerpage.shipping');
});
Route::get('psycho', function () {
    return view('user.category.static-innerpage.psycho');
});
Route::get('education', function () {
    return view('user.category.static-innerpage.education');
});
Route::get('agri', function () {
    return view('user.category.static-innerpage.agri');
});
Route::get('summer', function () {
    return view('user.category.static-innerpage.summer');
});


require __DIR__ . '/auth.php';
