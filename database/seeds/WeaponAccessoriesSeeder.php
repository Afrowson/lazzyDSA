<?php

use App\Item;
use Illuminate\Database\Seeder;

class WeaponAccessoriesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create([
            'name' => 'Bogensehne',
            'description' => '',
            'value' => '1',
            'weight' => '0.05',
        ]);
        Item::create([
            'name' => 'Dolchscheide',
            'description' => '',
            'value' => '5',
            'weight' => '0.25',
        ]);
        Item::create([
            'name' => 'Köcher',
            'description' => 'für 20 Pfeile oder Bolzen',
            'value' => '15',
            'weight' => '0.75',
        ]);
        Item::create([
            'name' => 'Schwertscheide',
            'description' => '',
            'value' => '12',
            'weight' => '0.75',
        ]);
        Item::create([
            'name' => 'Unterkleid für Metallrüstungen',
            'description' => '',
            'value' => '12',
            'weight' => '2.5',
        ]);
        Item::create([
            'name' => 'Waffenpflegeset',
            'description' => 'Schleifstein, Tücher',
            'value' => '1',
            'weight' => '1',
        ]);
    }
}



















