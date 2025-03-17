<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\LinkController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'homePage'])->name('home');
Route::get('/single-blog/{id}', [HomeController::class, 'singleBlog'])->name('single.blog');
Route::post('/comment-post', [HomeController::class, 'commentPost'])->name('comment.post');



Route::get('/setting', [BlogController::class, 'setting'])->name('setting');






// admin routes
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})
->middleware(['auth', 'verified'])
->name('dashboard');


// blog routes
Route::get('/blog-view', [BlogController::class, 'viewBlog'])->name('view.blog');
Route::get('/blog-add', [BlogController::class, 'addBlog'])->name('add.blog');
Route::post('/blog-store', [BlogController::class, 'storeBlog'])->name('store.blog');
Route::get('/blog-delete/{id}', [BlogController::class, 'deleteBlog'])->name('delete.blog');
Route::get('/blog-edit/{id}', [BlogController::class, 'editBlog'])->name('edit.blog');
Route::post('/blog-update/{id}', [BlogController::class, 'updateBlog'])->name('update.blog');


// blog links
Route::get('/link-view', [LinkController::class, 'viewLink'])->name('view.link');
Route::get('/link-add', [LinkController::class, 'addLink'])->name('add.link');
Route::post('/link-store', [LinkController::class, 'storeLink'])->name('store.link');
Route::get('/link-delete/{id}', [LinkController::class, 'deleteLink'])->name('delete.link');
Route::get('/link-edit/{id}', [LinkController::class, 'editLink'])->name('edit.link');
Route::post('/link-update/{id}', [LinkController::class, 'updateLink'])->name('update.link');












Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';