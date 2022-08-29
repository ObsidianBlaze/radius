<?php


namespace App\Helpers;

use Illuminate\Http\Request;
use App\Models\LogActivities as LogActivityModel;


class LogActivity
{


    public static function addToLog($actionId, $userId, $bookId = null, $equipmentId = null)
    {
        $log = [];
        $log['actionId'] = $actionId;
        $log['userId'] = $userId;
        $log['bookId'] = $bookId;
        $log['equipmentId'] = $equipmentId;
        LogActivityModel::create($log);

    }


    public static function logActivityLists()
    {
        return LogActivityModel::latest()->get();
    }


}
