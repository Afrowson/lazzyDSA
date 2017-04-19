<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Character extends Model
{

    public function skills()
    {

        $skills = [
            array('MU', $this->attributes['MU']),
            array('KL', $this->attributes['KL']),
            array('IN', $this->attributes['IN']),
            array('CH', $this->attributes['CH']),
            array('FF', $this->attributes['FF']),
            array('GE', $this->attributes['GE']),
            array('KO', $this->attributes['KO']),
            array('KK', $this->attributes['KK'])

        ];
        return $skills;
    }

}
