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

    public function fightingvalues()
    {
        foreach ($this->fightingtalents as $i => $fightingtalent) {
            $ktw = $fightingtalent->pivot->value;

            if ($fightingtalent->melee) {
                $p = $this->{$fightingtalent->primary_skill};

                if ($this->{$fightingtalent->primary_skill} <= $this->{$fightingtalent->primary_skill_2}) {
                    $p = $this->{$fightingtalent->primary_skill_2};
                }
                $fightingvalues[$i] = [
                    'at' => $ktw + floor(($this->MU - 8) / 3),
                    'pa' => ceil($ktw / 2) + floor(($p - 8) / 3),
                ];
            } else {
                $fightingvalues[$i] = [
                    'at' => $ktw + floor(($this->FF - 8) / 3),
                    'pa' => '-'
                ];
            }
        }
        return $fightingvalues;
    }

    public function handicaps()
    {
        return $this->belongsToMany(Handicap::class)->withPivot('value', 'type');
    }

    public function benefices()
    {
        return $this->belongsToMany(Benefice::class)->withPivot('value', 'type');
    }

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

    public function weapons()
    {
        return $this->belongsToMany(Weapon::class)->withPivot('modifiers', 'keys');
    }

    public function rangeweapons()
    {
        return $this->belongsToMany(Rangeweapon::class)->withPivot('modifiers', 'keys');
    }

    public function armors()
    {
        return $this->belongsToMany(Armor::class)->withPivot('modifiers', 'keys');
    }

    public function shields()
    {
        return $this->belongsToMany(Shield::class)->withPivot('modifiers', 'keys');
    }

    protected function getModifiersAttribute()
    {
        return explode(',', $this->pivot->xyz);
    }

    public function addTalent(Talent $talent, $value)
    {
        return $this->talents()->save($talent, ['value' => $value]);
    }

    public function addLanguage(Language $language, $value)
    {
        return $this->languages()->save($language, ['value' => $value]);
    }

    public function addBenefice(Benefice $benefice, $options)
    {
        $options = array_replace(['value' => null, 'type' => null], $options);

        return $this->benefices()->save($benefice, ['value' => $options['value'], 'type' => $options['type']]);
    }

    public function addHandicap(Handicap $handicap, $options)
    {
        $options = array_replace(['value' => null, 'type' => null], $options);
        return $this->handicaps()->save($handicap, ['value' => $options['value'], 'type' => $options['type']]);
    }

    public function addLettering(Lettering $lettering)
    {
        return $this->letterings()->save($lettering);
    }

    public function addFightingtalent(Fightingtalent $fightingtalent, $value)
    {
        return $this->fightingtalents()->save($fightingtalent, ['value' => $value]);
    }

    public function addWeapon(Weapon $weapon, $modifiers)
    {
        $keys = implode(',', array_keys($modifiers));
        $modifiers = implode(',', $modifiers);

        return $this->weapons()->save($weapon, ['keys' => $keys, 'modifiers' => $modifiers]);
    }

    public function addRangeweapon(Rangeweapon $rangeweapon, $modifiers)
    {
        $keys = implode(',', array_keys($modifiers));
        $modifiers = implode(',', $modifiers);
        return $this->rangeweapons()->save($rangeweapon, ['keys' => $keys, 'modifiers' => $modifiers]);
    }

    public function addArmor(Armor $armor, $modifiers)
    {
        $keys = implode(',', array_keys($modifiers));
        $modifiers = implode(',', $modifiers);
        return $this->armors()->save($armor, ['keys' => $keys, 'modifiers' => $modifiers]);
    }

    public function addShield(Shield $shield, $modifiers)
    {
        $keys = implode(',', array_keys($modifiers));
        $modifiers = implode(',', $modifiers);
        return $this->shields()->save($shield, ['keys' => $keys, 'modifiers' => $modifiers]);
    }
}