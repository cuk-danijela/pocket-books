<?php

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

Auth::routes(['verify' => true]);

Route::get('/firebase','FirebaseController@index');

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/admin', function () {
    return "Admin";
})->middleware(['auth', 'auth.admin']);

Route::get('admin/users/profile', 'Admin\UserController@profile')->name('admin.users.profile')->middleware('verified');

Route::resource('products', 'ProductController');
// Route::resource('/users', 'Admin\UserController', ['except' => 'show', 'create', 'store']);

Route::namespace('Admin')->prefix('admin')->middleware(['auth', 'auth.admin'])->name('admin.')->group(function () {
    Route::resource('/users', 'UserController', ['except' => ['show', 'create', 'store']]);
    Route::get('/impersonate/user/{id}', 'ImpersonateController@index')->name('impersonate');
});
/* Impresonate user */
Route::get('/admin/impersonate/destroy', 'Admin\ImpersonateController@destroy')->name('admin.impersonate.destroy');
/* Upload image */
Route::get('products/edit{id}', 'ProductController@update');

/* Password Reset Routes */
// Route::get('password/reset/{token?}', 'Auth\ResetPasswordController@showResetForm');
// Route::post('password/email', 'Auth\ResetPasswordController@sendResetLinkEmail');
// Route::post('password/reset', 'Auth\ResetPasswordController@reset');
