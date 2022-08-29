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

//Managing books and equipments
Route::prefix('/inventory')->group(function () {
//  Create a new book
    Route::post('/book', 'api\v1\InventoryController@createBook');

    //Update a book
    Route::put('/book/{id}', 'api\v1\InventoryController@updateBook');


    //Delete a book
    Route::delete('/book/{id}', 'api\v1\InventoryController@deleteBook');


    // Add a LGA
    Route::post('/lga', 'api\v1\InventoryController@addLGA');

    //Delete a LGA
    Route::delete('/lga/{id}', 'api\v1\InventoryController@deleteLGA');


});
