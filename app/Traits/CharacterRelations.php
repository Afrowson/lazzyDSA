<?php

namespace App\Traits;

use App\Armor;
use App\Benefice;
use App\Fightingtalent;
use App\Handicap;
use App\Inventory;
use App\Language;
use App\Lettering;
use App\Magictrick;
use App\Purse;
use App\Rangeweapon;
use App\Shield;
use App\Specialfightingtalent;
use App\Specialmagictalent;
use App\Specialtalent;
use App\Talent;
use App\Weapon;

trait CharacterRelations
{

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

    public function specialtalents()
    {
        return $this->belongsToMany(Specialtalent::class)->withPivot('value', 'data');
    }

    public function specialmagictalents()
    {
        return $this->belongsToMany(Specialmagictalent::class)->withPivot('value', 'data');
    }

    public function specialfightingtalents()
    {
        return $this->belongsToMany(Specialfightingtalent::class)->withPivot('value', 'data');
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

    public function inventories()
    {
        return $this->hasMany(Inventory::class);
    }

    public function purses()
    {
        return $this->hasMany(Purse::class);
    }

    public function magictricks()
    {
        return $this->belongsToMany(Magictrick::class);
    }
}