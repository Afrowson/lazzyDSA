<?php

use App\Item;
use Illuminate\Database\Seeder;

class ContainersSeed extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Item::create([
            'name' => 'Feldflasche',
            'description' => '',
            'value' => '6',
            'weight' => '0.25',
        ]);
        Item::create([
            'name' => 'Geldbeutel',
            'description' => '',
            'value' => '1',
            'weight' => '0.05',
        ]);
        Item::create([
            'name' => 'Geldkatze',
            'description' => '',
            'value' => '2',
            'weight' => '0.1',
        ]);
        Item::create([
            'name' => 'Gürteltasche',
            'description' => '',
            'value' => '4',
            'weight' => '0.25',
        ]);
        Item::create([
            'name' => 'Kiepe',
            'description' => '',
            'value' => '7',
            'weight' => '2',
        ]);
        Item::create([
            'name' => 'Lederranzen',
            'description' => '',
            'value' => '17',
            'weight' => '1',
        ]);
        Item::create([
            'name' => 'Lederrucksack',
            'description' => '',
            'value' => '34',
            'weight' => '2',
        ]);
        Item::create([
            'name' => 'Phiole',
            'description' => '',
            'value' => '2',
            'weight' => '0.1',
        ]);
        Item::create([
            'name' => 'Puderdöschen',
            'description' => '',
            'value' => '6',
            'weight' => '0.25',
        ]);
        Item::create([
            'name' => 'Sack',
            'description' => '',
            'value' => '1',
            'weight' => '0.75',
        ]);
        Item::create([
            'name' => 'Schmuckkästchen',
            'description' => '',
            'value' => '20',
            'weight' => '1',
        ]);
        Item::create([
            'name' => 'Tiegel',
            'description' => '',
            'value' => '0.5',
            'weight' => '0.25',
        ]);
        Item::create([
            'name' => 'Trinkhorn',
            'description' => '',
            'value' => '0.5',
            'weight' => '0.25',
        ]);
        Item::create([
            'name' => 'Truhe',
            'description' => '',
            'value' => '18',
            'weight' => '5',
        ]);
        Item::create([
            'name' => 'Tuchbeutel',
            'description' => '',
            'value' => '0.75',
            'weight' => '0.5',
        ]);
        Item::create([
            'name' => 'Umhängetasche',
            'description' => '',
            'value' => '8.5',
            'weight' => '0.5',
        ]);
        Item::create([
            'name' => 'Vase',
            'description' => '',
            'value' => '1',
            'weight' => '2',
        ]);
        Item::create([
            'name' => 'Wasserschlauch',
            'description' => '',
            'value' => '5.5',
            'weight' => '0.25',
        ]);

    }
}




































