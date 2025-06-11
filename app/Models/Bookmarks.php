<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Bookmarks extends Model
{
    protected $fillable = [
        'name',
        'url',
        'user_id'
    ];
}
