<?php

use App\Armor;
use App\Benefice;
use App\Character;
use App\Fightingtalent;
use App\Handicap;
use App\Language;
use App\Lettering;
use App\Specialmagictalent;
use App\Specialtalent;
use App\Talent;
use App\Weapon;
use Illuminate\Database\Seeder;

class LeonardoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $character = Character::create([
            'name' => 'Leonardo Descartes',
            'race' => 'Mensch',
            'profession' => 'Grau Magier',
            'gender' => '1',
            'height' => '195',
            'weight' => '85',
            'age' => '19',
            'hair' => 'blond',
            'eyes' => 'blau',
            'culture' => 'Horasier',
            'social' => 'Frei',
            'title' => 'Adeptuus',

            'MU' => '13',
            'KL' => '14',
            'IN' => '14',
            'CH' => '13',
            'FF' => '12',
            'GE' => '10',
            'KO' => '12',
            'KK' => '12',

            'lep' => '29',
            'asp' => '32',
            'kap' => '0',
            'lep_max' => '29',
            'asp_max' => '34',
            'kap_max' => '0',

            'SK' => '2',
            'ZK' => '1',
            'AW' => '5',
            'IT' => '12',
            'GW' => '8',

            'SP' => '3',

            'ap_total' => '1100',
            'ap_spend' => '1100',
        ]);

        $tvalues = [0, 0, 3, 4, 0, 0, 3, 6, 0, 3, 0, 0, 0, 5, 0, 0, 0, 5, 0, 2,
            0, 0, 4, 0, 0, 0, 2, 0, 0, 0, 0, 1, 4, 4, 0, 8, 1, 6, 4, 4, 3, 0, 1,
            0, 0, 1, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0, 0];
        $talents = Talent::all();
        foreach ($talents as $t => $talent) {
            $character->addTalent($talent, $tvalues[$t]);
        }
        $languages = [6, 8, 23];
        $lvalues = [2, 4, 1];

        foreach ($languages as $t => $l) {
            $lang = Language::find($l);
            $character->addLanguage($lang, $lvalues[$t]);
        }

        $letterings = [7, 9, 14];
        foreach ($letterings as $id) {
            $lett = Lettering::find($id);
            $character->addLettering($lett);
        }
        $fvalues = [6, 6, 6, 6, 6, 6, 6, 6, 10, 6, 6, 6, 6, 6];
        $ftalents = Fightingtalent::all();
        foreach ($ftalents as $t => $ftalent) {
            $character->addFightingtalent($ftalent, $fvalues[$t]);
        }

        $handycaps = [
            ['name' => 'Angst vor', 'options' => ['value' => '1', 'type' => 'Höhe']],
            ['name' => 'Verpflichtungen', 'options' => ['value' => '2', 'type' => 'gegenüber dem Lehrmeister']],
            ['name' => 'Schlechte Angewohnheit', 'options' => ['type' => 'Raucher']],
        ];
        foreach ($handycaps as $handycap) {
            $handicap = Handicap::where('name', '=', $handycap['name'])->first();
            $character->addHandicap($handicap, $handycap['options']);
        }
        $beneficees = [
            ['name' => 'Verbesserte Regeneration der Astralenergie', 'options' => ['value' => '2']],
            ['name' => 'Zauberer', 'options' => []],
            ['name' => 'Herausragende Fertigkeit', 'options' => ['type' => 'Fulminictus']],
        ];
        foreach ($beneficees as $beneficee) {
            $benefice = Benefice::where('name', '=', $beneficee['name'])->first();
            $character->addBenefice($benefice, $beneficee['options']);
        }
        $wids = [4];
        $wmods = [
            []
        ];
        $aids = [1];
        $amods = [
            ['name' => ' eines Magiers', 'weight' => '+2']
        ];
        foreach ($wids as $i => $id) {
            $weapon = Weapon::find($id);
            $character->addWeapon($weapon, $wmods[$i]);
        }
        foreach ($aids as $i => $id) {
            $armor = Armor::find($id);
            $character->addArmor($armor, $amods[$i]);
        }
        $stids = [3, 21];
        $stlevel = [NULL, NULL];
        $stmods = ['Codex Albyricus','Xorlosch'];

        $smtids = [3, 6, 7, 8, 9];
        $smtlevel = [NULL, NULL, NULL, NULL, NULL];
        $smtmods = [NULL, NULL, NULL, NULL, NULL];

        foreach ($stids as $i => $stid) {
            $st = Specialtalent::find($stid);
            $character->addSpecialtalent($st, $stlevel[$i], $stmods[$i]);
        }

        foreach ($smtids as $i => $smtid) {
            $smt = Specialmagictalent::find($smtid);
            $character->addSpecialmagictalent($smt, $smtlevel[$i], $smtmods[$i]);
        }


        //Descartes uniqe Items:
        Item::create([
            'name' => 'Kunsvoller Pfeifenkopf',
            'description' => '',
            'value' => '',
            'weight' => '',
        ]);
        Item::create([
            'name' => 'SpielChips',
            'description' => '',
            'value' => '',
            'weight' => '',
        ]);
    }
}
