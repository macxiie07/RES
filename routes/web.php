<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;
use App\Http\Controllers\App\Admin\DashboardController as AdminDashboard;
use App\Http\Controllers\AdminUserController;
use App\Http\Controllers\AuthorController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\AdminCategoryController;
use App\Http\Controllers\AdminBookController;
use App\Http\Controllers\AdminAuthorController;


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

Auth::routes(['register' => false]);

Route::middleware(['active'])->group(function () {
    Route::get('/home', [AdminDashboard::class, 'index'])->name('app.admin.index');

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
        Route::get('/app/admin/books/create', [AdminBookController::class, 'create'])->name('admin.books.create');
        Route::get('app/admin/books/{book}', [AdminBookController::class, 'modify'])->name('admin.books.modify');
        Route::put('app/admin/books/{book}', [AdminBookController::class, 'update'])->name('admin.books.update');
        Route::post('app/admin/books', [AdminBookController::class, 'store'])->name('admin.books.store');
        Route::delete('/app/admin/books/{book}', [AdminBookController::class, 'destroy'])->name('app.admin.books.destroy');
        Route::get('/app/admin/category/create', [AdminCategoryController::class, 'create'])->name('admin.category.create');
        Route::post('app/admin/category', [AdminCategoryController::class, 'store'])->name('admin.category.store');
        Route::get('app/admin/category/{category}', [AdminCategoryController::class, 'modify'])->name('admin.category.modify');
        Route::put('app/admin/category/{category}', [AdminCategoryController::class, 'update'])->name('admin.category.update');
        Route::delete('/app/admin/category/{category}', [AdminCategoryController::class, 'destroy'])->name('app.admin.category.destroy');
        Route::get('/app/admin/authors', [AuthorController::class, 'index'])->name('admin.authors.index');
        Route::get('/app/admin/authors/create', [AdminAuthorController::class, 'create'])->name('admin.authors.create');
        Route::post('app/admin/authors', [AdminAuthorController::class, 'store'])->name('admin.authors.store');
        Route::get('app/admin/authors/{author}', [AdminAuthorController::class, 'modify'])->name('admin.authors.modify');
        Route::put('app/admin/authors/{author}', [AdminAuthorController::class, 'update'])->name('admin.authors.update');
        Route::delete('/app/admin/authors/{author}', [AdminAuthorController::class, 'destroy'])->name('app.admin.authors.destroy');
        Route::get('/app/admin/category', [CategoryController::class, 'index'])->name('admin.category.index');
    });

    Route::get('/admin/auth', [AdminAuthController::class, 'index'])->name('admin.auth.index');
    Route::put('/admin/auth', [AdminAuthController::class, 'changePassword'])->name('admin.auth.changePassword');

    Route::get('/app/admin/books', [BookController::class, 'index'])->name('admin.books.index');
    
    Route::get('/books/{book}', [AdminBookController::class, 'show'])->name('admin.books.show');
   
});