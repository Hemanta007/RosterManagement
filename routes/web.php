<?php

Route::get('/', function () {
    return view('welcome');
});

Route::group(['middleware' => 'visitors'], function(){
	
	Route::get('/login', 'LoginController@login');
	Route::post('/login', 'LoginController@postLogin');
	Route::get('/forgot-password', 'ForgotPasswordController@forgotPassword');
	Route::post('/forgot-password', 'ForgotPasswordController@postforgotPassword');

	Route::get('/reset/{email}/{resetCode}', 'ForgotPasswordController@resetPassword');
	Route::post('/reset/{email}/{resetCode}', 'ForgotPasswordController@postResetPassword');
});

Route::get('/authentication/login', 'LoginController@login');

Route::post('/logout', 'LoginController@logout');

Route::get('/userslist', 'AdminController@usersList');

Route::get('/roster', 'AdminController@roster');

Route::get('/register-admin', 'Super_AdminController@register')->middleware('super_admin');;
Route::post('/register-admin', 'Super_AdminController@postRegister')->middleware('super_admin');;

Route::get('/register-user', 'AdminController@register')->middleware('admin');
Route::post('/register-user', 'AdminController@postRegister')->middleware('admin');

Route::get('/super_admin', 'Super_AdminController@super_admin')->middleware('super_admin');

Route::get('/admin', 'AdminController@admin')->middleware('admin');
Route::get('/userslist', 'AdminController@getuser')->middleware('admin');

Route::get('/activate/{email}/{activationCode}', 'ActivationController@activate');