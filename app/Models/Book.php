<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use HasFactory;
class Book extends Model
{
    protected $fillable = [
        'title', 'author', 'year'
    ];
}
