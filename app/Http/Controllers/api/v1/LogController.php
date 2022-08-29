<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use Hamcrest\Core\JavaForm;
use Illuminate\Http\Request;
use App\Helpers\LogActivity;

class LogController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {


    }
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function myTestAddToLog()
    {
        LogActivity::addToLog("2","2","1");

        return response(
            [
                "status" => "true",
                "message" => "Log Created Succesfully",
                "data" => []
            ]);
    }


    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function logActivity()
    {
        $logs = LogActivity::logActivityLists();
        return $logs;
    }
}
