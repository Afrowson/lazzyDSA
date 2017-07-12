<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Handicap extends Model
{
    public function characters()
    {
        $this->belongsToMany(Character::class);
    }

    public static $fields = [


        'name' =>
            [
                'key' => 'name',
                'name' => 'Name',
                'type' => 'string',
                'required' => TRUE
            ],
        'description' =>
            [
                'key' => 'description',
                'name' => 'Beschreibung',
                'type' => 'string',
                'required' => FALSE
            ],
        'rules' =>
            [
                'key' => 'rules',
                'name' => 'Regel',
                'type' => 'string',
                'required' => FALSE
            ],
        'level' =>
            [
                'key' => 'level',
                'name' => 'Level',
                'type' => 'integer',
                'required' => FALSE
            ],
        'ap_cost' =>
            [
                'key' => 'ap_cost',
                'name' => 'AP',
                'type' => 'integer',
                'required' => FALSE
            ],
    ];


}
