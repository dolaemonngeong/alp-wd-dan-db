<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Structure extends Model
{
    use HasFactory;

    protected $fillable = [
        "position_id",
        "villager_id",
        "appointed_date",
        "resign_date",
        "status_jabat",
        "image"
    ];

    public function position(){
        return $this->belongsTo(Position::class);
    }

    public function villager(){
        return $this->belongsTo(Villager::class);
    }
}
