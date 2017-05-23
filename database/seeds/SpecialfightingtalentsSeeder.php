<?php

use App\Specialfightingtalent;
use App\Specialtalent;
use Illuminate\Database\Seeder;

class SpecialfightingtalentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Specialfightingtalent::create([
            'name' => 'Aufmerksamkeit',
            'description' => '',
            'rules' => '',
            'ap' => '10',

        ]);
        Specialfightingtalent::create([
            'name' => 'Belastungsgewöhnung',
            'description' => '',
            'rules' => '',
            'level' => '2',
            'ap' => '20',//35

        ]);
        Specialfightingtalent::create([
            'name' => 'Beidhändiger Kampf',
            'description' => '',
            'rules' => '',
            'level' => '2',
            'ap' => '20',//35

        ]);
        Specialfightingtalent::create([
            'name' => 'Berittener Kampf',
            'description' => '',
            'rules' => '',
            'ap' => '20',

        ]);
        Specialfightingtalent::create([
            'name' => 'Berittener Schütze',
            'description' => '',
            'rules' => '',
            'ap' => '10',

        ]);
        Specialfightingtalent::create([
            'name' => 'Einhändiger Kampf',
            'description' => '',
            'rules' => '',
            'ap' => '10',

        ]);
        Specialfightingtalent::create([
            'name' => 'Entwaffnen',
            'description' => '',
            'rules' => '',
            'ap' => '40',

        ]);
        Specialfightingtalent::create([
            'name' => 'Feindgespür',
            'description' => '',
            'rules' => '',
            'ap' => '10',

        ]);
        Specialfightingtalent::create([
            'name' => 'Finte',
            'description' => '',
            'rules' => '',
            'level' => '3',
            'ap' => '15',//20,25

        ]);
        Specialfightingtalent::create([
            'name' => 'Haltegriff',
            'description' => '',
            'rules' => '',
            'ap' => '5',

        ]);
        Specialfightingtalent::create([
            'name' => 'Hammerschlag',
            'description' => '',
            'rules' => '',
            'ap' => '25',

        ]);
        Specialfightingtalent::create([
            'name' => 'Kampfreflexe',
            'description' => '',
            'rules' => '',
            'level' => '3',
            'ap' => '10',//15,20

        ]);
        Specialfightingtalent::create([
            'name' => 'Klingenfänger',
            'description' => '',
            'rules' => '',
            'ap' => '10',

        ]);
        Specialfightingtalent::create([
            'name' => 'Kreuzblock',
            'description' => '',
            'rules' => '',
            'ap' => '10',

        ]);
        Specialfightingtalent::create([
            'name' => 'Lanzenangriff',
            'description' => '',
            'rules' => '',
            'ap' => '10',

        ]);
        Specialfightingtalent::create([
            'name' => 'Präziser Schuss/Wurf',
            'description' => '',
            'rules' => '',
            'level' => '3',
            'ap' => '15',//20,25

        ]);
        Specialfightingtalent::create([
            'name' => 'Präziser Stich',
            'description' => '',
            'rules' => '',
            'level' => '3',
            'ap' => '15',//20,25

        ]);
        Specialfightingtalent::create([
            'name' => 'Riposte',
            'description' => '',
            'rules' => '',
            'ap' => '40',

        ]);
        Specialfightingtalent::create([
            'name' => 'Rundumschlag',
            'description' => '',
            'rules' => '',
            'level' => '2',
            'ap' => '25',//35

        ]);
        Specialfightingtalent::create([
            'name' => 'Schildspalter',
            'description' => '',
            'rules' => '',
            'ap' => '15'

        ]);
        Specialfightingtalent::create([
            'name' => 'Schnellladen',
            'description' => '',
            'rules' => '',
            'ap' => '20',

        ]);
        Specialfightingtalent::create([
            'name' => 'Schnellziehen',
            'description' => '',
            'rules' => '',
            'ap' => '10',

        ]);
        Specialfightingtalent::create([
            'name' => 'Sturmangriff',
            'description' => '',
            'rules' => '',
            'ap' => '25',

        ]);
        Specialfightingtalent::create([
            'name' => 'Todesstoß',
            'description' => '',
            'rules' => '',
            'ap' => '30',

        ]);
        Specialfightingtalent::create([
            'name' => 'Verbessertes Ausweichen',
            'description' => '',
            'rules' => '',
            'level' => '3',
            'ap' => '15',

        ]);
        Specialfightingtalent::create([
            'name' => 'Verteidigungshaltung',
            'description' => '',
            'rules' => '',
            'ap' => '10',

        ]);
        Specialfightingtalent::create([
            'name' => 'Vorstoß',
            'description' => '',
            'rules' => '',
            'ap' => '10',

        ]);
        Specialfightingtalent::create([
            'name' => 'Wuchtschlag',
            'description' => '',
            'rules' => '',
            'level' => '3',
            'ap' => '15',//20,25

        ]);
        Specialfightingtalent::create([
            'name' => 'Wurf',
            'description' => '',
            'rules' => '',
            'ap' => '10',

        ]);
        Specialfightingtalent::create([
            'name' => 'Zu Fall bringen',
            'description' => '',
            'rules' => '',
            'ap' => '20',

        ]);

//        Specialfightingtalent::create([
//            'name' => '',
//            'description' => '',
//            'rules' => '',
//            'level' => '',
//            'ap' => '',
//
//        ]);
    }
}
