<?php

namespace Tedon\LaravelMenual\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MenuItem extends Model
{
    use HasFactory;

    const VISIBILITY_VISIBLE = 1;
    const VISIBILITY_HIDDEN = 0;
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
