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

// Route controller
Route::resource('Company', 'CompanyController');
Route::resource('Country', 'CountryController');


// Test some route
Route::get('/san-pham/{name}/{id}', function($name,$id)
{
	echo 'Bạn đang xem sản phẩm '.$name.' có ID= '.$id;
});
