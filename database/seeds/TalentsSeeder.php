<?php

use App\Character;
use App\Talent;
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
        Talent::create([
            'name' => 'Fliegen',
            'first_skill' => 'MU',
            'second_skill' => 'IN',
            'third_skill' => 'GE',
            'increase_factor' => '1',
            ]);
        Talent::create([
            'name' => 'Gaukeleien',
            'first_skill' => 'MU',
            'second_skill' => 'CH',
            'third_skill' => 'FF',
            'increase_factor' => '0',
            ]);
        Talent::create([
            'name' => 'Klettern',
            'first_skill' => 'MU',
            'second_skill' => 'GE',
            'third_skill' => 'KK',
            'increase_factor' => '1',
            ]);
        Talent::create([
            'name' => 'Körperbeherrschung',
            'first_skill' => 'GE',
            'second_skill' => 'GE',
            'third_skill' => 'KO',
            'increase_factor' => '3',
            ]);
        Talent::create([
            'name' => 'Kratakt',
            'first_skill' => 'KO',
            'second_skill' => 'KK',
            'third_skill' => 'KK',
            'increase_factor' => '1',
            ]);
        Talent::create([
            'name' => 'Reiten',
            'first_skill' => 'CH',
            'second_skill' => 'GE',
            'third_skill' => 'KK',
            'increase_factor' => '1',
            ]);
        Talent::create([
            'name' => 'Schwimmen',
            'first_skill' => 'GE',
            'second_skill' => 'KO',
            'third_skill' => 'KK',
            'increase_factor' => '1',
            ]);
        Talent::create([
            'name' => 'Selbstbeherrschung',
            'first_skill' => 'MU',
            'second_skill' => 'MU',
            'third_skill' => 'KO',
            'increase_factor' => '3',
            ]);
        Talent::create([
            'name' => 'Singen',
            'first_skill' => 'KL',
            'second_skill' => 'CH',
            'third_skill' => 'KO',
            'increase_factor' => '0',
            ]);
        Talent::create([
            'name' => 'Sinnesschärfe',
            'first_skill' => 'KL',
            'second_skill' => 'IN',
            'third_skill' => 'IN',
            'increase_factor' => '3',
            ]);
        Talent::create([
            'name' => 'Tanzen',
            'first_skill' => 'KL',
            'second_skill' => 'CH',
            'third_skill' => 'GE',
            'increase_factor' => '0',
            ]);
        Talent::create([
            'name' => 'Taschendiebstahl',
            'first_skill' => 'MU',
            'second_skill' => 'FF',
            'third_skill' => 'GE',
            'increase_factor' => '1',
            ]);
        Talent::create([
            'name' => 'Verbergen',
            'first_skill' => 'MU',
            'second_skill' => 'IN',
            'third_skill' => 'GE',
            'increase_factor' => '2',
            ]);
        Talent::create([
            'name' => 'Zechen',
            'first_skill' => 'KL',
            'second_skill' => 'KO',
            'third_skill' => 'KK',
            'increase_factor' => '0',
            ]);
        Talent::create([
            'name' => 'Bekehren & Überzeugen',
            'first_skill' => 'MU',
            'second_skill' => 'KL',
            'third_skill' => 'CH',
            'increase_factor' => '1',
            ]);
        Talent::create([
            'name' => 'Betören',
            'first_skill' => 'MU',
            'second_skill' => 'CH',
            'third_skill' => 'CH',
            'increase_factor' => '1',
            ]);
        Talent::create([
            'name' => 'Einschüchtern',
            'first_skill' => 'MU',
            'second_skill' => 'IN',
            'third_skill' => 'CH',
            'increase_factor' => '1',
            ]);
        Talent::create([
            'name' => 'Etikette',
            'first_skill' => 'KL',
            'second_skill' => 'IN',
            'third_skill' => 'CH',
            'increase_factor' => '1',
            ]);
        Talent::create([
            'name' => 'Gassenwissen',
            'first_skill' => 'KL',
            'second_skill' => 'IN',
            'third_skill' => 'CH',
            'increase_factor' => '2',
            ]);
        Talent::create([
            'name' => 'Menschenkenntnis',
            'first_skill' => 'KL',
            'second_skill' => 'IN',
            'third_skill' => 'CH',
            'increase_factor' => '2',
            ]);
        Talent::create([
            'name' => 'Überreden',
            'first_skill' => 'MU',
            'second_skill' => 'IN',
            'third_skill' => 'CH',
            'increase_factor' => '2',
            ]);
        Talent::create([
            'name' => 'Verkleiden',
            'first_skill' => 'IN',
            'second_skill' => 'CH',
            'third_skill' => 'GE',
            'increase_factor' => '1',
            ]);
        Talent::create([
            'name' => 'Willenskrat',
            'first_skill' => 'MU',
            'second_skill' => 'IN',
            'third_skill' => 'CH',
            'increase_factor' => '3',
            ]);
        Talent::create([
            'name' => 'Fährtensuchen',
            'first_skill' => 'MU',
            'second_skill' => 'IN',
            'third_skill' => 'GE',
            'increase_factor' => '2',
            ]);
        Talent::create([
            'name' => 'Fesseln',
            'first_skill' => 'KL',
            'second_skill' => 'FF',
            'third_skill' => 'KK',
            'increase_factor' => '0',
            ]);
        Talent::create([
            'name' => 'Fischen & Angeln',
            'first_skill' => 'FF',
            'second_skill' => 'GE',
            'third_skill' => 'KO',
            'increase_factor' => '0',
            ]);
        Talent::create([
            'name' => 'Orientierung',
            'first_skill' => 'KL',
            'second_skill' => 'IN',
            'third_skill' => 'IN',
            'increase_factor' => '1',
            ]);
        Talent::create([
            'name' => 'Planzenkunde',
            'first_skill' => 'KL',
            'second_skill' => 'FF',
            'third_skill' => 'KO',
            'increase_factor' => '2',
            ]);
        Talent::create([
            'name' => 'Tierkunde',
            'first_skill' => 'MU',
            'second_skill' => 'MU',
            'third_skill' => 'CH',
            'increase_factor' => '2',
            ]);
        Talent::create([
            'name' => 'Wildnisleben',
            'first_skill' => 'MU',
            'second_skill' => 'GE',
            'third_skill' => 'KO',
            'increase_factor' => '2',
            ]);
        Talent::create([
            'name' => 'Brett - & Glücksspiel',
            'first_skill' => 'KL',
            'second_skill' => 'KL',
            'third_skill' => 'IN',
            'increase_factor' => '0',
            ]);
        Talent::create([
            'name' => 'Geographie',
            'first_skill' => 'KL',
            'second_skill' => 'KL',
            'third_skill' => 'IN',
            'increase_factor' => '1',
            ]);
        Talent::create([
            'name' => 'Geschichtswissen',
            'first_skill' => 'KL',
            'second_skill' => 'KL',
            'third_skill' => 'IN',
            'increase_factor' => '1',
            ]);
        Talent::create([
            'name' => 'Götter & Kulte',
            'first_skill' => 'KL',
            'second_skill' => 'KL',
            'third_skill' => 'IN',
            'increase_factor' => '1',
            ]);
        Talent::create([
            'name' => 'Kriegskunst',
            'first_skill' => 'MU',
            'second_skill' => 'KL',
            'third_skill' => 'IN',
            'increase_factor' => '1',
            ]);
        Talent::create([
            'name' => 'Magiekunde',
            'first_skill' => 'KL',
            'second_skill' => 'KL',
            'third_skill' => 'IN',
            'increase_factor' => '2',
            ]);
        Talent::create([
            'name' => 'Mechanik',
            'first_skill' => 'KL',
            'second_skill' => 'KL',
            'third_skill' => 'FF',
            'increase_factor' => '1',
            ]);
        Talent::create([
            'name' => 'Rechnen',
            'first_skill' => 'KL',
            'second_skill' => 'KL',
            'third_skill' => 'IN',
            'increase_factor' => '0',
            ]);
        Talent::create([
            'name' => 'Rechtskunde',
            'first_skill' => 'KL',
            'second_skill' => 'KL',
            'third_skill' => 'IN',
            'increase_factor' => '0',
            ]);
        Talent::create([
            'name' => 'Sagen & Legenden',
            'first_skill' => 'KL',
            'second_skill' => 'KL',
            'third_skill' => 'IN',
            'increase_factor' => '1',
            ]);
        Talent::create([
            'name' => 'Sphärenkunde',
            'first_skill' => 'KL',
            'second_skill' => 'KL',
            'third_skill' => 'IN',
            'increase_factor' => '1',
            ]);
        Talent::create([
            'name' => 'Sternkunde',
            'first_skill' => 'KL',
            'second_skill' => 'KL',
            'third_skill' => 'IN',
            'increase_factor' => '0',
            ]);
        Talent::create([
            'name' => 'Alchimie',
            'first_skill' => 'MU',
            'second_skill' => 'KL',
            'third_skill' => 'FF',
            'increase_factor' => '2',
            ]);
        Talent::create([
            'name' => 'Boote & Schife',
            'first_skill' => 'FF',
            'second_skill' => 'GE',
            'third_skill' => 'KK',
            'increase_factor' => '1',
            ]);
        Talent::create([
            'name' => 'Fahrzeuge',
            'first_skill' => 'CH',
            'second_skill' => 'FF',
            'third_skill' => 'KO',
            'increase_factor' => '0',
            ]);
        Talent::create([
            'name' => 'Handel',
            'first_skill' => 'KL',
            'second_skill' => 'IN',
            'third_skill' => 'CH',
            'increase_factor' => '1',
            ]);
        Talent::create([
            'name' => 'Heilkunde Git',
            'first_skill' => 'MU',
            'second_skill' => 'KL',
            'third_skill' => 'IN',
            'increase_factor' => '1',
            ]);
        Talent::create([
            'name' => 'Heilkunde Krankheiten',
            'first_skill' => 'MU',
            'second_skill' => 'IN',
            'third_skill' => 'KO',
            'increase_factor' => '1',
            ]);
        Talent::create([
            'name' => 'Heilkunde Seele',
            'first_skill' => 'IN',
            'second_skill' => 'CH',
            'third_skill' => 'KO',
            'increase_factor' => '1',
            ]);
        Talent::create([
            'name' => 'Heilkunde Wunden',
            'first_skill' => 'KL',
            'second_skill' => 'FF',
            'third_skill' => 'FF',
            'increase_factor' => '3',
            ]);
        Talent::create([
            'name' => 'Holzbearbeitung',
            'first_skill' => 'FF',
            'second_skill' => 'GE',
            'third_skill' => 'KK',
            'increase_factor' => '1',
            ]);
        Talent::create([
            'name' => 'Lebensmittelbearbeitung',
            'first_skill' => 'IN',
            'second_skill' => 'FF',
            'third_skill' => 'FF',
            'increase_factor' => '0',
            ]);
        Talent::create([
            'name' => 'Lederbearbeitung',
            'first_skill' => 'FF',
            'second_skill' => 'GE',
            'third_skill' => 'KO',
            'increase_factor' => '1',
            ]);
        Talent::create([
            'name' => 'Malen & Zeichnen',
            'first_skill' => 'IN',
            'second_skill' => 'FF',
            'third_skill' => 'FF',
            'increase_factor' => '0',
            ]);
        Talent::create([
            'name' => 'Metallbearbeitung',
            'first_skill' => 'FF',
            'second_skill' => 'KO',
            'third_skill' => 'KK',
            'increase_factor' => '2',
            ]);
        Talent::create([
            'name' => 'Musizieren',
            'first_skill' => 'CH',
            'second_skill' => 'FF',
            'third_skill' => 'KO',
            'increase_factor' => '0',
            ]);
        Talent::create([
            'name' => 'Schlösserknacken',
            'first_skill' => 'IN',
            'second_skill' => 'FF',
            'third_skill' => 'FF',
            'increase_factor' => '2',
            ]);
        Talent::create([
            'name' => 'Steinbearbeitung',
            'first_skill' => 'FF',
            'second_skill' => 'FF',
            'third_skill' => 'KK',
            'increase_factor' => '0',
            ]);
        Talent::create([
            'name' => 'Stoffbearbeitung',
            'first_skill' => 'KL',
            'second_skill' => 'FF',
            'third_skill' => 'FF',
            'increase_factor' => '0',
            ]);

    }
}