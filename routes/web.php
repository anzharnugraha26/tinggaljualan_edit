<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;


// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'FrontEndController@index');
Route::get('/about', 'FrontEndController@about');
Route::get('/services', 'FrontEndController@service');
Route::get('/service-detail/{id}', 'FrontEndController@serviceDetail');
Route::get('/blog', 'FrontEndController@blog');
Route::get('/contact-us', 'FrontEndController@contactUs');
Route::get('/detail-blog', 'FrontEndController@detailBlog');
Route::get('/portfolio', 'FrontEndController@portfolio');
Route::get('download-pdf', 'FrontEndController@downloadPDF');
Route::post('/saveorder', 'FrontEndController@saveOrder');
Route::post('/saveSubs', 'FrontEndController@saveSubs');
Route::post('/subIndex', 'FrontEndController@saveSubsIndex');
Route::post('/sendcontact', 'FrontEndController@sendContact');


Auth::routes(['verify' => true]);

// Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth', 'checkRole:admin']], function () {
    Route::get('/admin', 'BackEndController@index');
    Route::get('/admin/orders', 'BackEndController@order');
    Route::get('/admin/contact-us', 'BackEndController@contactUs');
    Route::get('/admin/blog', 'BackEndController@blog');
    Route::get('/admin/blog/create-content-blog', 'BlogController@create');
    Route::post('/saveblog', 'BlogController@store');
    Route::post('/save/category', 'BlogController@saveCat');
    Route::get('/admin/categories', 'BackEndController@categories');
    Route::get('/admin/categories/{id}', 'BackEndController@categoriesUpdate');
    Route::post('/admin/categories/update/{id}', 'BackEndController@update');
});
Route::get('/logout', 'HomeController@logout');
