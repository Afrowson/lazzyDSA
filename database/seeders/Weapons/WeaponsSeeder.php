<?php

namespace Database\Seeders\Weapons;

use App\Weapon;
use Illuminate\Database\Seeder;

class WeaponsSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        Weapon::create([
            'name'              => 'Lindwurmschläger',
            'rules'             => '',
            'fightingtalent_id' => '3',
            'skill'             => 'KK',
            'ss'                => '14',
            'dice'              => '1',
            'bonus_dmg'         => '4',
            'at_mod'            => '0',
            'pa_mod'            => '-1',
            'weight'            => '1',
            'reach'             => '1',
        ]);
        Weapon::create([
            'name'              => 'Schlagring',
            'rules'             => '',
            'fightingtalent_id' => '6',
            'skill'             => 'GE',
            'skill_two'         => 'KK',
            'ss'                => '15',
            'dice'              => '1',
            'bonus_dmg'         => '1',
            'at_mod'            => '0',
            'pa_mod'            => '0',
            'weight'            => '0.25',
            'reach'             => '1',
        ]);
        Weapon::create([
            'name'              => 'Drachenzahn',
            'rules'             => '',
            'fightingtalent_id' => '1',
            'skill'             => 'GE',
            'ss'                => '14',
            'dice'              => '1',
            'bonus_dmg'         => '2',
            'at_mod'            => '0',
            'pa_mod'            => '-1',
            'weight'            => '0.75',
            'reach'             => '1',
        ]);
        Weapon::create([
            'name'              => 'Magierstab, mittel',
            'rules'             => '',
            'fightingtalent_id' => '3',
            'skill'             => 'KK',
            'ss'                => '14',
            'dice'              => '1',
            'bonus_dmg'         => '2',
            'at_mod'            => '0',
            'pa_mod'            => '-1',
            'weight'            => '0.75',
            'reach'             => '2',
        ]);

//       Weapon::create([
//           'name'=>'',
//           'rules'=>'',
//           'fightingtalent_id'=>'',
//           'skill'=>'',
//           'ss'=>'',
//           'dice'=>'',
//           'bonus_dmg'=>'',
//           'at_mod'=>'',
//           'pa_mod'=>'',
//           'weight'=>'',
//           'reach'=>'',
//       ]);

    }
}











