<?php


use App\Http\Controllers\CommentController;
use App\Http\Controllers\Admin\PostsController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


Route::get('/', [HomeController::class, 'index']);
Route::get('/posts/{post}', [HomeController::class, 'show']);

Route::get('/search', [HomeController::class, 'search']);

Route::post('/comment/{post}', [CommentController::class, 'store'])->name('comment');
Route::get('/comment/{comment}', [CommentController::class, 'destroy'])->name('comment.destroy');



Route::prefix('/admin')->name('admin.')->group(function () {
    Route::prefix('/posts')
        ->name('posts.')
        ->controller(PostsController::class)
        ->group(function () {
            Route::get('/', 'index')->name(name: 'index');
            Route::get('/create', 'create')->name('create');
            Route::post('/store', 'store')->name('store');

            Route::get('/{post}/edit', 'edit')->name('edit');
            Route::post('/{post}/edit', 'update')->name('update');

            Route::post('/{post}/destroy', 'destroy')->name('destroy');
        });
});




Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__ . '/auth.php';
