<?php

use App\Http\Controllers\Admin\PostController as AdminPostController;
use Illuminate\Support\Facades\Auth;
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

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::middleware('auth')->prefix('/admin')->name('admin.')->group(function () {
    Route::get('/posts/index', [AdminPostController::class, 'index'])->name('posts.index');
    Route::get('/posts/create', [AdminPostController::class, 'store'])->name('.posts.create');
    Route::get('/posts/{id}', [AdminPostController::class, 'show'])->name('posts.show');
    Route::get('/posts', [AdminPostController::class, 'store'])->name('.posts.store');
    Route::get('/posts/{id}/edit', [AdminPostController::class, 'edit'])->name('posts.edit');
    Route::get('/posts/{id}', [AdminPostController::class, 'edit'])->name('posts.update');
    Route::get('/posts/{id}/delete', [AdminPostController::class, 'index'])->name('posts.delete');
});
