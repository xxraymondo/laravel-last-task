<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::group(
    [

        'namespace' =>'App\Http\Controllers',
        'middleware' => 'api',
    ],
    function(){
        Route::group(
            [
                'prefix'=>'auth'
            ],
            function(){
                Route::post('register','AuthController@register');
                Route::post('login','AuthController@login');
                    }
                );
Route::group(
    [
        'prefix'=>'deliveries'
    ],
    function(){
        Route::get('/','DeliveryController@index');
        Route::post('/','DeliveryController@create');
        Route::put('/','DeliveryController@update');
        Route::delete('/{id}','DeliveryController@delete');


            }
        );
        Route::group(
            [
                'prefix'=>'resturants'
            ],
            function(){
                Route::get('/','ResturantController@index');
                Route::post('/','ResturantController@create');
                Route::put('/','ResturantController@update');
                Route::delete('/{id}','ResturantController@delete');


                    }
                );

                Route::group(
                    [
                        'prefix'=>'orders'
                    ],
                    function(){
                        Route::get('/','OrderController@index');
                        Route::post('/','OrderController@create');
                        Route::put('/','OrderController@update');
                        Route::delete('/{id}','OrderController@delete');


             }
         );
    }
);
