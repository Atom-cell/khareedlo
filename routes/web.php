<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;
use App\Http\Controllers\adminController;


// Route::get('/', function () {
//     return view('welcome');
// });

        Route::get('/', 'App\Http\Controllers\userController@home'); 


        Route::get('/admin', 'App\Http\Controllers\adminController@admin'); 

Route::get('/home','App\Http\Controllers\userController@home');

        Route::get('/orders', 'App\Http\Controllers\adminController@orders');

        Route::get('/complete/{id}', 'App\Http\Controllers\adminController@completeOrders');

        Route::post('/sort', 'App\Http\Controllers\adminController@sort');


        Route::get('/customerDisplay', 'App\Http\Controllers\adminController@customerdisplay');


        Route::get('/addProduct', 'App\Http\Controllers\adminController@addPage');

        Route::post('/add', 'App\Http\Controllers\adminController@addProduct');

// Route::get('/productPage', 'App\Http\Controllers\maleController@PPage');
Route::get('/productPage/{gender}', 'App\Http\Controllers\userController@PPage');

Route::get('/main/{gender}/{category}','App\Http\Controllers\userController@main');



// Route::get('/view','App\Http\Controllers\userController@view');
        Route::get('/view/{gender}/{category}','App\Http\Controllers\adminController@view');
        
        Route::get('/viewShoes/{category}','App\Http\Controllers\adminController@viewShoes');

        

Route::get('/search','App\Http\Controllers\userController@search');
Route::post('/search','App\Http\Controllers\userController@searchQ');


        Route::get('/edit/{id}/{size}', 'App\Http\Controllers\adminController@viewProduct');


        Route::get('/delete/{id}/{size}', 'App\Http\Controllers\adminController@delete'); 


        Route::post('/update/{id}', 'App\Http\Controllers\adminController@updateProduct');

Route::get('/description','App\Http\Controllers\userController@descp');

Route::get('/cart', 'App\Http\Controllers\userController@cart');
Route::get('/checkout', 'App\Http\Controllers\userController@checkout');
Route::post('/checkout', 'App\Http\Controllers\userController@checkout_store');
Route::get('/thankyou', 'App\Http\Controllers\userController@thankyou');




Route::post('/addToCart/{id}', 'App\Http\Controllers\userController@addToCart');

Route::get('deleteItem/{id}','App\Http\Controllers\userController@deleteItem');



Route::get('/login', 'App\Http\Controllers\userController@login');
Route::get('/logout', 'App\Http\Controllers\userController@logout');


Route::post('/login', 'App\Http\Controllers\userController@matchUser');

Route::get('/signup', 'App\Http\Controllers\userController@signup');
Route::post('/signup', 'App\Http\Controllers\userController@storeUser');

Route::get('/forgetPassword', 'App\Http\Controllers\userController@forgetPassword');
Route::post('/resetPassword', 'App\Http\Controllers\userController@resetPassword');

Route::get('/account', 'App\Http\Controllers\userController@account');

Route::get('/editAccount', 'App\Http\Controllers\userController@editAccount');
Route::post('/editUserAccount', 'App\Http\Controllers\userController@saveEditAccount');











