<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blogdetails extends Model
{
    use HasFactory;

    protected $fillable = [
        's_title',
        'title',
        'image',
        'date_time',
        'category',
        'description',
        'd_title',
        'list'
    ];
}

