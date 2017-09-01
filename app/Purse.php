<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Purse extends Model
{
    protected $hidden = ['created_at', 'updated_at'];
    
    public function character()
    {
        return $this->hasOne(Character::class);
    }
}
