<?php

// INDEX / HOME
Route::get('/', ['as' => 'index', 'uses' => 'HomeController@index']);

// REGISTER / SIGN UP
Route::get('register', ['as' => 'register', 'uses' => 'HomeController@register']);

// PRODUCTS
Route::group(['prefix' => 'product'], function () {
    Route::get('pricing', 	['as' => 'pricing', 	'uses' => 'ProductController@pricing']);
    Route::get('features', 	['as' => 'features', 	'uses' => 'ProductController@features']);
    Route::get('customers', ['as' => 'customers', 	'uses' => 'ProductController@customers']);
});

// COMPANY
Route::group(['prefix' => 'company'], function () {
    Route::get('about-us', 	['as' => 'about-us', 	'uses' => 'CompanyController@aboutUs']);
    Route::get('blog', 		['as' => 'blog', 		'uses' => 'CompanyController@blog']);
    Route::get('press', 	['as' => 'press', 		'uses' => 'CompanyController@press']);
    Route::get('contact', 	['as' => 'contact', 	'uses' => 'CompanyController@contact']);
});

// HELP
Route::group(['prefix' => 'help'], function () {
    Route::get('getting-started', 	['as' => 'getting-started', 'uses' => 'HelpController@gettingStarted']);
    Route::get('support', 			['as' => 'support', 		'uses' => 'HelpController@support']);
    Route::get('feedback', 			['as' => 'feedback', 		'uses' => 'HelpController@feedback']);
    Route::get('network-status', 	['as' => 'network-status', 	'uses' => 'HelpController@networkStatus']);
});