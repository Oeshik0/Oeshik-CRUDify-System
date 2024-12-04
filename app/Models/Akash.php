<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Akash extends Model
{
    use HasFactory;

    // Add the fillable property
    protected $fillable = [
        'name',
        'description',
        'salary',
    ];
}
