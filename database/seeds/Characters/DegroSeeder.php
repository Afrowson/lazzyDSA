<?php

use App\Armor;
use App\Benefice;
use App\Character;
use App\Fightingtalent;
use App\Handicap;
use App\Inventory;
use App\Item;
use App\Language;
use App\Lettering;
use App\Purse;
use App\Rangeweapon;
use App\Shield;
use App\Specialfightingtalent;
use App\Specialtalent;
use App\Talent;
use App\Weapon;
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
            'user_id' => '1',

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

            'lep' => '36',
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

            'ap_total' => '1186',
            'ap_spend' => '1125',
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
        $fvalues = [6, 6, 13, 6, 6, 10, 12, 6, 6, 6, 6, 13, 6, 6];
        $ftalents = Fightingtalent::all();
        foreach ($ftalents as $t => $ftalent) {
            $character->addFightingtalent($ftalent, $fvalues[$t]);
        }

        $handycaps = [
            ['name' => 'Angst vor', 'options' => ['value' => '1', 'type' => 'dem Meer']],
            ['name' => 'Unfähig', 'options' => ['type' => 'Schwimmen']],
            ['name' => 'Prinzipientreue', 'options' => ['value' => '2', 'type' => 'Zwergischer Ehrenkodex']],
            ['name' => 'Persönlichkeitsschwäche', 'options' => ['type' => 'Vorurteil(Elfen)']],
            ['name' => 'Schlechte Eigenschaft', 'options' => ['type' => 'Geiz']],
        ];
        foreach ($handycaps as $handycap) {
            $handicap = Handicap::where('name', '=', $handycap['name'])->first();
            $character->addHandicap($handicap, $handycap['options']);
        }
        $beneficees = [
            ['name' => 'Dunkelsicht', 'options' => ['value' => '2']],
            ['name' => 'Reich', 'options' => ['value' => '5']],
            ['name' => 'Immunität gegen(Gift)', 'options' => ['type' => 'Tulmadron,']],
            ['name' => 'Zwergennase', 'options' => []],
            ['name' => 'Zäher Hund', 'options' => []],
            ['name' => 'Richtungssinn', 'options' => []],
            ['name' => 'Waffenbegabung', 'options' => ['type' => 'Armbrüste']],
            ['name' => 'Waffenbegabung', 'options' => ['type' => 'Hiebwaffen']],
            ['name' => 'Schlechte Eigenschaft', 'options' => ['type' => 'Geiz']],
        ];
        foreach ($beneficees as $beneficee) {
            $benefice = Benefice::where('name', '=', $beneficee['name'])->first();
            $character->addBenefice($benefice, $beneficee['options']);
        }
        $wids = [1, 2, 3];
        $wmods = [
            ['bonus_dmg' => '1', 'at_mod' => '1'],
            [],
            []
        ];
        $rwids = [1];
        $rwmods = [
            ['reload_time' => '+4', 'rules' => 'Diese Balestrina wurde mit einem 5 Schuss Magazin ausgestttet'],
        ];
        $aids = [6];
        $amods = [
            ['name' => ' aus dem Kosch', 'weight' => '+1.5', 'RS' => '+1']
        ];
        $sids = [2];
        $smods = [
            ['weight' => '-1']
        ];

        foreach ($wids as $i => $id) {
            $weapon = Weapon::find($id);
            $character->addWeapon($weapon, $wmods[$i]);
        }
        foreach ($rwids as $i => $id) {
            $rangeweapon = Rangeweapon::find($id);
            $character->addRangeweapon($rangeweapon, $rwmods[$i]);
        }
        foreach ($aids as $i => $id) {
            $armor = Armor::find($id);
            $character->addArmor($armor, $amods[$i]);
        }
        foreach ($sids as $i => $id) {
            $shield = Shield::find($id);
            $character->addShield($shield, $smods[$i]);
        }
        $sftids = [1, 2, 9, 12, 16, 28];
        $sftlevel = [NULL, 1, 1, 1, 1, 1];
        $sftmods = [NULL, NULL, NULL, NULL, NULL, NULL];

        $stids = [21, 24, 30];
        $stlevel = [NULL, NULL, NULL];
        $stmods = ['Xorlosch', NULL, NULL];

        $smtids = [21, 24, 30];
        $smtlevel = [NULL, NULL, NULL];
        $smtmods = [NULL, NULL, NULL];

        foreach ($stids as $i => $stid) {
            $st = Specialtalent::find($stid);
            $character->addSpecialtalent($st, $stlevel[$i], $stmods[$i]);
        }
        foreach ($sftids as $i => $sftid) {
            $sft = Specialfightingtalent::find($sftid);
            $character->addSpecialfightingtalent($sft, $sftlevel[$i], $sftmods[$i]);
        }

        Purse::create([
            'character_id' => $character->id,
            'location' => 'am Körper',
            'dukaten' => '28',
            'silber' => '4',
            'heller' => '0',
            'kreuzer' => '0',
        ]);
        $i1 = Inventory::create([
            'character_id'=>$character->id,
            'location'=>'am Körper',
            'weight'=>'1',
        ]);


        $i2 = Inventory::create([
            'character_id'=>$character->id,
            'location'=>'bei Alrik',
            'weight'=>'0',
        ]);


        $i3 = Inventory::create([
            'character_id'=>$character->id,
            'location'=>'getragen',
            'weight'=>'0',
        ]);



        $iids1= [62, 101, 146, 147, 199, 201];
        $ia1=[1,1,1,1,1,1];
        $iids2= [81, 90, 92, 93, 95, 104];
        $ia2=[1,1,1,1,1,1];
        $iids3= [7,9,16,17,22,];
        $ia3=[1,1,1,1,1];

        $iids3[]= Item::create([
            'name' => 'Bärenfellmantel',
            'description' => 'mit Schafswollfutter (Braun)',
            'value' => '10',
            'weight' => '3.5',
        ])->id;
        $ia3[]=1;

        $iids1[] = Item::create([
            'name' => 'Sumpfkraut',
            'description' => 'macht schön High',
            'value' => '1',
            'weight' => '0.01',
        ])->id;
        $ia1[]=1;

        $iids1[] = Item::create([
            'name' => 'Fake Dukaten',
            'description' => 'täuschend echt',
            'value' => '1',
            'weight' => '0.01',
        ])->id;
        $ia1[]=1;

        foreach ($iids1 as $i=> $iid){
            $item= Item::find($iid);
            $i1->addItem($item, $ia1[$i],NULL);
        }
        foreach ($iids2 as $i=> $iid){
            $item= Item::find($iid);
            $i2->addItem($item, $ia2[$i],NULL);
        }
        foreach ($iids3 as $i=> $iid){
            $item= Item::find($iid);
            $i3->addItem($item, $ia3[$i],NULL);
        }

    }

}