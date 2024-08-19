<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Eventdetails extends Model
{
    use HasFactory;
    protected $fillable = [
        's_title',
        'title',
        'image',
        'e_date',
        'e_time',
        'location',
        'description'
    ];
}
