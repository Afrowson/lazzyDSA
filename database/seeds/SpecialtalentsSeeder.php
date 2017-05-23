<?php

use App\Specialtalent;
use Illuminate\Database\Seeder;

class SpecialtalentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Specialtalent::create([
            'name' => 'Analytiker',
            'description' => '',
            'rules' => '',
            'ap' => '5',

        ]);
        Specialtalent::create([
            'name' => 'Anführer',
            'description' => '',
            'rules' => '',
            'ap' => '10',

        ]);
        Specialtalent::create([
            'name' => 'Berufsgeheimnis',
            'description' => '',
            'rules' => '',

        ]);
        Specialtalent::create([
            'name' => 'Dokumentfälscher',
            'description' => '',
            'rules' => '',
            'ap' => '5',

        ]);
        Specialtalent::create([
            'name' => 'Eiserner Wille',
            'description' => '',
            'rules' => '',
            'level' => '2',
            'ap' => '15',//15

        ]);

        Specialtalent::create([
            'name' => 'Fächersprache',
            'description' => '',
            'rules' => '',
            'ap' => '3',

        ]);
        Specialtalent::create([
            'name' => 'Fallen entschärfen',
            'description' => '',
            'rules' => '',
            'ap' => '5',

        ]);
        Specialtalent::create([
            'name' => 'Falschspielen',
            'description' => '',
            'rules' => '',
            'ap' => '5',

        ]);
        Specialtalent::create([
            'name' => 'Fischer',
            'description' => '',
            'rules' => '',
            'ap' => '3',

        ]);
        Specialtalent::create([
            'name' => 'Füchsisch',
            'description' => '',
            'rules' => '',
            'ap' => '3',

        ]);
        Specialtalent::create([
            'name' => 'Geländekunde',
            'description' => '',
            'rules' => '',
            'ap' => '15',

        ]);
        Specialtalent::create([
            'name' => 'Gildenrecht',
            'description' => '',
            'rules' => '',
            'ap' => '2',

        ]);
        Specialtalent::create([
            'name' => 'Glasbläserei',
            'description' => '',
            'rules' => '',
            'ap' => '2',

        ]);
        Specialtalent::create([
            'name' => 'Hehlerei',
            'description' => '',
            'rules' => '',
            'ap' => '5',

        ]);
        Specialtalent::create([
            'name' => 'Heraldik',
            'description' => '',
            'rules' => '',
            'ap' => '2',

        ]);
        Specialtalent::create([
            'name' => 'Instrumente bauen',
            'description' => '',
            'rules' => '',
            'ap' => '2',

        ]);
        Specialtalent::create([
            'name' => 'Jäger',
            'description' => '',
            'rules' => '',
            'ap' => '5',

        ]);
        Specialtalent::create([
            'name' => 'Kartographie',
            'description' => '',
            'rules' => '',
            'ap' => '5',

        ]);
        Specialtalent::create([
            'name' => 'Lippenlesen',
            'description' => '',
            'rules' => '',
            'ap' => '10',

        ]);
        Specialtalent::create([
            'name' => 'Meister der Improvisation',
            'description' => '',
            'rules' => '',
            'ap' => '10',

        ]);
        Specialtalent::create([
            'name' => 'Ortskenntnis',
            'description' => '',
            'rules' => '',
            'ap' => '2',

        ]);
        Specialtalent::create([
            'name' => 'Rosstäuscher',
            'description' => '',
            'rules' => '',
            'ap' => '4',

        ]);
        Specialtalent::create([
            'name' => 'Sammler',
            'description' => '',
            'rules' => '',
            'ap' => '2',

        ]);
        Specialtalent::create([
            'name' => 'Schmerzen unterdrücken',
            'description' => '',
            'rules' => '',
            'ap' => '20',

        ]);
        Specialtalent::create([
            'name' => 'Schnapsbrennerei',
            'description' => '',
            'rules' => '',
            'ap' => '2',

        ]);
        Specialtalent::create([
            'name' => 'Schriftstellerei',
            'description' => '',
            'rules' => '',
            'ap' => '2',

        ]);
        Specialtalent::create([
            'name' => 'Tierstimmen imitieren',
            'description' => '',
            'rules' => '',
            'ap' => '5',

        ]);
        Specialtalent::create([
            'name' => 'Töpferei',
            'description' => '',
            'rules' => '',
            'ap' => '2',

        ]);
        Specialtalent::create([
            'name' => 'Wettervorhersage',
            'description' => '',
            'rules' => '',
            'ap' => '2',

        ]);
        Specialtalent::create([
            'name' => 'Zahlenmystik',
            'description' => '',
            'rules' => '',
            'ap' => '2',

        ]);

        //       Specialtalent::create([
        //           'name' => '',
        //           'description' => '',
        //           'rules' => '',
        //           'level' => '',
        //           'ap' => '',
        //
        //       ]);
    }
}
