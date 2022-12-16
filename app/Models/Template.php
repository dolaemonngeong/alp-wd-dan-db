<?php

namespace App\Models;

use App\Models\Letter;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Template extends Model
{
    use HasFactory;
    protected $fillable = [
        "name",
        "image",
        "achievementcategory_id",
        "description",
        "date_achievement"
    ];

    public function letter(){
        return $this->belongsTo(Letter::class);
    }
}
