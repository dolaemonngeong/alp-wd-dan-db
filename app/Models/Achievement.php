<?php

namespace App\Models;

<<<<<<< Updated upstream
=======
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;
>>>>>>> Stashed changes
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Achievement extends Model
{
    use HasFactory;
<<<<<<< Updated upstream
=======

    protected $fillable = [
        "name",
        "image",
        "category_id",
        "description",
        "date_achievement"
    ];

    public function category(){
        return $this->hasMany(Category::class);
    }   
>>>>>>> Stashed changes
}
