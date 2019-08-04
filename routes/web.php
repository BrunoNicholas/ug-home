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
Route::get('details', [
	'as' 	=> 'more.details',
	'uses'	=> function(){
		return view('web.more');
	}
]);

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['prefix'	=> 'admin', 'middleware'	=> ['auth','verified']], function()
{
	Route::resource('/users', 'UserController');
});

Route::group(['prefix' => 'admin', 'middleware' => ['auth','verified','role:super-admin|admin']], function(){
	Route::resource('/roles', 'RoleController');
	/** closure pages */
	Route::get('/', [
		'as' 	=> 'admin',
		'uses'	=> 'AdminPageController@index',
	]);
});

Route::group(['prefix'	=> 'admin', 'middleware'	=> ['auth','verified']], function()
{
	Route::resource('/users', 'UserController');
});

Route::group(['prefix' => 'home', 'middleware' => ['auth','verified']], function(){
	Route::resource('/questions', 'QuestionController');
	Route::resource('setings/{type}/{id}/comments', 'CommentController');
	Route::resource('buying/organisations', 'OrganisationController');
	Route::resource('/land/posts', 'PostController');
	Route::resource('land/titles', 'LandTileController');




	Route::get('/land/settings', [
		'as' 	=> 'user.home',
		'uses'	=> 'UserPageController@index',
	]);
	Route::get('/user', [
		'as' 	=> 'home.user',
		'uses'	=> 'UserPageController@home',
	]);
	Route::get('/user/profile/settings', [
		'as' 	=> 'settings',
		'uses'	=> 'UserPageController@settings',
	]);
	Route::get('/user/profile', [
		'as' 	=> 'profile',
		'uses'	=> 'UserPageController@profile',
	]);
	Route::post('/user/profile', [
		'as'	=> 'profile.update',
		'uses'	=> 'UserPageController@update_image'
	]);
	Route::post('/user/password/profile', [
		'as'	=> 'password.update',
		'uses'	=> 'UserController@changePassword'
	]);
	
});
