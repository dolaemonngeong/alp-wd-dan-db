<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Report extends Model
{
    use HasFactory;
<<<<<<< Updated upstream
=======

    protected $fillable = [
        "name",
        "image",
        "phone",
        "description",
        "proses",
        "user_id",
    ];

    // protected $guarded=[];

    public function user(){
        return $this->belongsTo(User::class);
    }
>>>>>>> Stashed changes
}
