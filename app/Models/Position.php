<?php

namespace App\Models;

use App\Models\Structure;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Position extends Model
{
    use HasFactory;

    protected $fillable = [
        "name"
    ];

    public function position(){
        return $this->hasMany(Structure::class);
    }
}
