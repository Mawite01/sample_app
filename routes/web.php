<?php

// use App\Http\Controllers\BlogController;

use App\Http\Controllers\AdminController;
use App\Http\Controllers\BlogController;
use App\Http\Controllers\BlogsController;
use App\Models\Blog;
use Illuminate\Support\Facades\Auth;
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
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');    

Route::prefix('admin')->group(function () {
    Route::resource('blogs',BlogsController::class);
    Route::get('admin',[AdminController::class,'index'])->name('admin');
    Route::get('admin/widget',[AdminController::class,'widget'])->name('admin.widget');
    Auth::routes(['register' => false ]); 
});

