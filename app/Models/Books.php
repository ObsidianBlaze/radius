<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Books extends Model
{

    protected $fillable = [
        'name',
        'isbn'
    ];

    public function logs(){
        return $this->hasMany(LogActivities::class);
    }


}
