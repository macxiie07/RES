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

<<<<<<< Updated upstream
Route::get('/', function () {
    return view('welcome');

Route::get('/',[HomepageController::class, 'index'])->name('homepage.index');
Route::get('/about-us',[HomepageController::class, 'aboutus'])->name('homepage.aboutus');
Route::get('/contact-us',[HomepageController::class, 'contactus'])->name('homepage.contactus');

});
=======
>>>>>>> Stashed changes

Route::get('/', [App\Http\Controllers\HomepageController::class, 'index'])->name('homepage.index');
