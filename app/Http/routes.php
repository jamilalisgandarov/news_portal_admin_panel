<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/




Route::group(['middleware'=>['web','auth']],function (){
Route::get('/', 'MainController@getData');
Route::get('/requests', 'MainController@showRequests');
Route::get('/delete/{author}', 'MainController@delete');

Route::get('/adminLogin', function () {
    return view('adminPanel.login');
});
Route::get('/home/{user}', 'HomeController@index');
Route::get('/insert/{author}','MainController@insert');
});
Route::get('/authorRegistration', function () {
    return view('registrationForm.register');});
Route::post('/authorRegistration/submitted', 'MainController@register');
Route::auth();


