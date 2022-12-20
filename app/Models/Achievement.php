<?php

namespace App\Models;

use App\Models\Achievementcategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Achievement extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "image",
        "achievementcategory_id",
        "description",
        "date_achievement"
    ];

    public function category(){
        return $this->hasMany(Category::class);
    }   
}
