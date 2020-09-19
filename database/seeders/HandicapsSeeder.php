<?php

namespace Database\Seeders;

use App\Handicap;
use Illuminate\Database\Seeder;

class HandicapsSeeder extends Seeder
{
    /**
     * Run the database seeders.
     *
     * @return void
     */
    public function run()
    {
        Handicap::create([
            'name' => 'Angst vor',
        ]);
        Handicap::create([
            'name' => 'Arm',
            'level' => '3',
        ]);
        Handicap::create([
            'name' => 'Artefaktgebunden',
        ]);
        Handicap::create([
            'name' => 'Behäbig',
        ]);
        Handicap::create([
            'name' => 'Blind',
        ]);
        Handicap::create([
            'name' => 'Blutrausch',
        ]);
        Handicap::create([
            'name' => 'Eingeschränkter Sinn',
        ]);
        Handicap::create([
            'name' => 'Farbenblind',
        ]);
        Handicap::create([
            'name' => 'Fettleibig',
        ]);
        Handicap::create([
            'name' => 'Giftanfällig',
            'level' => '2',
        ]);
        Handicap::create([
            'name' => 'Hässlich',
            'level' => '2',
        ]);
        Handicap::create([
            'name' => 'Hitzeempfindlich',
        ]);
        Handicap::create([
            'name' => 'Kälteempfindlich',
        ]);
        Handicap::create([
            'name' => 'Keine Flugsalbe',
        ]);
        Handicap::create([
            'name' => 'Kein Vertrauter',
        ]);
        Handicap::create([
            'name' => 'Körpergebundene Kraft',
        ]);
        Handicap::create([
            'name' => 'Körperliche Auffälligkeit',
        ]);
        Handicap::create([
            'name' => 'Krankheitsanfällig',
            'level' => '2',
        ]);
        Handicap::create([
            'name' => 'Lästige Mindergeister',
        ]);
        Handicap::create([
            'name' => 'Lichtempfindlich',
        ]);
        Handicap::create([
            'name' => 'Magische Einschränkung',
        ]);
        Handicap::create([
            'name' => 'Nachtblind',
        ]);
        Handicap::create([
            'name' => 'Niedrige Astralkraft',
            'level' => '7',
        ]);
        Handicap::create([
            'name' => 'Niedrige Karmalkraft',
            'level' => '7',
        ]);
        Handicap::create([
            'name' => 'Niedrige Lebenskraft',
            'level' => '7',
        ]);
        Handicap::create([
            'name' => 'Niedrige Seelenkraft',
        ]);
        Handicap::create([
            'name' => 'Niedrige Zähigkeit',
        ]);
        Handicap::create([
            'name' => 'Pech',
        ]);
        Handicap::create([
            'name' => 'Pechmagnet',
        ]);
        Handicap::create([
            'name' => 'Persönlichkeitsschwäche',
        ]);
        Handicap::create([
            'name' => 'Prinzipientreue',
        ]);
        Handicap::create([
            'name' => 'Schlafwandler',
        ]);
        Handicap::create([
            'name' => 'Schlechte Angewohnheit',
        ]);
        Handicap::create([
            'name' => 'Schlechte Eigenschaft',
        ]);
        Handicap::create([
            'name'  => 'Schlechte Reg. der Astralenergie',
            'level' => '3',
        ]);
        Handicap::create([
            'name'  => 'Schlechte Reg. der Karmaenergie',
            'level' => '3',
        ]);
        Handicap::create([
            'name'  => 'Schlechte Reg. der Lebensenergie',
            'level' => '3',
        ]);
        Handicap::create([
            'name' => 'Schwacher Astralkörper',
        ]);
        Handicap::create([
            'name' => 'Schwacher Karmalkörper',
        ]);
        Handicap::create([
            'name' => 'Sensibler Geruchssinn',
        ]);
        Handicap::create([
            'name' => 'Sprachfehler',
        ]);
        Handicap::create([
            'name' => 'Stigma',
        ]);
        Handicap::create([
            'name' => 'Stumm',
        ]);
        Handicap::create([
            'name' => 'Taub',
        ]);
        Handicap::create([
            'name' => 'Unfähig',
        ]);
        Handicap::create([
            'name' => 'Unfrei',
        ]);
        Handicap::create([
            'name' => 'Verpflichtungen',
            'level' => '3',
        ]);
        Handicap::create([
            'name' => 'Verstümmelt',
        ]);
        Handicap::create([
            'name' => 'Wahrer Name',
        ]);
        Handicap::create([
            'name' => 'Wilde MagieZauberanfällig',
        ]);
        Handicap::create([
            'name' => 'Zerbranfällig',
            'level' => '2',
        ]);

    }
}
