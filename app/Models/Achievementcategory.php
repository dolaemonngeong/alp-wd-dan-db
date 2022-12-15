<?php

namespace App\Models;

use App\Models\Achievement;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Achievementcategory extends Model
{
    use HasFactory;

    protected $fillable = [
        "name"
    ];

    public function achievement(){
        return $this->belongsTo(Achievement::class);
    }
}
