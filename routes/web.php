<?php

use App\Http\Controllers\CustomAuthController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\Initial;
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

// Route::get('/', function () {
//     return view('welcome')->middleware('Initial');
// });

Route::get('/', function () {
    return view('welcome');
})->middleware(Initial::class);


route::get('/register',[CustomAuthController::class, 'register'])->name('register')->middleware('LoggedIn');
route::get('/login',[CustomAuthController::class, 'login'])->name('login')->middleware('LoggedIn');
route::post('/registration',[CustomAuthController::class,'registration'])->name('registerUser');
// route::post('/login-user',[CustomAuthController::class,'loginUser'])->name('login-user');
// route::post('/login-user', [CustomAuthController::class, 'loginUser'])->name('login-user');
Route::post('/signin',[CustomAuthController::class, 'LoginUser'])->name('/signin');
Route::get('/dashboard',[CustomAuthController::class,'dashboard'])->middleware('isLoggedIn');
Route::get('/logout',[CustomAuthController::class,'logout']);

// route::get('/login',function()
// {
//     return view('login');
// });
// route::get('/register',function()
// {
//     return view('register');
// });
// route::get('/signup',function()
// {
//     return view('signup');
// });