<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Template extends Model
{
    use HasFactory;
<<<<<<< Updated upstream
=======
    protected $fillable = [
        "name",
        "description",
        "file",
        "screenshoot"
    ];

    public function letter(){
        return $this->belongsTo(Letter::class);
    }
>>>>>>> Stashed changes
}
