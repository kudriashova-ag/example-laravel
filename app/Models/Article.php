<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Article extends Model
{
    use HasFactory;

    protected $casts = [
        'active'=>'boolean',
        'published_at'=> 'datetime:Y-m-d'
    ];
}
