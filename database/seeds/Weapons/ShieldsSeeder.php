<?php

use App\Shield;
use Illuminate\Database\Seeder;

class ShieldsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Shield::create([
            'name' => 'Holzschild',
            'rules' => '',
            'fightingtalent_id' => '7',
            'skill' => 'KK',
            'SS' => '16',
            'dice' => '1',
            'bonus_dmg' => '0',
            'at_mod' => '-4',
            'pa_mod' => '1',
            'weight' => '3.5',
            'reach' => '1',
        ]);
        Shield::create([
            'name' => 'Lederschild',
            'rules' => '',
            'fightingtalent_id' => '7',
            'skill' => 'KK',
            'SS' => '16',
            'dice' => '1',
            'bonus_dmg' => '0',
            'at_mod' => '-4',
            'pa_mod' => '1',
            'weight' => '2',
            'reach' => '1',
        ]);
        Shield::create([
            'name' => 'Thorwalerschild',
            'rules' => '',
            'fightingtalent_id' => '7',
            'skill' => 'KK',
            'SS' => '16',
            'dice' => '1',
            'bonus_dmg' => '0',
            'at_mod' => '-5',
            'pa_mod' => '2',
            'weight' => '4.5',
            'reach' => '1',
        ]);
        Shield::create([
            'name' => 'Großschild',
            'rules' => '',
            'fightingtalent_id' => '7',
            'skill' => 'KK',
            'SS' => '16',
            'dice' => '1',
            'bonus_dmg' => '1',
            'at_mod' => '-6',
            'pa_mod' => '3',
            'weight' => '6',
            'reach' => '1',
        ]);

    }
}











