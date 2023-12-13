<?php

use App\Http\Controllers\BlogController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\UserController;
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

Route::get('/', [HomeController::class , 'get_home']);
Route::get('/menu', [ItemController::class , 'get_menu']);
Route::prefix("items")->group(function () {
    Route::get('/create', [ItemController::class , 'create']);
    Route::post('/store', [ItemController::class , 'store']);
    Route::get('/update/{id}', [ItemController::class, "update"]);
    Route::get('/delete/{id}', [ItemController::class, "delete"]);
    Route::post('/edit', [ItemController::class, "edit"]);
});
// Route::get('/items/create', [ItemController::class , 'create']);
// Route::post('/items/store', [ItemController::class , 'store']);
// Route::get('items/update/{id}', [ItemController::class, "update"]);
// Route::post('items/edit', [ItemController::class, "edit"]);
// Route::get('items/delete/{id}', [ItemController::class, "delete"]);


Route::get('/book', [BookController::class , 'book']);
Route::post('/book/table', [BookController::class , 'table']);
Route::get('/notification', [BookController::class , 'notification']);

Route::get('/contact', [ContactController::class , 'contact']);
Route::post('/contact/message', [ContactController::class , 'message']);

Route::get('/about', [HomeController::class , 'get_about']);

Route::get('/blogs', [BlogController::class, 'get_blogs']);
Route::get('/blogs/create', [BlogController::class , 'create']);
Route::post('/blogs/store', [BlogController::class , 'store']);
Route::get('/blogs/details/{id}', [BlogController::class, 'get_details']);

Route::get('/dashboard', [DashboardController::class, 'get_dashboard']);

// AUTH
Route::get('/register', [RegisterController::class, "register"]);
Route::post('/register', [RegisterController::class, "handle_register"]);
Route::get('/login', [LoginController::class, "login"]);
Route::post('/login', [LoginController::class, "handle_login"]);
Route::get('/logout', [LogoutController::class, "logout"]);

Route::get('/bookings', [BookController::class, 'get_bookings']);
Route::get('/booking/status/{status}/{id}', [DashboardController::class, 'status_booking']);
Route::get('/{message}', [HomeController::class , 'get_home']);

Route::prefix("profile")->group(function () {
    Route::post('/update/edit', [UserController::class, "edit_profile"])->name('user.editprofile');
    Route::post('/update-profile/edit/pass', [UserController::class, "edit_pass"]);
    Route::get('/update/{id}', [UserController::class, "update"]);
    Route::get('/{id}', [UserController::class, "get_user"]);
});
