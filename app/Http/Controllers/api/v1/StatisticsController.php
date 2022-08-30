<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\LogActivities;
use Carbon\Carbon;

class StatisticsController extends Controller
{
    public function rentedBook($period)
    {
//        NOTE: actionId 1 means that the book was rented while 2 means returned
        switch ($period) {
            case "January":
                $month = Carbon::createFromFormat('m', 1);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 1])->whereNotNull('bookId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books rented in %s is %s", $period, count($months)),
                    ]);

            case "Feburary":
                $month = Carbon::createFromFormat('m', 2);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 1])->whereNotNull('bookId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books rented in %s is %s", $period, count($months)),
                    ]);

            case "March":
                $month = Carbon::createFromFormat('m', 3);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 1])->whereNotNull('bookId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books rented in %s is %s", $period, count($months)),
                    ]);

            case "April":
                $month = Carbon::createFromFormat('m', 4);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 1])->whereNotNull('bookId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books rented in %s is %s", $period, count($months)),
                    ]);

            case "May":
                $month = Carbon::createFromFormat('m', 5);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 1])->whereNotNull('bookId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books rented in %s is %s", $period, count($months)),
                    ]);

            case "June":
                $month = Carbon::createFromFormat('m', 6);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 1])->whereNotNull('bookId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books rented in %s is %s", $period, count($months)),
                    ]);

            case "July":
                $month = Carbon::createFromFormat('m', 7);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 1])->whereNotNull('bookId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books rented in %s is %s", $period, count($months)),
                    ]);

            case "August":
                $month = Carbon::createFromFormat('m', 8);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 1])->whereNotNull('bookId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books rented in %s is %s", $period, count($months)),
                    ]);

            case "September":
                $month = Carbon::createFromFormat('m', 9);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 1])->whereNotNull('bookId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books rented in %s is %s", $period, count($months)),
                    ]);

            case "October":
                $month = Carbon::createFromFormat('m', 10);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 1])->whereNotNull('bookId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books rented in %s is %s", $period, count($months)),
                    ]);

            case "November":
                $month = Carbon::createFromFormat('m', 11);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 1])->whereNotNull('bookId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books rented in %s is %s", $period, count($months)),
                    ]);

            case "December":
                $month = Carbon::createFromFormat('m', 12);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 1])->whereNotNull('bookId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books rented in %s is %s", $period, count($months)),
                    ]);


            default:
                try {
                    $year = Carbon::createFromFormat('Y', $period);
                    $years = LogActivities:: whereYear('created_at', $year->year)->where(["actionId" => 1])->whereNotNull('bookId')->get();
                    return response()->json(
                        [
                            "status" => "true",
                            "message" => sprintf("Total books rented in %s is %s", $period, count($years)),
                        ]);

                } catch (\Exception $exception) {
                    return response()->json(
                        [
                            "status" => "false",
                            "message" => "Kindly check the spelling of the month or input a year. E.G 2022",
                        ], 400);
                }

        }

    }

    //Total returned book.
    public function returnedBook($period){
        //        NOTE: actionId 1 means that the book was rented while 2 means returned
        switch ($period) {
            case "January":
                $month = Carbon::createFromFormat('m', 1);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 2])->whereNotNull('bookId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books returned in %s is %s", $period, count($months)),
                    ]);

            case "Feburary":
                $month = Carbon::createFromFormat('m', 2);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 2])->whereNotNull('bookId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books returned in %s is %s", $period, count($months)),
                    ]);

            case "March":
                $month = Carbon::createFromFormat('m', 3);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 2])->whereNotNull('bookId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books returned in %s is %s", $period, count($months)),
                    ]);

            case "April":
                $month = Carbon::createFromFormat('m', 4);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 2])->whereNotNull('bookId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books returned in %s is %s", $period, count($months)),
                    ]);

            case "May":
                $month = Carbon::createFromFormat('m', 5);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 2])->whereNotNull('bookId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books returned in %s is %s", $period, count($months)),
                    ]);

            case "June":
                $month = Carbon::createFromFormat('m', 6);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 2])->whereNotNull('bookId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books returned in %s is %s", $period, count($months)),
                    ]);

            case "July":
                $month = Carbon::createFromFormat('m', 7);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 2])->whereNotNull('bookId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books returned in %s is %s", $period, count($months)),
                    ]);

            case "August":
                $month = Carbon::createFromFormat('m', 8);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 2])->whereNotNull('bookId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books returned in %s is %s", $period, count($months)),
                    ]);

            case "September":
                $month = Carbon::createFromFormat('m', 9);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 2])->whereNotNull('bookId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books returned in %s is %s", $period, count($months)),
                    ]);

            case "October":
                $month = Carbon::createFromFormat('m', 10);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 2])->whereNotNull('bookId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books returned in %s is %s", $period, count($months)),
                    ]);

            case "November":
                $month = Carbon::createFromFormat('m', 11);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 2])->whereNotNull('bookId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books returned in %s is %s", $period, count($months)),
                    ]);

            case "December":
                $month = Carbon::createFromFormat('m', 12);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 2])->whereNotNull('bookId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books returned in %s is %s", $period, count($months)),
                    ]);


            default:
                try {
                    $year = Carbon::createFromFormat('Y', $period);
                    $years = LogActivities:: whereYear('created_at', $year->year)->where(["actionId" => 2])->whereNotNull('bookId')->get();
                    return response()->json(
                        [
                            "status" => "true",
                            "message" => sprintf("Total books returned in %s is %s", $period, count($years)),
                        ]);

                } catch (\Exception $exception) {
                    return response()->json(
                        [
                            "status" => "false",
                            "message" => "Kindly check the spelling of the month or input a year. E.G 2022",
                        ], 400);
                }

        }


    }

