<?php

namespace App\Models;

use App\Models\Comer;
use App\Models\Structure;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

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

    public function comers(){
        return $this->hasMany(Comer::class);
    }
}
