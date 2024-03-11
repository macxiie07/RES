<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\App\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminBookController;


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

Route::get('/',[HomepageController::class, 'index'])->name('homepage.index');
Route::get('/about-us',[HomepageController::class, 'aboutus'])->name('homepage.aboutus');
Route::get('/contact-us',[HomepageController::class, 'contactus'])->name('homepage.contactus');

Auth::routes(['register' => true]);

Route::get('/app/admin', [AdminDashboard::class, 'index'])->name('app.admin.index');

Route::middleware(['admin'])->group(function () {
    Route::get('/app/admin/users', [AdminUserController::class, 'index'])->name('admin.users.index');
    Route::get('/app/admin/users/create', [AdminUserController::class, 'create'])->name('admin.users.create');
    Route::post('/app/admin/users', [AdminUserController::class, 'store'])->name('admin.users.store');
    Route::get('/app/admin/users/{user}', [AdminUserController::class, 'modify'])->name('admin.users.modify');
    Route::put('/app/admin/users/{user}', [AdminUserController::class, 'update'])->name('admin.users.update');
    Route::get('/app/admin/users/{user}/delete', [AdminUserController::class, 'delete'])->name('admin.users.delete');
    Route::delete('/app/admin/users/{user}', [AdminUserController::class, 'destroy'])->name('admin.users.destroy');
    Route::get('/app/admin/users/{user}/reset', [AdminUserController::class, 'reset'])->name('admin.users.reset');
    Route::patch('/app/admin/users/{user}', [AdminUserController::class, 'resetOk'])->name('admin.users.resetOk');
});

Route::get('/admin/auth', [AdminAuthController::class, 'index'])->name('admin.auth.index');
Route::put('/admin/auth', [AdminAuthController::class, 'changePassword'])->name('admin.auth.changePassword');

Route::get('/app/admin/books', [BookController::class, 'index'])->name('admin.books.index');
Route::get('/app/admin/books/create', [AdminBookController::class, 'create'])->name('admin.books.create');
Route::post('app/admin/books', [AdminBookController::class, 'store'])->name('admin.books.store');
Route::get('/books/{book}', [AdminBookController::class, 'show'])->name('admin.books.show');

Route::get('/app/admin/category', [CategoryController::class, 'index'])->name('admin.category.index');
Route::get('/app/admin/category/create', [AdminCategoryController::class, 'create'])->name('admin.category.create');
Route::post('app/admin/category', [AdminCategoryController::class, 'store'])->name('admin.category.store');
Route::get('app/admin/category/{category}', [AdminCategoryController::class, 'modify'])->name('admin.category.modify');
Route::put('app/admin/category/{category}', [AdminCategoryController::class, 'update'])->name('admin.category.update');
Route::delete('/app/admin/category/{category}', [AdminCategoryController::class, 'destroy'])->name('app.admin.category.destroy');

