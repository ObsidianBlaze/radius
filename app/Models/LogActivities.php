<?php

namespace App\Models;

use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class LogActivities extends Model
{

    protected $fillable = [
        'actionId', 'bookId', 'equipmentId', 'userId'
    ];

    public function actions(){
        return $this->hasMany(Actions::class);
    }

    public function userlog(){
        return $this->belongsTo(User::class);
    }

    public function bookLog(){
        return $this->belongsTo(Books::class);
    }
    public function equipmentlog(){
        return $this->belongsTo(Equipments::class);
    }


}
