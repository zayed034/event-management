<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Service extends Model
{
    use HasFactory;

    // Specify the fillable fields
    protected $fillable = [
        'm_image', 
        't_image', 
        'title', 
        'sub_title', 
        'description', 
        'list_text'
    ];
}
