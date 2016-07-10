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

//========================== Category =============================

Route::get('/category','CategoriesController@showall');
Route::get('/category/{catId}','CategoriesController@show');
Route::get('/add/category','CategoriesController@create');
Route::post('/add/store','CategoriesController@store');
Route::get('/edit/{catId}/category','CategoriesController@edit');
Route::patch('/update/{catId}/category','CategoriesController@update');
Route::get('/delete/{catId}/category','CategoriesController@destroy');

Route::get('/select','CategoriesController@select');

//========================== SubCategory =============================

Route::get('/add/{catId}/subcategory','SubCategoriesController@create');
Route::post('/store/{catId}/subcategory','SubCategoriesController@store');
Route::get('/edit/{catId}/subcategory','SubCategoriesController@edit');
Route::patch('/update/{catId}/subcategory','SubCategoriesController@update');
Route::get('/delete/{catId}/subcategory','SubCategoriesController@destroy');
