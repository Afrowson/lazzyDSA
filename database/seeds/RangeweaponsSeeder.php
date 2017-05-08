<?php

use App\Rangeweapon;
use Illuminate\Database\Seeder;

class RangeweaponsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        Rangeweapon::create([
            'name' => 'Balestrina',
            'fightingtalent_id' => '12',
            'reload_time' => '2',
            'munition_type' => 'Kugeln',
            'dice' => '1',
            'bonus_dmg' => '4',
            'weight' => '0.75',
            'range_1' => '5',
            'range_2' => '25',
            'range_3' => '40',
        ]);
        Rangeweapon::create([
            'name' => 'Eisenwalder',
            'rules' => 'Magazin (für 10 Schuss); 2 Aktionen pro Schuss, 10 Aktionen, um das gesamte Magazin auszuwechseln',
            'fightingtalent_id' => '12',
            'reload_time' => '2',
            'munition_type' => 'Bolzen',
            'dice' => '1',
            'bonus_dmg' => '4',
            'weight' => '3.75',
            'range_1' => '10',
            'range_2' => '50',
            'range_3' => '80',
        ]);
        Rangeweapon::create([
            'name' => 'Handarmbrust',
            'fightingtalent_id' => '12',
            'reload_time' => '3',
            'munition_type' => 'Bolzen',
            'dice' => '1',
            'bonus_dmg' => '3',
            'weight' => '0.75',
            'range_1' => '5',
            'range_2' => '25',
            'range_3' => '40',
        ]);
        Rangeweapon::create([
            'name' => 'Leichte Armbrust',
            'fightingtalent_id' => '12',
            'reload_time' => '8',
            'munition_type' => 'Bolzen',
            'dice' => '1',
            'bonus_dmg' => '6',
            'weight' => '3.25',
            'range_1' => '10',
            'range_2' => '50',
            'range_3' => '80',
        ]);
        Rangeweapon::create([
            'name' => 'Schwere Armbrust',
            'fightingtalent_id' => '12',
            'reload_time' => '15',
            'munition_type' => 'Bolzen',
            'dice' => '2',
            'bonus_dmg' => '6',
            'weight' => '7.25',
            'range_1' => '20',
            'range_2' => '100',
            'range_3' => '160',
        ]);
        Rangeweapon::create([
            'name' => 'Elfenbogen',
            'fightingtalent_id' => '13',
            'reload_time' => '1',
            'munition_type' => 'Pfeil',
            'dice' => '1',
            'bonus_dmg' => '5',
            'weight' => '0.5',
            'range_1' => '50',
            'range_2' => '100',
            'range_3' => '200',
        ]);
        Rangeweapon::create([
            'name' => 'Kompositbogen',
            'fightingtalent_id' => '13',
            'reload_time' => '2',
            'munition_type' => 'Pfeil',
            'dice' => '1',
            'bonus_dmg' => '7',
            'weight' => '0.75',
            'range_1' => '20',
            'range_2' => '100',
            'range_3' => '160',
        ]);
        Rangeweapon::create([
            'name' => 'Kurzbogen',
            'fightingtalent_id' => '13',
            'reload_time' => '1',
            'munition_type' => 'Pfeil',
            'dice' => '1',
            'bonus_dmg' => '4',
            'weight' => '0.5',
            'range_1' => '10',
            'range_2' => '50',
            'range_3' => '80',
        ]);
        Rangeweapon::create([
            'name' => 'Langbogen',
            'fightingtalent_id' => '13',
            'reload_time' => '2',
            'munition_type' => 'Pfeil',
            'dice' => '1',
            'bonus_dmg' => '8',
            'weight' => '0.75',
            'range_1' => '20',
            'range_2' => '100',
            'range_3' => '160',
        ]);
        Rangeweapon::create([
            'name' => 'Schneidzahn',
            'fightingtalent_id' => '14',
            'reload_time' => '1',
            'dice' => '1',
            'bonus_dmg' => '4',
            'weight' => '1',
            'range_1' => '2',
            'range_2' => '10',
            'range_3' => '15',
        ]);
        Rangeweapon::create([
            'name' => 'Stein',
            'fightingtalent_id' => '14',
            'reload_time' => '1',
            'dice' => '1',
            'bonus_dmg' => '0',
            'weight' => '1',
            'range_1' => '2',
            'range_2' => '10',
            'range_3' => '15',
        ]);
        Rangeweapon::create([
            'name' => 'Wurfbeil',
            'fightingtalent_id' => '14',
            'reload_time' => '1',
            'dice' => '1',
            'bonus_dmg' => '3',
            'weight' => '0.75',
            'range_1' => '2',
            'range_2' => '10',
            'range_3' => '15',
        ]);
        Rangeweapon::create([
            'name' => 'Wurfdolch',
            'fightingtalent_id' => '14',
            'reload_time' => '1',
            'dice' => '1',
            'bonus_dmg' => '1',
            'weight' => '0.5',
            'range_1' => '2',
            'range_2' => '10',
            'range_3' => '15',
        ]);
        Rangeweapon::create([
            'name' => 'Wurfkeule',
            'fightingtalent_id' => '14',
            'reload_time' => '1',
            'dice' => '1',
            'bonus_dmg' => '2',
            'weight' => '1',
            'range_1' => '2',
            'range_2' => '10',
            'range_3' => '15',
        ]);
        Rangeweapon::create([
            'name' => 'Wurfstern',
            'fightingtalent_id' => '14',
            'reload_time' => '1',
            'dice' => '1',
            'bonus_dmg' => '1',
            'weight' => '0.25',
            'range_1' => '2',
            'range_2' => '10',
            'range_3' => '15',
        ]);
        Rangeweapon::create([
            'name' => 'Wurfspeer',
            'fightingtalent_id' => '14',
            'reload_time' => '1',
            'dice' => '2',
            'bonus_dmg' => '2',
            'weight' => '0.75',
            'range_1' => '5',
            'range_2' => '25',
            'range_3' => '40',
        ]);
    }
}











