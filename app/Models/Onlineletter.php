<?php

namespace App\Models;

use App\Models\Template;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Onlineletter extends Model
{
    use HasFactory;

    // protected $guarded = [];
    protected $fillable = [
        "name",
        "email",
        "phone",
        "template_id",
        "file",
        "message",
        "proses",
        // "user_id",
    ];

    public function template(){
        return $this->hasMany(Template::class);
    }
}