//    Total equipment rented
    public function rentedEquipment($period){
        //        NOTE: actionId 1 means that the book was rented while 2 means returned
        switch ($period) {
            case "January":
                $month = Carbon::createFromFormat('m', 1);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 1])->whereNotNull('equipmentId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total equipments rented in %s is %s", $period, count($months)),
                    ]);

            case "Feburary":
                $month = Carbon::createFromFormat('m', 2);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 1])->whereNotNull('equipmentId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total equipments rented in %s is %s", $period, count($months)),
                    ]);

            case "March":
                $month = Carbon::createFromFormat('m', 3);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 1])->whereNotNull('equipmentId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total equipments rented in %s is %s", $period, count($months)),
                    ]);

            case "April":
                $month = Carbon::createFromFormat('m', 4);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 1])->whereNotNull('equipmentId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total equipments rented in %s is %s", $period, count($months)),
                    ]);

            case "May":
                $month = Carbon::createFromFormat('m', 5);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 1])->whereNotNull('equipmentId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total equipments rented in %s is %s", $period, count($months)),
                    ]);

            case "June":
                $month = Carbon::createFromFormat('m', 6);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 1])->whereNotNull('equipmentId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total equipments rented in %s is %s", $period, count($months)),
                    ]);

            case "July":
                $month = Carbon::createFromFormat('m', 7);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 1])->whereNotNull('equipmentId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total equipments rented in %s is %s", $period, count($months)),
                    ]);

            case "August":
                $month = Carbon::createFromFormat('m', 8);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 1])->whereNotNull('equipmentId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total equipments rented in %s is %s", $period, count($months)),
                    ]);

            case "September":
                $month = Carbon::createFromFormat('m', 9);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 1])->whereNotNull('equipmentId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total equipments rented in %s is %s", $period, count($months)),
                    ]);

            case "October":
                $month = Carbon::createFromFormat('m', 10);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 1])->whereNotNull('equipmentId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total equipments rented in %s is %s", $period, count($months)),
                    ]);

            case "November":
                $month = Carbon::createFromFormat('m', 11);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 1])->whereNotNull('equipmentId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total equipments rented in %s is %s", $period, count($months)),
                    ]);

            case "December":
                $month = Carbon::createFromFormat('m', 12);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 1])->whereNotNull('equipmentId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total equipments rented in %s is %s", $period, count($months)),
                    ]);


            default:
                try {
                    $year = Carbon::createFromFormat('Y', $period);
                    $years = LogActivities:: whereYear('created_at', $year->year)->where(["actionId" => 1])->whereNotNull('equipmentId')->get();
                    return response()->json(
                        [
                            "status" => "true",
                            "message" => sprintf("Total equipments rented in %s is %s", $period, count($years)),
                        ]);

                } catch (\Exception $exception) {
                    return response()->json(
                        [
                            "status" => "false",
                            "message" => "Kindly check the spelling of the month or input a year. E.G 2022",
                        ], 400);
                }

        }
    }

