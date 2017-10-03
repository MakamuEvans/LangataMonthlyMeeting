<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sermon extends Model
{
    protected $fillable = ['title', 'verse', 'description', 'type','period'];
}
