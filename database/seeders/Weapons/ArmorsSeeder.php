<?php

namespace Database\Seeders\Weapons;

use App\Armor;
use Illuminate\Database\Seeder;

class ArmorsSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {

        Armor::create([
            'name' => 'normale Kleidung',
            'rules' => 'NULL',
            'RS' => '0',
            'BE' => '0',
            'weight' => '1',
        ]);
        Armor::create([
            'name' => 'schwere Kleidung',
            'rules' => 'NULL',
            'RS' => '1',
            'BE' => '0',
            'weight' => '2',
        ]);
        Armor::create([
            'name' => 'Stoffrüstung',
            'rules' => 'NULL',
            'RS' => '2',
            'BE' => '1',
            'weight' => '3',
        ]);
        Armor::create([
            'name' => 'Gambeson',
            'rules' => 'NULL',
            'RS' => '2',
            'BE' => '1',
            'weight' => '3',
        ]);
        Armor::create([
            'name' => 'Lederrüstung',
            'rules' => 'NULL',
            'RS' => '3',
            'BE' => '1',
            'weight' => '6',
        ]);
        Armor::create([
            'name' => 'Kettenrüstung',
            'rules' => 'NULL',
            'RS' => '4',
            'BE' => '2',
            'weight' => '12',
        ]);
        Armor::create([
            'name' => 'Schuppenrüstung',
            'rules' => 'NULL',
            'RS' => '5',
            'BE' => '2',
            'weight' => '18',
        ]);
        Armor::create([
            'name' => 'Plattenrüstung',
            'rules' => 'NULL',
            'RS' => '6',
            'BE' => '3',
            'weight' => '25',
        ]);
    }
}







