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
// How to retrive or loading data or view in laravel.
//Route::get('/', function () {
    //return view('welcome');
    //return base_path();
    //return view('welcome');

    //return view('demo');

    //return "Hello Bangladesh";

//     $data=[
//         0=>['name'=>'habib',
//             'city'=>'Dhaka',
//             'country'=>'Bangladesh',
//           ],
//
//         1=>['name'=>'Rahad',
//             'city'=>'Barisal',
//             'country'=>'Bangladesh',
//             ],
//
//     ];
// return $data;

// Route::get('/profile',function(){
//
//   return "Bangladesh";
// });




//});
Auth::routes();

Route::get('/','WelcomeController@index');

Route::get('/electronics','WelcomeController@electronics');

Route::get('/contact','WelcomeController@contact');

Route::get('/single','WelcomeController@single');


Route::get('/women','WelcomeController@women');

Route::get('/men','WelcomeController@men');

Route::get('/checkout','WelcomeController@checkout');



Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/deshboar', 'HomeController@index');

//Route::get('/logout', 'HomeController@logout');
//here use this code for logout 
Route::get('logout', '\App\Http\Controllers\Auth\LoginController@logout');
