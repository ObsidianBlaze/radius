<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Books;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InventoryController extends Controller
{
    //creating a book
    public function createBook(Request $request){
        //Validating and storing a users data in a variable
        $validate = Validator::make($request->all(), [
            'name' => 'bail|required|string',
            'isbn' => 'bail|required|string'
            //Note the bail keyword is used to terminate the validation if one of the fields does not meet the requirement.
        ]);

        //Returning an error when the user provides wrong data.
        if ($validate->fails())

            //Response if the users input does not match the validation.
            return response()->json(
                [
                    "status" => "false",
                    "message" => $validate->errors(),
                ], 400);

        //Creating an instance of the subcategory model.
        $books = new Books();


//        Saving the book
        $books->name = $request->name;
        $books->isbn = $request->isbn;

        //Sending the validated data to the database.
        $books->save();

        //Response if the book is created.
        return response()->json(
            [
                "status" => "true",
                "message" => "book created.",
                "data" => $books
            ], 201);
    }
}