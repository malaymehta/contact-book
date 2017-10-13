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
    return redirect()->to('/home');
});



Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/contact/add-new', 'ContactController@showForm')->name('addnew');
Route::post('/contact/save', 'ContactController@save')->name('save_contact');
Route::get('/contact/edit/{id}', 'ContactController@showForm')->name('edit_contact');
Route::get('/contact/delete/{id}', 'ContactController@delete')->name('delete_contact');
Route::get('/contact/delete/{id}/confirmed', 'ContactController@deleteConfirmed')->name('delete_contact_confirmed');