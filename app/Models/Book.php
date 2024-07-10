<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Book extends Model
{
    use SoftDeletes;
    use HasFactory;

    protected $fillable = [
        'object',
        'image',
        'description',
        'color',
        'location',
        'idcard',
    ];

    protected $dates = [
        'created_at',
        'updated_at',
    ];
}
