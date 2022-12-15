<?php

namespace App\Models;

use App\Models\Villager;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Comer extends Model
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
        "status",
        "villager_id",
    ];

    public function villager(){
        return $this->belongsTo(Villager::class);
    }
}
