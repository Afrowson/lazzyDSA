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
                'required' => TRUE,
                'validation' => 'required|max:191'
            ],
        'description' =>
            [
                'key' => 'description',
                'name' => 'Beschreibung',
                'type' => 'text',
                'required' => FALSE,
                'validation' => 'nullable'

            ],
        'rules' =>
            [
                'key' => 'rules',
                'name' => 'Regel',
                'type' => 'text',
                'required' => FALSE,
                'validation' => 'nullable'

            ],
        'level' =>
            [
                'key' => 'level',
                'name' => 'Level',
                'type' => 'integer',
                'required' => FALSE,
                'validation' => 'nullable|numeric|min:0|max:18'

            ],
        'ap_cost' =>
            [
                'key' => 'ap_cost',
                'name' => 'AP',
                'type' => 'integer',
                'required' => FALSE,
                'validation' => 'nullable|numeric|min:0|max:100'

            ],
    ];


}
