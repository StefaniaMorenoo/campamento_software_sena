<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
       
    protected $fillable = [
        "title",
        "text",
        "raiting",
        "bootcamp_id",
        "user_id"
    ];
}
