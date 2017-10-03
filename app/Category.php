<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','position','level'];

    public function leader(){
        return $this->hasOne('App\Leaders', 'pos_id');
    }
}
