<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PerfilController, App\Http\Controllers\UserController, App\Http\Controllers\CommentController, App\Http\Controllers\PostController,
App\Http\Controllers\CommunityController;


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
    return view('index');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});


Route::get('/perfiles', [PerfilController::class, 'index']);
Route::get('/usuarios', [UserController::class, 'index']);
Route::get('/comunidades', [CommunityController::class, 'index']);
Route::get('/posts', [PostController::class, 'index']);
Route::get('/comentarios', [CommentController::class, 'index']);

Route::get('/perfiles/{id}', [PerfilController::class, 'show']);
Route::get('/usuarios/{id}', [UserController::class, 'show']);
Route::get('/comunidades/{id}', [CommunityController::class, 'show']);
Route::get('/posts/{id}', [PostController::class, 'show']);
Route::get('/comentarios/{id}', [CommentController::class, 'show']);




require __DIR__.'/auth.php';
