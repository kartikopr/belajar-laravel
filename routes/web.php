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

Route::get('/', 'PagesController@home');
Route::get('/about', 'PagesController@about');

Route::get('/mahasiswa', 'MahasiswaController@index');

// //Route untuk ke halaman student
// Route::get('/students', 'StudentsController@index');

// //Route untuk ke halaman tambah data
// Route::get('/students/create', 'StudentsController@create');

// //Route untuk ke halaman menampilkan detail data
// Route::get('/students/{student}', 'StudentsController@show');

// //Route untuk menyimpan data
// Route::post('/students', 'StudentsController@store');

// //route untuk menghapus data
// Route::delete('/students/{student}', 'StudentsController@destroy');

// //Route mengirim data 
// Route::patch('/students/{student}', 'StudentsController@update');

// //route untuk mengedit data
// Route::get('/students/{student}/edit', 'StudentsController@edit');

Route::resource('students','StudentsController');