//    Total Equipments Returned
    public function returnedEquipment($period){
        //        NOTE: actionId 1 means that the book was rented while 2 means returned
        switch ($period) {
            case "January":
                $month = Carbon::createFromFormat('m', 1);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 2])->whereNotNull('equipmentId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total equipments returned in %s is %s", $period, count($months)),
                    ]);

            case "Feburary":
                $month = Carbon::createFromFormat('m', 2);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 2])->whereNotNull('equipmentId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total equipments returned in %s is %s", $period, count($months)),
                    ]);

            case "March":
                $month = Carbon::createFromFormat('m', 3);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 2])->whereNotNull('equipmentId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total equipments returned in %s is %s", $period, count($months)),
                    ]);

            case "April":
                $month = Carbon::createFromFormat('m', 4);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 2])->whereNotNull('equipmentId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total equipments returned in %s is %s", $period, count($months)),
                    ]);

            case "May":
                $month = Carbon::createFromFormat('m', 5);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 2])->whereNotNull('equipmentId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total equipments returned in %s is %s", $period, count($months)),
                    ]);

            case "June":
                $month = Carbon::createFromFormat('m', 6);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 2])->whereNotNull('equipmentId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total equipments returned in %s is %s", $period, count($months)),
                    ]);

            case "July":
                $month = Carbon::createFromFormat('m', 7);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 2])->whereNotNull('equipmentId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total equipments returned in %s is %s", $period, count($months)),
                    ]);

            case "August":
                $month = Carbon::createFromFormat('m', 8);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 2])->whereNotNull('equipmentId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total equipments returned in %s is %s", $period, count($months)),
                    ]);

            case "September":
                $month = Carbon::createFromFormat('m', 9);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 2])->whereNotNull('equipmentId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total equipments returned in %s is %s", $period, count($months)),
                    ]);

            case "October":
                $month = Carbon::createFromFormat('m', 10);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 2])->whereNotNull('equipmentId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total equipments returned in %s is %s", $period, count($months)),
                    ]);

            case "November":
                $month = Carbon::createFromFormat('m', 11);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 2])->whereNotNull('equipmentId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total equipments returned in %s is %s", $period, count($months)),
                    ]);

            case "December":
                $month = Carbon::createFromFormat('m', 12);
                $months = LogActivities:: whereMonth('created_at', $month->month)->where(["actionId" => 2])->whereNotNull('equipmentId')->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total equipments returned in %s is %s", $period, count($months)),
                    ]);


            default:
                try {
                    $year = Carbon::createFromFormat('Y', $period);
                    $years = LogActivities:: whereYear('created_at', $year->year)->where(["actionId" => 2])->whereNotNull('equipmentId')->get();
                    return response()->json(
                        [
                            "status" => "true",
                            "message" => sprintf("Total equipments returned in %s is %s", $period, count($years)),
                        ]);

                } catch (\Exception $exception) {
                    return response()->json(
                        [
                            "status" => "false",
                            "message" => "Kindly check the spelling of the month or input a year. E.G 2022",
                        ], 400);
                }

        }
    }
}
