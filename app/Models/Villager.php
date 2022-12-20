<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Villager extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "birth_place",
        "birth_date",
        "nik",
        "phone",
        "role",
        "gender",
        "gender",
        "status"
    ];

    public function structures(){
        return $this->hasMany(Structure::class);
    }
<<<<<<< Updated upstream

    public function comers(){
        return $this->hasMany(Structure::class);
    }
=======

    public function comers(){
        return $this->hasMany(Comer::class);
    }

>>>>>>> Stashed changes
}
