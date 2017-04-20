<?php

use App\Character;
use App\Talents;
use Illuminate\Database\Seeder;

class TalentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Talents::create([
            'name' => 'Fliegen',
            'first_skill' => 'MU',
            'second_skill' => 'IN',
            'third_skill' => 'GE',
            'increase_factor' => '1',
            ]);
        Talents::create([
            'name' => 'Gaukeleien',
            'first_skill' => 'MU',
            'second_skill' => 'CH',
            'third_skill' => 'FF',
            'increase_factor' => '0',
            ]);
        Talents::create([
            'name' => 'Klettern',
            'first_skill' => 'MU',
            'second_skill' => 'GE',
            'third_skill' => 'KK',
            'increase_factor' => '1',
            ]);
        Talents::create([
            'name' => 'Körperbeherrschung',
            'first_skill' => 'GE',
            'second_skill' => 'GE',
            'third_skill' => 'KO',
            'increase_factor' => '3',
            ]);
        Talents::create([
            'name' => 'Kratakt',
            'first_skill' => 'KO',
            'second_skill' => 'KK',
            'third_skill' => 'KK',
            'increase_factor' => '1',
            ]);
        Talents::create([
            'name' => 'Reiten',
            'first_skill' => 'CH',
            'second_skill' => 'GE',
            'third_skill' => 'KK',
            'increase_factor' => '1',
            ]);
        Talents::create([
            'name' => 'Schwimmen',
            'first_skill' => 'GE',
            'second_skill' => 'KO',
            'third_skill' => 'KK',
            'increase_factor' => '1',
            ]);
        Talents::create([
            'name' => 'Selbstbeherrschung',
            'first_skill' => 'MU',
            'second_skill' => 'MU',
            'third_skill' => 'KO',
            'increase_factor' => '3',
            ]);
        Talents::create([
            'name' => 'Singen',
            'first_skill' => 'KL',
            'second_skill' => 'CH',
            'third_skill' => 'KO',
            'increase_factor' => '0',
            ]);
        Talents::create([
            'name' => 'Sinnesschärfe',
            'first_skill' => 'KL',
            'second_skill' => 'IN',
            'third_skill' => 'IN',
            'increase_factor' => '3',
            ]);
        Talents::create([
            'name' => 'Tanzen',
            'first_skill' => 'KL',
            'second_skill' => 'CH',
            'third_skill' => 'GE',
            'increase_factor' => '0',
            ]);
        Talents::create([
            'name' => 'Taschendiebstahl',
            'first_skill' => 'MU',
            'second_skill' => 'FF',
            'third_skill' => 'GE',
            'increase_factor' => '1',
            ]);
        Talents::create([
            'name' => 'Verbergen',
            'first_skill' => 'MU',
            'second_skill' => 'IN',
            'third_skill' => 'GE',
            'increase_factor' => '2',
            ]);
        Talents::create([
            'name' => 'Zechen',
            'first_skill' => 'KL',
            'second_skill' => 'KO',
            'third_skill' => 'KK',
            'increase_factor' => '0',
            ]);
        Talents::create([
            'name' => 'Bekehren & Überzeugen',
            'first_skill' => 'MU',
            'second_skill' => 'KL',
            'third_skill' => 'CH',
            'increase_factor' => '1',
            ]);
        Talents::create([
            'name' => 'Betören',
            'first_skill' => 'MU',
            'second_skill' => 'CH',
            'third_skill' => 'CH',
            'increase_factor' => '1',
            ]);
        Talents::create([
            'name' => 'Einschüchtern',
            'first_skill' => 'MU',
            'second_skill' => 'IN',
            'third_skill' => 'CH',
            'increase_factor' => '1',
            ]);
        Talents::create([
            'name' => 'Etikette',
            'first_skill' => 'KL',
            'second_skill' => 'IN',
            'third_skill' => 'CH',
            'increase_factor' => '1',
            ]);
        Talents::create([
            'name' => 'Gassenwissen',
            'first_skill' => 'KL',
            'second_skill' => 'IN',
            'third_skill' => 'CH',
            'increase_factor' => '2',
            ]);
        Talents::create([
            'name' => 'Menschenkenntnis',
            'first_skill' => 'KL',
            'second_skill' => 'IN',
            'third_skill' => 'CH',
            'increase_factor' => '2',
            ]);
        Talents::create([
            'name' => 'Überreden',
            'first_skill' => 'MU',
            'second_skill' => 'IN',
            'third_skill' => 'CH',
            'increase_factor' => '2',
            ]);
        Talents::create([
            'name' => 'Verkleiden',
            'first_skill' => 'IN',
            'second_skill' => 'CH',
            'third_skill' => 'GE',
            'increase_factor' => '1',
            ]);
        Talents::create([
            'name' => 'Willenskrat',
            'first_skill' => 'MU',
            'second_skill' => 'IN',
            'third_skill' => 'CH',
            'increase_factor' => '3',
            ]);
        Talents::create([
            'name' => 'Fährtensuchen',
            'first_skill' => 'MU',
            'second_skill' => 'IN',
            'third_skill' => 'GE',
            'increase_factor' => '2',
            ]);
        Talents::create([
            'name' => 'Fesseln',
            'first_skill' => 'KL',
            'second_skill' => 'FF',
            'third_skill' => 'KK',
            'increase_factor' => '0',
            ]);
        Talents::create([
            'name' => 'Fischen & Angeln',
            'first_skill' => 'FF',
            'second_skill' => 'GE',
            'third_skill' => 'KO',
            'increase_factor' => '0',
            ]);
        Talents::create([
            'name' => 'Orientierung',
            'first_skill' => 'KL',
            'second_skill' => 'IN',
            'third_skill' => 'IN',
            'increase_factor' => '1',
            ]);
        Talents::create([
            'name' => 'Planzenkunde',
            'first_skill' => 'KL',
            'second_skill' => 'FF',
            'third_skill' => 'KO',
            'increase_factor' => '2',
            ]);
        Talents::create([
            'name' => 'Tierkunde',
            'first_skill' => 'MU',
            'second_skill' => 'MU',
            'third_skill' => 'CH',
            'increase_factor' => '2',
            ]);
        Talents::create([
            'name' => 'Wildnisleben',
            'first_skill' => 'MU',
            'second_skill' => 'GE',
            'third_skill' => 'KO',
            'increase_factor' => '2',
            ]);
        Talents::create([
            'name' => 'Brett - & Glücksspiel',
            'first_skill' => 'KL',
            'second_skill' => 'KL',
            'third_skill' => 'IN',
            'increase_factor' => '0',
            ]);
        Talents::create([
            'name' => 'Geographie',
            'first_skill' => 'KL',
            'second_skill' => 'KL',
            'third_skill' => 'IN',
            'increase_factor' => '1',
            ]);
        Talents::create([
            'name' => 'Geschichtswissen',
            'first_skill' => 'KL',
            'second_skill' => 'KL',
            'third_skill' => 'IN',
            'increase_factor' => '1',
            ]);
        Talents::create([
            'name' => 'Götter & Kulte',
            'first_skill' => 'KL',
            'second_skill' => 'KL',
            'third_skill' => 'IN',
            'increase_factor' => '1',
            ]);
        Talents::create([
            'name' => 'Kriegskunst',
            'first_skill' => 'MU',
            'second_skill' => 'KL',
            'third_skill' => 'IN',
            'increase_factor' => '1',
            ]);
        Talents::create([
            'name' => 'Magiekunde',
            'first_skill' => 'KL',
            'second_skill' => 'KL',
            'third_skill' => 'IN',
            'increase_factor' => '2',
            ]);
        Talents::create([
            'name' => 'Mechanik',
            'first_skill' => 'KL',
            'second_skill' => 'KL',
            'third_skill' => 'FF',
            'increase_factor' => '1',
            ]);
        Talents::create([
            'name' => 'Rechnen',
            'first_skill' => 'KL',
            'second_skill' => 'KL',
            'third_skill' => 'IN',
            'increase_factor' => '0',
            ]);
        Talents::create([
            'name' => 'Rechtskunde',
            'first_skill' => 'KL',
            'second_skill' => 'KL',
            'third_skill' => 'IN',
            'increase_factor' => '0',
            ]);
        Talents::create([
            'name' => 'Sagen & Legenden',
            'first_skill' => 'KL',
            'second_skill' => 'KL',
            'third_skill' => 'IN',
            'increase_factor' => '1',
            ]);
        Talents::create([
            'name' => 'Sphärenkunde',
            'first_skill' => 'KL',
            'second_skill' => 'KL',
            'third_skill' => 'IN',
            'increase_factor' => '1',
            ]);
        Talents::create([
            'name' => 'Sternkunde',
            'first_skill' => 'KL',
            'second_skill' => 'KL',
            'third_skill' => 'IN',
            'increase_factor' => '0',
            ]);
        Talents::create([
            'name' => 'Alchimie',
            'first_skill' => 'MU',
            'second_skill' => 'KL',
            'third_skill' => 'FF',
            'increase_factor' => '2',
            ]);
        Talents::create([
            'name' => 'Boote & Schife',
            'first_skill' => 'FF',
            'second_skill' => 'GE',
            'third_skill' => 'KK',
            'increase_factor' => '1',
            ]);
        Talents::create([
            'name' => 'Fahrzeuge',
            'first_skill' => 'CH',
            'second_skill' => 'FF',
            'third_skill' => 'KO',
            'increase_factor' => '0',
            ]);
        Talents::create([
            'name' => 'Handel',
            'first_skill' => 'KL',
            'second_skill' => 'IN',
            'third_skill' => 'CH',
            'increase_factor' => '1',
            ]);
        Talents::create([
            'name' => 'Heilkunde Git',
            'first_skill' => 'MU',
            'second_skill' => 'KL',
            'third_skill' => 'IN',
            'increase_factor' => '1',
            ]);
        Talents::create([
            'name' => 'Heilkunde Krankheiten',
            'first_skill' => 'MU',
            'second_skill' => 'IN',
            'third_skill' => 'KO',
            'increase_factor' => '1',
            ]);
        Talents::create([
            'name' => 'Heilkunde Seele',
            'first_skill' => 'IN',
            'second_skill' => 'CH',
            'third_skill' => 'KO',
            'increase_factor' => '1',
            ]);
        Talents::create([
            'name' => 'Heilkunde Wunden',
            'first_skill' => 'KL',
            'second_skill' => 'FF',
            'third_skill' => 'FF',
            'increase_factor' => '3',
            ]);
        Talents::create([
            'name' => 'Holzbearbeitung',
            'first_skill' => 'FF',
            'second_skill' => 'GE',
            'third_skill' => 'KK',
            'increase_factor' => '1',
            ]);
        Talents::create([
            'name' => 'Lebensmittelbearbeitung',
            'first_skill' => 'IN',
            'second_skill' => 'FF',
            'third_skill' => 'FF',
            'increase_factor' => '0',
            ]);
        Talents::create([
            'name' => 'Lederbearbeitung',
            'first_skill' => 'FF',
            'second_skill' => 'GE',
            'third_skill' => 'KO',
            'increase_factor' => '1',
            ]);
        Talents::create([
            'name' => 'Malen & Zeichnen',
            'first_skill' => 'IN',
            'second_skill' => 'FF',
            'third_skill' => 'FF',
            'increase_factor' => '0',
            ]);
        Talents::create([
            'name' => 'Metallbearbeitung',
            'first_skill' => 'FF',
            'second_skill' => 'KO',
            'third_skill' => 'KK',
            'increase_factor' => '2',
            ]);
        Talents::create([
            'name' => 'Musizieren',
            'first_skill' => 'CH',
            'second_skill' => 'FF',
            'third_skill' => 'KO',
            'increase_factor' => '0',
            ]);
        Talents::create([
            'name' => 'Schlösserknacken',
            'first_skill' => 'IN',
            'second_skill' => 'FF',
            'third_skill' => 'FF',
            'increase_factor' => '2',
            ]);
        Talents::create([
            'name' => 'Steinbearbeitung',
            'first_skill' => 'FF',
            'second_skill' => 'FF',
            'third_skill' => 'KK',
            'increase_factor' => '0',
            ]);
        Talents::create([
            'name' => 'Stoffbearbeitung',
            'first_skill' => 'KL',
            'second_skill' => 'FF',
            'third_skill' => 'FF',
            'increase_factor' => '0',
            ]);

    }
}