<?php

namespace App\Models;

use App\Models\Template;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Letter extends Model
{
    use HasFactory;

    protected $fillable = [
        "name",
        "email",
        "phone",
        "template_id",
        "file",
        "message",
        "proses",
        "user_id",
    ];

    public function template(){
        return $this->belongsTo(Template::class);
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
