<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::prefix('/inventory')->group(function () {
//    Get all inventory
    Route::get('/', 'api\v1\InventoryController@getState');

//  Create a new book / equipment
    Route::post('/create_book', 'api\v1\InventoryController@createBook');

    // Add a LGA
    Route::post('/lga', 'api\v1\InventoryController@addLGA');

    //Delete a LGA
    Route::delete('/lga/{id}', 'api\v1\InventoryController@deleteLGA');


});
