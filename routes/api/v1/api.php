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

    //Get a book
    Route::get('/book/{id}', 'api\v1\InventoryController@getBook');

    //Get all books
    Route::get('/book', 'api\v1\InventoryController@getBooks');


//  Create a new equipment
    Route::post('/equipment', 'api\v1\InventoryController@createEquipment');

    //Update a equipment
    Route::put('/equipment/{id}', 'api\v1\InventoryController@updateEquipment');

    //Delete a equipment
    Route::delete('/equipment/{id}', 'api\v1\InventoryController@deleteEquipment');

    //Get a equipment
    Route::get('/equipment/{id}', 'api\v1\InventoryController@getEquipment');

    //Get all equipments
    Route::get('/equipment', 'api\v1\InventoryController@getEquipments');
});

//Creating a log
Route::get('add-to-log', 'api\v1\LogController@myTestAddToLog');

//Getting the events on a log
Route::get('logActivity', 'api\v1\LogController@logActivity');

//Statistics for books and equipments
Route::prefix('/statistics')->group(function () {
//  Filter rented books
    Route::get('/books/rented/{period}', 'api\v1\StatisticsController@rentedBook');

    //Filter returned books
    Route::get('/books/returned/{period}', 'api\v1\StatisticsController@returnedBook');


});
