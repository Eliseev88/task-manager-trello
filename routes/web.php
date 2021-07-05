<?php

use App\Http\Controllers\GroupAccountController;
use Illuminate\Support\Facades\Route;

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

Route::get('/account', function () {
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

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::get('/group/create', [GroupAccountController::class, 'create'])->name('group.create');
Route::put('/group/store', [GroupAccountController::class, 'store'])->name('group.store');

Route::get('/group/edit/{id}', [GroupAccountController::class, 'edit'])->name('group.edit');

Route::put('/group/update/{id}', [GroupAccountController::class, 'update'])->name('group.update');



Route::get('/group/destroy/{id}', [GroupAccountController::class, 'destroy'])->name('group.destroy');

Route::get('/group', [GroupAccountController::class, 'index'])->name('group');

