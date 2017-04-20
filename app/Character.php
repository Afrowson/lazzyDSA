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
        $test= DB::table('character_talents')->where('talent_id', $id)->get();
        dd($test);
    }

    public function talents()
    {
     return $this->hasMany(CharacterTalents::class);
    }
}