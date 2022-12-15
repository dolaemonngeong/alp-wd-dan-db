<?php

namespace App\Models;

use App\Models\Onlineletter;
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

    public function onlineletter(){
        return $this->belongsTo(Onlineletter::class);
    }
}
