<?php

use App\lettering;
use Illuminate\Database\Seeder;

class LetteringSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Lettering::create([
            'name' => 'Altes Alaani',
            'difficulty' => '4'
        ]);
        Lettering::create([
            'name' => 'Angram-Bilderschrift',
            'difficulty' => '4'
        ]);
        Lettering::create([
            'name' => 'Chrmk',
            'difficulty' => '4'
        ]);
        Lettering::create([
            'name' => 'Chuchas',
            'difficulty' => '6'
        ]);
        Lettering::create([
            'name' => 'Glyphen von Unau',
            'difficulty' => '2'
        ]);
        Lettering::create([
            'name' => 'Hjaldingsche Runen',
            'difficulty' => '2'
        ]);
        Lettering::create([
            'name' => 'Imperiale Zeichen',
            'difficulty' => '2'
        ]);
        Lettering::create([
            'name' => 'Asdharia-Zeichen',
            'difficulty' => '2'
        ]);
        Lettering::create([
            'name' => 'Kusliker Zeichen',
            'difficulty' => '2'
        ]);
        Lettering::create([
            'name' => 'Nanduria-Zeichen',
            'difficulty' => '2'
        ]);
        Lettering::create([
            'name' => 'Rogolan-Runen',
            'difficulty' => '2'
        ]);
        Lettering::create([
            'name' => 'Thorwalsche Runen',
            'difficulty' => '2'
        ]);
        Lettering::create([
            'name' => 'Troll. Raumbilderschrift',
            'difficulty' => '6'
        ]);
        Lettering::create([
            'name' => 'Tulamidya-Zeichen',
            'difficulty' => '2'
        ]);
        Lettering::create([
            'name' => 'Ur-Tulamidya-Zeichen',
            'difficulty' => '2'
        ]);
        Lettering::create([
            'name' => 'Zhayad-Zeichen',
            'difficulty' => '2'
        ]);

    }
}
