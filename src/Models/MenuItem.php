<?php

namespace Tedon\LaravelMenual\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    protected $fillable = [
        'caption',
        'url',
        'position',
        'visible',

        'icon',
        'thumbnail',

        'parent_id',
    ];
}
