<?php

namespace Tedon\LaravelMenual\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    protected $fillable = [
        'title',
        'slug',

        'has_icon',
        'has_thumbnail',
        'status',
    ];
}
