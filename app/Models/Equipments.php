<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Equipments extends Model
{
    protected $fillable = [
        'name',
    ];

    public function logs(){
        return $this->hasMany(LogActivities::class);
    }


}
