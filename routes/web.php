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
Route::get('/',function(){
    return "atmiya university welcomes you";
});
Route::prefix('admin')->group(function (){
    Route::get('/{name?}', 'CMSController@index');
    Route::get('/about', 'CMSController@about')->name('about');
    Route::get('/service', 'CMSController@service');
    Route::get('/contactus', 'CMSController@contact');
});

//Route::get('user/{id}','TestController@index')->where('id','[0-9]+')->name('profile');
//Route::get('category/1/product/{pid?}','TestController@display')->name('product');

//Route Methods
/*
Route::get('student','TestController@index');
Route::get('student/create','TestController@create');
Route::post('student/store','TestController@store')->name('student_add');
Route::get('student/{id}','TestController@show');*/

/*Route::get('student','StudentController@index');
Route::get('student/create','StudentController@create');
Route::post('student/store','StudentController@store')->name('student.store');
Route::get('student/{id}','StudentController@show');
Route::get('student/{id}/edit','StudentController@edit');
Route::post('student/{id}','StudentController@update')->name('student.update');*/

Route::resource('student','StudentController');
