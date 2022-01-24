<?php

use App\Http\Controllers\UserrController;
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
    return view('welcome');
});
Route::get('admin/dashboard', function(){
    return view('admin.dashboard');
});
Route::get('/user', function(){
    return view('user.index');
});
// Route::get('/admin/dashboard/users', [UserAdminController::class, 'index'])->name('user.index');
// Route::get('/admin/dashboard/user/users-list', [UserAdminController::class, 'userList'])->name('user.list');
// Route::get('/admin/dashboard/user/add-user', [UserAdminController::class, 'addUser'])->name('user.add');
// Route::get('/admin/dashboard/user/add-user', [UserAdminController::class, 'saveUser'])->name('user.save');
Route::delete('/user/destroy/{id}', [UserrController::class, 'destroyById'])->name('user.destroyById');
Route::resource('/user', UserrController::class);


