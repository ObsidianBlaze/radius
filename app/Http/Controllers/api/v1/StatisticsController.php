<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\LogActivities;
use Carbon\Carbon;
use Illuminate\Http\Request;

class StatisticsController extends Controller
{
    public function rentedBook($period)
    {
        switch ($period) {
            case "January":
                $month = Carbon::createFromFormat('m', 1);
                $months = LogActivities:: whereMonth('created_at', $month->month)->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books rented in %s is %s", $period, count($months)),
                    ]);

            case "Feburary":
                $month = Carbon::createFromFormat('m', 2);
                $months = LogActivities:: whereMonth('created_at', $month->month)->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books rented in %s is %s", $period, count($months)),
                    ]);

            case "March":
                $month = Carbon::createFromFormat('m', 3);
                $months = LogActivities:: whereMonth('created_at', $month->month)->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books rented in %s is %s", $period, count($months)),
                    ]);

            case "April":
                $month = Carbon::createFromFormat('m', 4);
                $months = LogActivities:: whereMonth('created_at', $month->month)->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books rented in %s is %s", $period, count($months)),
                    ]);

            case "May":
                $month = Carbon::createFromFormat('m', 5);
                $months = LogActivities:: whereMonth('created_at', $month->month)->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books rented in %s is %s", $period, count($months)),
                    ]);

            case "June":
                $month = Carbon::createFromFormat('m', 6);
                $months = LogActivities:: whereMonth('created_at', $month->month)->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books rented in %s is %s", $period, count($months)),
                    ]);

            case "July":
                $month = Carbon::createFromFormat('m', 7);
                $months = LogActivities:: whereMonth('created_at', $month->month)->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books rented in %s is %s", $period, count($months)),
                    ]);

            case "August":
                $month = Carbon::createFromFormat('m', 8);
                $months = LogActivities:: whereMonth('created_at', $month->month)->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books rented in %s is %s", $period, count($months)),
                    ]);

            case "September":
                $month = Carbon::createFromFormat('m', 9);
                $months = LogActivities:: whereMonth('created_at', $month->month)->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books rented in %s is %s", $period, count($months)),
                    ]);

            case "October":
                $month = Carbon::createFromFormat('m', 10);
                $months = LogActivities:: whereMonth('created_at', $month->month)->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books rented in %s is %s", $period, count($months)),
                    ]);

            case "November":
                $month = Carbon::createFromFormat('m', 11);
                $months = LogActivities:: whereMonth('created_at', $month->month)->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books rented in %s is %s", $period, count($months)),
                    ]);

            case "December":
                $month = Carbon::createFromFormat('m', 12);
                $months = LogActivities:: whereMonth('created_at', $month->month)->get();
                return response()->json(
                    [
                        "status" => "true",
                        "message" => sprintf("Total books rented in %s is %s", $period, count($months)),
                    ]);


            default:
                try {
                    $month = Carbon::createFromFormat('Y', $period);
                    $months = LogActivities:: whereYear('created_at', $month->year)->get();
                    return response()->json(
                        [
                            "status" => "true",
                            "message" => sprintf("Total books rented in %s is %s", $period, count($months)),
                        ]);

                } catch (\Exception $exception) {
                    return response()->json(
                        [
                            "status" => "false",
                            "message" => "Kindly check the spelling of the month or input a year. E.G 2022",
                        ], 400);
                }


        }
//        $date = Carbon::createFromFormat('m', $period);
//
//        $empsalaries = LogActivities:: whereMonth('created_at', $date->month)->get();
//
//        return $empsalaries;

    }
}
