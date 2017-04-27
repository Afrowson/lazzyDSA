<?php

use App\Character;
use App\Language;
use App\Lettering;
use App\Talent;
use Illuminate\Database\Seeder;

class DegroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $character = Character::create([
            'name' => 'Degro',
            'race' => 'Zwerg',
            'profession' => 'Warrior',
            'gender' => '1',
            'height' => '135',
            'weight' => '61',
            'age' => '55',
            'hair' => 'feuerrot',
            'eyes' => 'grün',
            'culture' => 'Ambosszwerg',
            'social' => 'Frei',
            'place_of_birth' => 'Xorlosch',

            'MU' => '14',
            'KL' => '13',
            'IN' => '13',
            'CH' => '8',
            'FF' => '13',
            'GE' => '13',
            'KO' => '14',
            'KK' => '14',

            'lep' => '31',
            'asp' => '0',
            'kap' => '0',
            'lep_max' => '36',
            'asp_max' => '0',
            'kap_max' => '0',

            'SK' => '3',
            'ZK' => '3',
            'AW' => '7',
            'IT' => '15',
            'GW' => '6',

            'SP' => '3',

            'ap_total' => '1147',
            'ap_spend' => '1119',
        ]);

        $tvalues = [0, 0, 0, 6, 5, 0, 0, 5, 0, 6, 0, 0, 4, 10, 0, 0, 7, 0, 0, 5,
            0, 0, 3, 0, 0, 0, 5, 0, 0, 3, 5, 0, 1, 3, 8, 0, 5, 8, 0, 5, 0, 0, 0,
            0, 0, 2, 0, 0, 0, 5, 0, 0, 0, 0, 6, 0, 0, 4, 0];
        $talents = Talent::all();
        foreach ($talents as $t => $talent) {
            $character->addTalent($talent, $tvalues[$t]);
        }
        $languages = [8, 17];
        $lvalues = [3, 4];

        foreach ($languages as $t => $l) {
            $lang = Language::find($l);
            $character->addLanguage($lang, $lvalues[$t]);
        }

        $letterings = [9, 11];
        foreach ($letterings as $id) {
            $lett = Lettering::find($id);
            $character->addLettering($lett);
        }

    }

}