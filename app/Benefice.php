<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Benefice extends Model
{
    protected $hidden = ['created_at', 'updated_at'];
    
    public function characters()
    {
        $this->belongsToMany(Character::class);
    }
}
