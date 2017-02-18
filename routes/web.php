<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| This file is where you may define all of the routes that are handled
| by your application. Just tell Laravel the URIs it should respond
| to using a Closure or controller method. Build something great!
|
*/

// Admin
Route::group(['middleware' => 'auth'], function () {

// Promos anad Events Routes
	Route::get('admin/subscribers', 'Admin\SubscribersController@index');



	Route::get('admin/bill-a-subscriber', 'Admin\BillController@index');
	Route::get('admin/bill-a-subscriber/insert', 'Admin\BillController@form');
	Route::get('admin/bill-a-subscriber/update/{id}', 'Admin\BillController@form');

	Route::post('admin/bill-a-subscriber/getaddress/{id}', 'Admin\BillController@getAddress');
	Route::post('admin/bill-a-subscriber/store', 'Admin\BillController@store');
	Route::post('admin/bill-a-subscriber/update/{id}', 'Admin\BillController@update');
	
	Route::get('admin/categories', 'Admin\CategoryController@index');
	Route::get('admin/categories/insert', 'Admin\CategoryController@form');
	Route::get('admin/categories/update/{id}', 'Admin\CategoryController@form');
	
	Route::post('admin/categories/store', 'Admin\CategoryController@store');
	Route::post('admin/categories/update/{id}', 'Admin\CategoryController@update');

	


	Route::get('admin', 'Admin\HomeController@index');
});

// SITE

// Route::post('/registration', 'ApiController@registration');
// Route::get('/', 'PagesController@index');
// Route::get('/about-us', 'PagesController@about');
// Route::get('/faqs', 'PagesController@faqs');
// Route::get('/places-to-stay', 'PagesController@places');
// Route::get('/our-residences', 'PagesController@residence');
// Route::get('/where-to-eat', 'PagesController@eat');
// Route::get('/getting-to-us', 'PagesController@getting');

// Route::get('/promos', 'PagesController@promos');
// Route::get('/promos/{slug}', 'PagesController@promosInner');


// Route::get('/events', 'PagesController@promos');
// Route::get('/events/{slug}', 'PagesController@promosInner');

// Route::get('/whats-new', 'PagesController@whatsnew');
// Route::get('/whats-new/{slug}', 'PagesController@whatsnewInner');

// Route::get('/things-to-do', 'PagesController@things');

// Route::get('/contact-us', 'PagesController@contact');

// Route::get('/virtual-tour', 'PagesController@virtual');

// Route::get('/book-now', 'PagesController@booking');

// Route::post('/send', 'PagesController@send');

// Route::get('/search/{slug}', 'PagesController@search');

// User Routes

Auth::routes();

Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
