<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Leaders extends Model
{
    protected $fillable = ['first_name','last_name','contact','pos_id', 'image'];
}
