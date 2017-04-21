<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Character extends Model
{
    public $skills = [
        'MU',
        'KL',
        'IN',
        'CH',
        'FF',
        'GE',
        'KO',
        'KK'
    ];

    public function talent($id)
    {
    return $this->character_talents()->where('talent_id', $id)->value('value');
    }

    public function character_talents()
    {
     return $this->hasMany(CharacterTalent::class);
    }
}