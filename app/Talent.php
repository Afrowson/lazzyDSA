<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Talent extends Model
{
    protected $hidden = ['created_at', 'updated_at'];
    
    public function character()
    {
        $this->belongsToMany(Character::class);
    }
}
