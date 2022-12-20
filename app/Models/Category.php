<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    use HasFactory;
<<<<<<< Updated upstream:app/Models/Achievementcategory.php
=======
    
    protected $fillable = [
        "name"
    ];

    public function achievement(){
        return $this->belongsTo(Achievement::class);
    }
>>>>>>> Stashed changes:app/Models/Category.php
}
