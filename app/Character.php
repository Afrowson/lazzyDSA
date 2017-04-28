<?php

namespace App;

use Illuminate\Database\Eloquent\Model;


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

    public function talents()
    {
        return $this->belongsToMany(Talent::class)->withPivot('value');
    }

    public function languages()
    {
        return $this->belongsToMany(Language::class)->withPivot('value');
    }

    public function letterings()
    {
        return $this->belongsToMany(Lettering::class);
    }

    public function fightingtalents()
    {
        return $this->belongsToMany(Fightingtalent::class)->withPivot('value');
    }

    public function addTalent(Talent $talent, $value)
    {
        return $this->talents()->save($talent, ['value' => $value]);

    }

    public function addLanguage(Language $language,$value)
    {
        return $this->languages()->save($language, ['value' => $value]);
    }

    public function addLettering(Lettering $lettering)
    {
        return $this->letterings()->save($lettering);
    }

    public function addFightingtalent(Fightingtalent $fightingtalent,$value)
    {
        return $this->fightingtalents()->save($fightingtalent,['value' => $value]);
    }
}