<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Finance extends Model
{
    use HasFactory;
<<<<<<< Updated upstream
=======

    protected $fillable = [
        "description",
        "volume",
        "unit",
        "date",
        "price",
        "total"
    ];
>>>>>>> Stashed changes
}
