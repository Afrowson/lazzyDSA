<?php

namespace Database\Seeders;

use App\Magictrick;
use Illuminate\Database\Seeder;

class MagictricksSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        Magictrick::create([
            'name' => 'Abkühlung',
            'description' => '',
            'duration' => 'sofort',
            'range' => 'Berührung',
            'target' => 'Objekt',
            'trait' => 'Elementar',
        ]);
        Magictrick::create([
            'name' => 'Bauchreden',
            'description' => '',
            'duration' => '1 Aktion',
            'range' => '8 Schritt',
            'target' => 'Zone',
            'trait' => 'Illusion',
        ]);
        Magictrick::create([
            'name' => 'Duft',
            'description' => '',
            'duration' => '5 Minuten',
            'range' => 'selbst',
            'target' => 'Kulturschaffende',
            'trait' => 'Illusion',
        ]);
        Magictrick::create([
            'name' => 'Feuerfinger',
            'description' => '',
            'duration' => '5 Minuten',
            'range' => 'selbst',
            'target' => 'Kulturschaffende',
            'trait' => 'Elementar',
        ]);
        Magictrick::create([
            'name' => 'Glücksgriff',
            'description' => '',
            'duration' => 'sofort',
            'range' => 'selbst',
            'target' => 'Objekt',
            'trait' => 'Hellsicht',
        ]);
        Magictrick::create([
            'name' => 'Handwärmer',
            'description' => '',
            'duration' => '5 Minuten',
            'range' => 'Berührung',
            'target' => 'Objekt',
            'trait' => 'Elementar',
        ]);
        Magictrick::create([
            'name' => 'Lockruf',
            'description' => '',
            'duration' => '5 Minuten',
            'range' => '4 Schritt',
            'target' => 'Tiere',
            'trait' => 'Einfluss',
        ]);
        Magictrick::create([
            'name' => 'Regenbogenaugen',
            'description' => '',
            'duration' => '5 Minuten',
            'range' => 'selbst',
            'target' => 'Kulturschaffende',
            'trait' => 'Illusion',
        ]);
        Magictrick::create([
            'name' => 'Schlangenhände',
            'description' => '',
            'duration' => '5 Minuten',
            'range' => 'selbst',
            'target' => 'Kulturschaffende',
            'trait' => 'Verwandlung',
        ]);
        Magictrick::create([
            'name' => 'Schnipsen',
            'description' => '',
            'duration' => 'sofort',
            'range' => '4 Schritt',
            'target' => 'Objekt und Wesen',
            'trait' => 'Telekinese',
        ]);
        Magictrick::create([
            'name' => 'Signatur',
            'description' => '',
            'duration' => 'sofort',
            'range' => 'Berührung',
            'target' => 'Objekt',
            'trait' => 'Objekt',
        ]);
        Magictrick::create([
            'name' => 'Trocken',
            'description' => '',
            'duration' => '5 Minuten',
            'range' => 'selbst',
            'target' => 'Objekt und Kulturschaffende',
            'trait' => 'Elementar',
        ]);
        Magictrick::create([
            'name' => 'Aranische Rasur',
            'description' => '',
            'duration' => 'sofort',
            'range' => 'Berührung',
            'target' => 'Kulturschaffende',
            'trait' => 'Verwandlung',
        ]);
        Magictrick::create([
            'name' => 'Feenfüße',
            'description' => '',
            'duration' => '5 Minuten',
            'range' => '16 Schritt',
            'target' => 'Objekte',
            'trait' => 'Telekinese',
        ]);
        Magictrick::create([
            'name' => 'Hintergrundmusik',
            'description' => '',
            'duration' => '5 Minuten',
            'range' => 'selbst',
            'target' => 'Zone',
            'trait' => 'Illusion',
        ]);
        Magictrick::create([
            'name' => 'Luftstoß',
            'description' => '',
            'duration' => 'sofort',
            'range' => 'selbst',
            'target' => 'Objekte',
            'trait' => 'Telekinese',
        ]);
        Magictrick::create([
            'name' => 'Ordentlich',
            'description' => '',
            'duration' => '6 Stunden',
            'range' => 'selbst',
            'target' => 'Objekte',
            'trait' => 'Telekinese',
        ]);
        Magictrick::create([
            'name' => 'Rohrstock',
            'description' => '',
            'duration' => 'sofort',
            'range' => '4 Schritt',
            'target' => 'Kulturschaffende',
            'trait' => 'Telekinese',
        ]);
        Magictrick::create([
            'name' => 'Tätowierung',
            'description' => '',
            'duration' => '1 Stunde',
            'range' => 'Berührung',
            'target' => 'Kulturschaffende',
            'trait' => 'Verwandlung',
        ]);
        Magictrick::create([
            'name' => 'Unheimliches Lachen',
            'description' => '',
            'duration' => 'sofort',
            'range' => 'selbst',
            'target' => 'Kulturschaffende',
            'trait' => 'Einfluss',
        ]);
        Magictrick::create([
            'name' => 'Zauberfeder',
            'description' => '',
            'duration' => '10 Minuten',
            'range' => '1 Schritt',
            'target' => 'Objekte',
            'trait' => 'Telekinese',
        ]);
    }
}
