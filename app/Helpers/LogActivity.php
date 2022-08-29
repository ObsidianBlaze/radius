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
            $log['bookId'] = $bookId;
            $log['equipmentId'] = $equipmentId;
            $log['userId'] = $userId;
            LogActivityModel::create($log);

    }


    public static function logActivityLists()
    {
        return LogActivityModel::latest()->get();
    }


}
