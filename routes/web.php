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
Route::get('/admin',function (){

    return view('admin.index');
});
Route::get('admin/studentadmit',function (){

    return view('admin.admitstudent');
});
//Route::group(['middleware'=>'admin'],function (){
//
//});

Route::resource('/admin/parents','ParentsController');
Route::resource('/admin/teachers','TeacherController');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::post('/language-chooser','LanguageController@chnageLanguage');
Route::post('/language',array(
    'before'=>'csrf',
    'as'    =>'language-chooser',
    'uses'  =>'LanguageController@changeLanguage',
));
