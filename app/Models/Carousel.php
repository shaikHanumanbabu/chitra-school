<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Carousel extends Model
{
    use HasFactory;
    use SoftDeletes;
    protected $fillable = [
        'title_1',
        'title_2',
        'description',
        'image',
    ];
}
