<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class BirdForm extends Model
{
    protected $table = 'birdform';
     protected $fillable = ["count","notes"];
}
