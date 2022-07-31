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


// auth
// Authentication routes...
Route::get('login', 'Auth\AuthController@getLogin');
Route::post('login', 'Auth\AuthController@postLogin');
$this->get('logout', 'Auth\AuthController@logout');



//beranda
Route::get('/', 'HomeController@index');


// auth
Route::group(['middleware' => ['auth']], function () {


  Route::group(['namespace' => 'Dashboard'], function() {
    Route::get('dashboard', 'DashboardController@index');
    // profile
    Route::resource('dashboard/profile', 'ProfileController');

//kawasan pengguna / user
    Route::group(['namespace' => 'Pengguna'], function() {
    Route::group(['middleware' => ['role:user']], function () {
        Route::resource('dashboard/pengguna/req-admin', 'RequestAdminController');

      });
    });

//kawasan Admin
Route::group(['middleware' => ['role:admin']], function () {
  //  Route::group(['middleware' => ['role:admin']], function () {
      //API User
      Route::post('api/user', 'UserController@getData');
      //users
      Route::resource('dashboard/users', 'UserController');
  //  });
      Route::post('api/video', 'VideoController@getData');
      Route::resource('dashboard/videos', 'VideoController');
     
    //  Route::group(['middleware' => 'admin'], function() {
     

          // request to admin
         // Route::delete('users/{id}', 'UserController@destroy')->name('users.destroy');
          Route::get('dashboard/myrequestedit/{id}', 'RequestAdminController@update');
         
          Route::resource('dashboard/myrequest', 'RequestAdminController');
    //});
      });
  });
});
