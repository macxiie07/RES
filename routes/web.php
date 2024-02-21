<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomepageController;

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

<<<<<<< HEAD


=======
>>>>>>> 23741cb5a05665d0f660511e9e34fd8edf113067
Route::get('/',[HomepageController::class, 'index'])->name('homepage.index');
Route::get('/about-us',[HomepageController::class, 'aboutus'])->name('homepage.aboutus');
Route::get('/contact-us',[HomepageController::class, 'contactus'])->name('homepage.contactus');

<<<<<<< HEAD

=======
Auth::routes(['register' => true]);
>>>>>>> 23741cb5a05665d0f660511e9e34fd8edf113067

Route::get('/app/admin', [AdminDashboard::class, 'index'])->name('app.admin.index');
