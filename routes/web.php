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
/*
Route::get('/', function () {
    return view('welcome');
});

Route::get('/test1', function () {
    return 'welcome';
});

Route::get('/test2/{id}', function () {
    return $id;
});
Route::get('/test3/{id?}', function () {
    return 'welcome';
});
*/
//controller
/*
Route::group(['namespace'=>'Admin'],function (){
    Route::get('second','SecondController@showstring')->middleware('auth');
});
//Route::get('login',function (){
//return "must login";
//})->name('login');
Route::resource('news','Newscontroller');

*/
////////////////////////////////////////////////////////////////////////*
/*Route::get('/landing', function () {

    return view('landing');

});
Route::get('/about', function () {
    return view('about');

});

Route::get('/index','Front\FirstController@getindex');
*/
Auth::routes(['verify'=>true]);

Route::get('/home', 'HomeController@index')->name('home')->middleware('verified');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
