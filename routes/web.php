<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\PostControllerFront;


Route::get('/', function () {
    return view('welcome');
});
Route::get('/master', function () {
    return view('Back.inc.master');
});
Route::get('/blog', function () {
    return view('Front.inc.master');
});

Route::get('/products', function () {
    return view('Front.pages.posts');
});

// Route::get('/products', [PostController::class, 'post']);

// Route::get('/products', [PostController::class, 'index'])->name('posts.index');





// عرض صفحة تسجيل الدخول
Route::get('dashboard', [AuthController::class, 'showLoginForm'])->name('login');

// معالجة طلب تسجيل الدخول
Route::post('login', [AuthController::class, 'login'])->name('login.post');

// تسجيل الخروج
Route::post('logout', [AuthController::class, 'logout'])->name('logout');

// حماية Route الخاص بـ /dashboard/posts بوساطة Middleware
Route::middleware(['admin'])->group(function () {
    Route::get('/allposts', [PostController::class, 'index'])->name('posts.index');
    Route::get('/posts/create', [PostController::class, 'create'])->name('posts.create');
    Route::post('/posts', [PostController::class, 'store'])->name('posts.store');
    Route::get('/posts/{id}/edit', [PostController::class, 'edit'])->name('posts.edit');
    Route::put('/posts/{id}', [PostController::class, 'update'])->name('posts.update');
    Route::delete('/posts/{id}', [PostController::class, 'destroy'])->name('posts.destroy');
});


