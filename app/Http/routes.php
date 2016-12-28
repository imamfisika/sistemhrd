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

Route::get('/', function () {
  if (Auth::check())
{
    // The user is logged in...
    return redirect('/home');
}
else
    return view('depan1');
//  return 'tes atu dua <br> tiga';
});



Route::get('crewing_login', function() {
  $data = 'Crewing';
  if (Auth::check())
{
    // The user is logged in...
    return redirect('/home');
}
else
  return view('login', compact('data'));
});

Route::get('gaf_login', function() {
  $data = 'General Affair';
  return view('login', compact('data'));
});


Route::get('training_login', function () {
  $data = 'Training';
  if (Auth::check())
{
    // The user is logged in...
    return redirect('/home');
}
else
  return view('login', compact('data'));
});

/*
Route::get('login_1', function () {

  if (Auth::check())
{
    // The user is logged in...
    return redirect('/home');
}
else
  return view('login');
}); */


Route::get('login', function()
   {
       // show the login page (app/views/login.blade.php)
       return view('login');
   });

Route::post('login', 'loginController@doLogin');

//Route::group(['middleware' => 'web'], function () {
//Route::auth();

  Route::get('/home', 'HomeController@index');

  Route::get('logout', array('uses' => 'loginController@doLogout'));


//});



//Route::post('login', array('uses' => 'proseslogin@doLogin'));
