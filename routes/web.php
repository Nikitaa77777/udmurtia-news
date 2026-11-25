<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PublicNewsController;
use App\Http\Controllers\AdminController;
use App\Models\Category;

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

Auth::routes();


Route::get('/', [PublicNewsController::class, 'index']);
Route::view('/about', 'about');
Route::view('/contacts', 'contacts');
Route::get('/categories', function () {
    $categories = Category::withCount('news')->get();
    return view('categories', compact('categories'));
});
// Админ-панель
Route::get('/admin', [AdminController::class, 'index']);
Route::get('/admin/news', [AdminController::class, 'newsIndex']);
Route::get('/admin/news/create', [AdminController::class, 'create']);
Route::get('/admin/news/{id}/edit', [AdminController::class, 'edit']);
