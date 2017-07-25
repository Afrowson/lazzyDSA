<?php

namespace App;

use App\Traits\CharacterRelations;
use App\Traits\Uuids;
use Illuminate\Database\Eloquent\Model;


/**
 * @property array skills
 */
class Character extends Model
{
    use CharacterRelations;
    use Uuids;

    protected $guarded = [];

    public $incrementing = false;
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
                $fightvalues[$i] = [
                    'at' => $ktw + floor(($this->MU - 8) / 3),
                    'pa' => ceil($ktw / 2) + floor(($p - 8) / 3),
                ];
            } else {
                $fightvalues[$i] = [
                    'at' => $ktw + floor(($this->FF - 8) / 3),
                    'pa' => '-'
                ];
            }
        }
        return $fightvalues;
    }

    protected function getModifiersAttribute()
    {
        return explode(',', $this->pivot->xyz);
    }

    public function addTalent(Talent $talent, $value)
    {
        return $this->talents()->save($talent, ['value' => $value]);
    }

    public function addSpecialTalent(SpecialTalent $specialtalent, $level, $data)
    {
        return $this->specialtalents()->save($specialtalent, ['value' => $level, 'data' => $data]);
    }

    public function addSpecialMagictalent(SpecialMagictalent $specialmagictalent, $level, $data)
    {
        return $this->specialmagictalents()->save($specialmagictalent, ['value' => $level, 'data' => $data]);
    }

    public function addSpecialfightingtalent(Specialfightingtalent $specialfightingtalent, $level, $data)
    {
        return $this->specialfightingtalents()->save($specialfightingtalent, ['value' => $level, 'data' => $data]);
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

    public function addPurse(Purse $purse)
    {
        return $this->purses()->save($purse);
    }

    public function addMagictrick(Magictrick $magictrick)
    {
        return $this->magictricks()->save($magictrick);
    }
}