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
    
    protected $fillable = [
        'user_id',
        'name',
        'race',
        'profession',
        'gender',
        'height',
        'weight',
        'age',
        'hair',
        'eyes',
        'hair',
        'eyes',
        'culture',
        'place_of_birth',
        'title',
        'social',
        'MU',
        'KL',
        'IN',
        'CH',
        'FF',
        'GE',
        'KO',
        'KK',
        'lep',
        'asp',
        'kap',
        'lep_max',
        'asp_max',
        'kap_max',
        'sp',
        'SK',
        'ZK',
        'AW',
        'IT',
        'GW',
        'ap_total',
        'ap_spend',
    ];
    protected $hidden = ['created_at', 'updated_at'];
    
    
    public $incrementing = false;
    public $skills = [
        'MU',
        'KL',
        'IN',
        'CH',
        'FF',
        'GE',
        'KO',
        'KK',
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
                    'pa' => '-',
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
    
    public function addSpecialTalent(SpecialTalent $specialtalent, $options)
    {
        $options = array_replace(['value' => null, 'data' => null], $options);
    
        return $this->specialtalents()->save($specialtalent, $options);
    }
    
    public function addSpecialMagictalent(SpecialMagictalent $specialmagictalent, $options)
    {
        $options = array_replace(['value' => null, 'data' => null], $options);
    
        return $this->specialmagictalents()->save($specialmagictalent, $options);
    }
    
    public function addSpecialFightingtalent(Specialfightingtalent $specialfightingtalent, $options)
    {
        $options = array_replace(['value' => null, 'data' => null], $options);
    
        return $this->specialfightingtalents()->save($specialfightingtalent, $options);
    }
    
    public function addLanguage(Language $language, $value)
    {
        return $this->languages()->save($language, ['value' => $value]);
    }
    
    public function addBenefice(Benefice $benefice, $options)
    {
        $options = array_replace(['value' => null, 'type' => null], $options);
    
        return $this->benefices()->save($benefice, $options);
    }
    
    public function addHandicap(Handicap $handicap, $options)
    {
        $options = array_replace(['value' => null, 'type' => null], $options);
    
        return $this->handicaps()->save($handicap, $options);
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
    
        $this->weapons()->save($weapon, ['keys' => $keys, 'modifiers' => $modifiers]);
    
        $weapon = $this::weapons()->orderBy('pivot_updated_at', 'desc')->first();
    
        return $weapon->pivot->id;
    }
    
    public function addRangeweapon(Rangeweapon $rangeweapon, $modifiers)
    {
        $keys = implode(',', array_keys($modifiers));
        $modifiers = implode(',', $modifiers);
    
        $this->rangeweapons()->save($rangeweapon, ['keys' => $keys, 'modifiers' => $modifiers]);
    
        $rangeweapon = $this::rangeweapons()->orderBy('pivot_updated_at', 'desc')->first();
    
        return $rangeweapon->pivot->id;
    }
    
    public function addArmor(Armor $armor, $modifiers)
    {
        $keys = implode(',', array_keys($modifiers));
        $modifiers = implode(',', $modifiers);
    
        $this->armors()->save($armor, ['keys' => $keys, 'modifiers' => $modifiers]);
    
        $armor = $this::armors()->orderBy('pivot_updated_at', 'desc')->first();
    
        return $armor->pivot->id;
    }
    
    public function addShield(Shield $shield, $modifiers)
    {
        $keys = implode(',', array_keys($modifiers));
        $modifiers = implode(',', $modifiers);
    
        $this->shields()->save($shield, ['keys' => $keys, 'modifiers' => $modifiers]);
    
        $shield = $this::shields()->orderBy('pivot_updated_at', 'desc')->first();
    
        return $shield->pivot->id;
    }
    
    public function addPurse(Purse $purse)
    {
        return $this->purses()->save($purse);
    }
    
    public function addMagictrick(Magictrick $magictrick)
    {
        return $this->magictricks()->save($magictrick);
    }
    
    public static $fields = [
    
        'name' => [
            'key'        => 'name',
            'name'       => 'Name',
            'type'       => 'string',
            'required'   => true,
            'validation' => 'required|max:191',
        ],
    
        'race' => [
            'key'        => 'race',
            'name'       => 'Rasse',
            'type'       => 'string',
            'required'   => true,
            'validation' => 'required|max:191',
        ],
    
        'profession' => [
            'key'        => 'profession',
            'name'       => 'Beruf',
            'type'       => 'string',
            'required'   => true,
            'validation' => 'required|max:191',
        ],
    
        'gender' => [
            'key'        => 'gender',
            'name'       => 'Geschlecht',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer|min:0|max:2',
        ],
    
        'height' => [
            'key'        => 'height',
            'name'       => 'größe',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer|min:1',
        ],
    
        'weight' => [
            'key'        => 'weight',
            'name'       => 'Gewicht',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer|min:1',
        ],
    
        'age' => [
            'key'        => 'age',
            'name'       => 'Alter',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer|min:1',
        ],
    
        'hair' => [
            'key'        => 'hair',
            'name'       => 'Haarfarbe',
            'type'       => 'string',
            'required'   => false,
            'validation' => 'nullable|max:191',
        ],
    
        'eyes' => [
            'key'        => 'eyes',
            'name'       => 'Augenfarbe',
            'type'       => 'string',
            'required'   => false,
            'validation' => 'nullable|max:191',
        ],
    
        'culture' => [
            'key'        => 'culture',
            'name'       => 'Kultur',
            'type'       => 'string',
            'required'   => false,
            'validation' => 'nullable|max:191',
        ],
    
        'place_of_birth' => [
            'key'        => 'place_of_birth',
            'name'       => 'Geburtsort',
            'type'       => 'string',
            'required'   => false,
            'validation' => 'nullable|max:191',
        ],
    
        'title' => [
            'key'        => 'title',
            'name'       => 'Titel',
            'type'       => 'string',
            'required'   => false,
            'validation' => 'nullable|max:191',
        ],
    
        'social' => [
            'key'        => 'social',
            'name'       => 'Sozialstatus',
            'type'       => 'string',
            'required'   => false,
            'validation' => 'nullable|max:191',
        ],
    
        'MU' => [
            'key'        => 'MU',
            'name'       => 'MU',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer|min:8|max:20',
        ],
    
        'KL' => [
            'key'        => 'KL',
            'name'       => 'KL',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer|min:8|max:20',
        ],
    
        'IN' => [
            'key'        => 'IN',
            'name'       => 'IN',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer|min:8|max:20',
        ],
    
        'CH' => [
            'key'        => 'CH',
            'name'       => 'CH',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer|min:8|max:20',
        ],
    
        'FF' => [
            'key'        => 'FF',
            'name'       => 'FF',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer|min:8|max:20',
        ],
    
        'GE' => [
            'key'        => 'GE',
            'name'       => 'GE',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer|min:8|max:20',
        ],
    
        'KO' => [
            'key'        => 'KO',
            'name'       => 'KO',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer|min:8|max:20',
        ],
    
        'KK' => [
            'key'        => 'KK',
            'name'       => 'KK',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer|min:8|max:20',
        ],
    
        'lep' => [
            'key'        => 'lep',
            'name'       => 'Lebenspunkte',
            'type'       => 'integer',
            'required'   => false,
            'validation' => 'nullable|integer',
        ],
    
        'asp' => [
            'key'        => 'asp',
            'name'       => 'Astralpunkte',
            'type'       => 'integer',
            'required'   => false,
            'validation' => 'nullable|integer',
        ],
    
        'kap' => [
            'key'        => 'kap',
            'name'       => 'Karmapunkte',
            'type'       => 'integer',
            'required'   => false,
            'validation' => 'nullable|integer',
        ],
    
        'sp' => [
            'key'        => 'sp',
            'name'       => 'sp',
            'type'       => 'integer',
            'required'   => false,
            'validation' => 'nullable|integer|min:0|max:3',
        ],
    
        'lep_max' => [
            'key'        => 'lep_max',
            'name'       => 'Maximale Lebenspunkte',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer|min:0',
        ],
    
        'asp_max' => [
            'key'        => 'asp_max',
            'name'       => 'Maximale Astralpunkte',
            'type'       => 'integer',
            'required'   => false,
            'validation' => 'nullable|integer|min:0',
        ],
    
        'kap_max' => [
            'key'        => 'kap_max',
            'name'       => 'Maximale Karmapunkte',
            'type'       => 'integer',
            'required'   => false,
            'validation' => 'nullable|integer|min:0',
        ],
    
        'SK' => [
            'key'        => 'SK',
            'name'       => 'SK',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer',
        ],
    
        'ZK' => [
            'key'        => 'ZK',
            'name'       => 'ZK',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer',
        ],
    
        'AW' => [
            'key'        => 'AW',
            'name'       => 'AW',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer',
        ],
    
        'IT' => [
            'key'        => 'IT',
            'name'       => 'IT',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer',
        ],
    
        'GW' => [
            'key'        => 'GW',
            'name'       => 'GW',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer',
        ],
    
        'ap_total' => [
            'key'        => 'ap_total',
            'name'       => 'Abenteuerpunkte',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer',
        ],
    
        'ap_spend' => [
            'key'        => 'ap_spend',
            'name'       => 'Ausgegebene Abenteuerpunkte',
            'type'       => 'integer',
            'required'   => true,
            'validation' => 'required|integer',
        ],
    ];
}