<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Mug extends Model
{
    protected $fillable = ['mainimage', 'title', 'description', 'price'];
}
