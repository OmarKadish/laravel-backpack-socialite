<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\RegisterationController;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use Laravel\Socialite\Facades\Socialite;

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
    return view('welcome');
});

Route::get('/loginWithGithub', [AuthController::class, 'loginWithGithub'])->name('login');
Route::get('/auth/github/callback',  [AuthController::class, 'githubCallback']);
