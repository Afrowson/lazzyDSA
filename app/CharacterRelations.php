<?php

namespace App;

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
}