<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AccountController;
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

Route::get('/tasks', function () {
    return view('tasks');
});

Route::get('/label', function () {
    return view('label');
});

Route::get('/account1', function () {
    return view('account.index');
});
Route::get('/forms', function () {
    return view('forms.boards.tuskForm');
});

Route::get('/formsFull', function () {
    return view('forms.boards.tuskFormFull');
});

Route::get('/registerForm', function () {
    return view('forms.auth.register');
});

Auth::routes();

//account
Route::group(['middleware' => 'auth'], function() {
    Route::group(['prefix' => 'account'], function() {
        Route::get('/', AccountController::class)->name('account');
        Route::get('/logout', function() {
            \Illuminate\Support\Facades\Auth::logout();
            return redirect()->route('login');
        })->name('account.logout');
    });
});
