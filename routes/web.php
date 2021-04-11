<?php

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

 
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('auth/google', 'Auth\GoogleController@redirectToGoogle');
Route::get('auth/google/callback', 'Auth\GoogleController@handleGoogleCallback');

Route::get('auth/github', 'Auth\GitHubController@gitRedirect');
Route::get('auth/github/callback', 'Auth\GitHubController@gitCallback');


Route::get('/UserData', [App\Http\Controllers\UserDataController::class, 'GetUserData'])->name('list.userdata');

Route::get('/AddUserData', [App\Http\Controllers\UserDataController::class, 'UserDataShow'])->name('add.userdata');

Route::post('/SaveUserData', [App\Http\Controllers\UserDataController::class, 'SaveUserData'])->name('save.userdata');

Route::get('/ViewUserData/{id}', [App\Http\Controllers\UserDataController::class, 'ViewUserData'])->name('view.userdata');

Route::get('/Edit/{id}', [App\Http\Controllers\UserDataController::class, 'EditUserData'])->name('edit.userdata');

Route::post('/UpdateUserData', [App\Http\Controllers\UserDataController::class, 'UpdateUserData'])->name('update.userdata');

Route::get('/UserDataMassDelete',[App\Http\Controllers\UserDataController::class,'TruncateUserData'])->name('truncate.userdata');

Route::get('/UserDataDelete',[App\Http\Controllers\UserDataController::class, 'DeleteUserData'])->name('delete.userdata');

