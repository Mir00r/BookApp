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

/*
Route::get('/', function () {
    return view('welcome');
});
*/


/*
Route::get('/', function () {
	return ' <center> <a href = "/dennis">Go to Dennis Richi</a> <br> <h1>Welcome to the Abdur Razzak\'s World </h1> </center>';
});

Route::get('/dennis', function () {
	return '  <center> <a href = "/">Back to Home</a> <br> <h1>The Father of C/C++ Programming Language <br></h1> <img src = "http://media.slated.org/albums/userpics/10002/dennis_ritchie.png" alt = "dennis"> </center>';
});

*/


/*
    // Example Basic Controller
get('library', 'sectionController@index');

get('library/create', 'sectionController@createSection');

post('library/create', 'sectionController@SaveNewSection' );

get('library/{sectionName}', 'sectionController@ShowSection');

get('library/{sectionName}/edit', 'sectionController@EditSection');

patch('library/{sectionName}/edit', 'sectionController@SaveEditSection');

delete('library/{sectionName}/delete', 'sectionController@DeleteSection');
*/

// Resfull Controller Example

//Route::controller('library', 'sectionController');

// Example ResourceFull Controller 

Route::resource('library', 'sectionControllerTwo');
Route::resource('admin', 'sectionControllerTwo@adminController');


// Authentication routes
get('auth/login', 'Auth\AuthController@getLogin');
post('auth/login', 'Auth\AuthController@postLogin');
get('auth/logout', 'Auth\AuthController@getLogout');

// Registration routes
get('auth/register', 'Auth\AuthController@getRegister');
post('auth/register', 'Auth\AuthController@postRegister');

// Password reset link request routes...
get('password/email', 'Auth\PasswordController@getEmail');
post('password/email', 'Auth\PasswordController@postEmail');

// Password reset routes...
get('password/reset/{token}', 'Auth\PasswordController@getReset');
post('password/reset', 'Auth\PasswordController@postReset');

/*
Route::get('auth/facebook', 'Auth\AuthController@redirectToProvider');	
Route::get('/callback', 'Auth\AuthController@handleProviderCallback');

// Just a dummy page to demonstrate the authentication (or lack of).
get('/', function()
{
    if (Auth::check()) return 'Welcome back, '  . Auth::user()->username;
    return 'Hi guest. ' . link_to('library', 'Login With Github!');
});
// Login a user with GitHub (or any provider).
get('library', 'AuthController@Library');

*/



//Route::get('login/{provider?}', 'Auth\AuthController@login');

//Route::get('easyAuth/{provider?}', 'Auth\AuthController@login');