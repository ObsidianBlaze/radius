<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Books;
use App\Models\Equipments;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class InventoryController extends Controller
{
    //creating a book
    public function createBook(Request $request)
    {
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

        //Creating an instance of the book model.
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

    //update a book
    public function updateBook(Request $request, $id)
    {
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

        //Checking if an id exist
        $book = Books::find($id);
        if ($book) {
            //updating the book
            $book->fill([
                'name' => $request->name,
                'isbn' => $request->isbn,
            ]);

            //Updating the book
            $book->save();

            //Response if book exists.
            return response()->json(
                [
                    "status" => "true",
                    "message" => "book Updated Successfully.",
                    "data" => $book
                ]);
        } else {
            //Response if the book does not exist in the database
            return response()->json(
                [
                    "status" => "false",
                    "message" => "book does not exist.",
                    "data" => []
                ], 404);

        }
    }

    //Delete a book
    public function deleteBook($id)
    {
        //Checking if an id exist
        $book = Books::find($id);

        if ($book) {
            //Deleting the book
            $book->delete($id);
            //Response if book exists.
            return response()->json(
                [
                    "status" => "true",
                    "message" => "book deleted.",
                    "data" => []
                ]);
        } else {
            //Response if the book does not exist in the database
            return response()->json(
                [
                    "status" => "false",
                    "message" => "book does not exist.",
                    "data" => [],
                ], 404);
        }

    }

    //Get a single book
    public function getBook($id)
    {
        //Checking if an id exist
        $book = Books::find($id);
        if ($book) {
            //Response if book exists.
            return response()->json(
                [
                    "status" => "true",
                    "message" => "",
                    "data" => $book
                ]);

        } else {
            //Response if the book does not exist in the database
            return response()->json(
                [
                    "status" => "false",
                    "message" => "book does not exist.",
                    "data" => []
                ], 404);
        }
    }

    //Get all books
    public function getBooks()
    {
        $books = Books::all();

        return response()->json([
            "status" => "true",
            "message" => "",
            "data" => $books
        ]);
    }


    //creating an equipment
    public function createEquipment(Request $request)
    {
        //Validating and storing a users data in a variable
        $validate = Validator::make($request->all(), [
            'name' => 'bail|required|string',
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

        //Creating an instance of the equipment model.
        $equipments = new Equipments();


//        Saving the equipment
        $equipments->name = $request->name;

        //Sending the validated data to the database.
        $equipments->save();

        //Response if the equipment is created.
        return response()->json(
            [
                "status" => "true",
                "message" => "equipment created.",
                "data" => $equipments
            ], 201);
    }

    //update a book
    public function updateEquipment(Request $request, $id)
    {
        //Validating and storing a users data in a variable
        $validate = Validator::make($request->all(), [
            'name' => 'bail|required|string',
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

        //Checking if an id exist
        $equipment = Equipments::find($id);
        if ($equipment) {
            //updating the book
            $equipment->fill([
                'name' => $request->name,
            ]);

            //Updating the equipment
            $equipment->save();

            //Response if equipment exists.
            return response()->json(
                [
                    "status" => "true",
                    "message" => "Equipment Updated Successfully.",
                    "data" => $equipment
                ]);
        } else {
            //Response if the equipment does not exist in the database
            return response()->json(
                [
                    "status" => "false",
                    "message" => "equipment does not exist.",
                    "data" => []
                ], 404);

        }
    }

    //Delete a book
    public function deleteEquipment($id)
    {
        //Checking if an id exist
        $equipment = Equipments::find($id);

        if ($equipment) {
            //Deleting the equipment
            $equipment->delete($id);
            //Response if equipment exists.
            return response()->json(
                [
                    "status" => "true",
                    "message" => "equipment deleted.",
                    "data" => []
                ]);
        } else {
            //Response if the equipment does not exist in the database
            return response()->json(
                [
                    "status" => "false",
                    "message" => "equipment does not exist.",
                    "data" => [],
                ], 404);
        }

    }

    //Get a single book
    public function getEquipment($id)
    {
        //Checking if an id exist
        $equipment = Equipments::find($id);
        if ($equipment) {
            //Response if equipment exists.
            return response()->json(
                [
                    "status" => "true",
                    "message" => "",
                    "data" => $equipment
                ]);

        } else {
            //Response if the equipment does not exist in the database
            return response()->json(
                [
                    "status" => "false",
                    "message" => "equipment does not exist.",
                    "data" => []
                ], 404);
        }
    }

    //Get all books
    public function getEquipments()
    {
        $equipments = Equipments::all();

        return response()->json([
            "status" => "true",
            "message" => "",
            "data" => $equipments
        ]);
    }

}
